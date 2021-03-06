<?php


class HttpRequest {
	/**
	 * @var string url
	 * URL
	 */
	public $url = "";

	/**
	 * @var string method
	 * HTTP method ( GET, POST, etc )
	 */
	public $method = "GET";

	/**
	 * @var Array headers
	 * Associative array of "http header name" => "value"
	 */
	public $headers = array();

	/**
	 * @var Array urlParams
	 * Associative array of parameters added to URL
	 * <url>?param1=value1&param2=value2
	 */
	public $urlParams = array();

	/**
	 * @var Array postPayload
	 * Associative array of parameters passed in the request body
	 */
	public $postPayload = array();

	/**
	 * @var string body
	 * 
	 */
	public $body = null;


	function __construct( $url, $method = "GET", $urlParams = array(), $postPayload = array(), $headers = array() ) {
		$this->url = $url;
		$this->urlParams = $urlParams;
		$this->postPayload = $postPayload;
		$this->method = $method;
		$this->headers = $headers;
		if( !is_array( $this->postPayload ) ) {
			$this->postPayload = array();
			$this->body = $postPayload;
		}
		if( !is_array( $this->urlParams ) ) {
			$this->urlParams = array();
		}
		if( !is_array( $this->headers ) ) {
			$this->headers = array();
		}
	}

	function getUrl() {
		return prepareUrl( $this->url, $this->urlParams );
	}

	function addBasicAuthorization( $username, $password ) {
		$this->headers["Authorization"] = "Basic " . base64_encode( $username . ':' .$password );
	}

	/** 
	 * 	Return unique identifier of request for caching.
	 *  Null to prohibit caching
	 */ 
	function getRequestKey() {
		if( $this->postPayload || $this->body ) {
			return null;
		}
		return $this->getUrl();
	}
	
	/**
	 *
	 */
	public function prepareRequestBody() {
		if( $this->body !== null ) {
			return $this->body;
		}
		if( !$this->postPayload ) {
			return "";
		}
		$contentType = $this->headers["Content-Type"];
		$cTypeParts = explode( ";", $contentType );
		$type = "";
		if( count( $cTypeParts ) > 0 ) {
			$type = strtolower( trim( $cTypeParts[0] ) );
		}
		if( !$type || $type == "application/x-www-form-urlencoded" ) {
			if( !$type )
				$this->headers["Content-Type"] = "application/x-www-form-urlencoded";
			return prepareUrlQuery( $this->postPayload );
		}
		if( $type == "application/json" ) {
			return my_json_encode( $this->postPayload );
		}
		if( $type == "multipart/form-data" ) {
			//	ignore specified boundary and generate a new one
			$boundary = generatePassword( 40 );
			$this->headers["Content-Type"] = $type . ";boundary=" . $boundary;
			$bodyParts = array();
			foreach( $this->postPayload as $name => $value ) {
				$bodyParts[] = "--" . $boundary . "\r\nContent-disposition: form-data; name=\"" . $name . "\"\r\n\r\n". $value . "\r\n";
			}
			$bodyParts[] = "--" . $boundary . "--\r\n";
			return implode( "", $bodyParts );
		}
		return "";
	}
	
	
	/**
	 * @return Array( 
	 *  	header => string
	 *  	error? => boolean
	 *  	content? => string
	 *  	responseCode ? => number )
	 */
	public function run() {
		$url = prepareUrl( $this->url, $this->urlParams );
		
		$body = $this->prepareRequestBody();
		$bodyLength = strlen_bin( $body );
		if( $bodyLength ) {
			$this->headers["Content-Length"] = $bodyLength;
		}
		
		global $dDebug;
		if( $dDebug ) {
			echo "HTTP request:";
			echo "\nurl:";
			print_r( $this->url );
			echo "\nmethod:";
			print_r( $this->method );
			echo "\nheaders:";
			print_r( $this->headers );
			echo "\nbody:";
			print_r( $this->body );
		}
		$ret = runner_http_request( $this->url, $body, $this->method, $this->headers );
		if( $dDebug ) {
			echo "HTTP response:";
			print_r( $ret );
		}

		if( $ret["responseCode"] < 200 || $ret["responseCode"] >= 300 ) {
			$ret["error"] = true;
		}
		
		return $ret;		
	}

	/**
	 * Parse "application/json" or "urlencoded"
	 * @param Array HttpRequest::run result
	 * @return Array
	 */
	public static function parseResponseArray( $response ) {
		$headers = explode( "\r\n", $response["header"] );
		$urlencoded = false;
		foreach( $headers as $h ) {
			if( stripos( $h, "Content-Type:" ) === 0 && stripos( $h, "urlencoded") !== false ) {
				$urlencoded = true;
				break;
			}
		}
		if( $urlencoded ) {
			$result = array();
			$result = parseQueryString( $response["content"] );
			return $result;
		}
		return my_json_decode( $response["content"] );
	}
}

?>