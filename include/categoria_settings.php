<?php
$tdatacategoria = array();
$tdatacategoria[".searchableFields"] = array();
$tdatacategoria[".ShortName"] = "categoria";
$tdatacategoria[".OwnerID"] = "";
$tdatacategoria[".OriginalTable"] = "Categoria";


$tdatacategoria[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacategoria[".originalPagesByType"] = $tdatacategoria[".pagesByType"];
$tdatacategoria[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacategoria[".originalPages"] = $tdatacategoria[".pages"];
$tdatacategoria[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacategoria[".originalDefaultPages"] = $tdatacategoria[".defaultPages"];

//	field labels
$fieldLabelscategoria = array();
$fieldToolTipscategoria = array();
$pageTitlescategoria = array();
$placeHolderscategoria = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscategoria["English"] = array();
	$fieldToolTipscategoria["English"] = array();
	$placeHolderscategoria["English"] = array();
	$pageTitlescategoria["English"] = array();
	$fieldLabelscategoria["English"]["Codigo"] = "Codigo";
	$fieldToolTipscategoria["English"]["Codigo"] = "";
	$placeHolderscategoria["English"]["Codigo"] = "";
	$fieldLabelscategoria["English"]["Nome"] = "Nome";
	$fieldToolTipscategoria["English"]["Nome"] = "";
	$placeHolderscategoria["English"]["Nome"] = "";
	if (count($fieldToolTipscategoria["English"]))
		$tdatacategoria[".isUseToolTips"] = true;
}


	$tdatacategoria[".NCSearch"] = true;



$tdatacategoria[".shortTableName"] = "categoria";
$tdatacategoria[".nSecOptions"] = 0;

$tdatacategoria[".mainTableOwnerID"] = "";
$tdatacategoria[".entityType"] = 0;
$tdatacategoria[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatacategoria[".strOriginalTableName"] = "Categoria";

	



$tdatacategoria[".showAddInPopup"] = false;

$tdatacategoria[".showEditInPopup"] = false;

$tdatacategoria[".showViewInPopup"] = false;

$tdatacategoria[".listAjax"] = false;
//	temporary
//$tdatacategoria[".listAjax"] = false;

	$tdatacategoria[".audit"] = false;

	$tdatacategoria[".locking"] = false;


$pages = $tdatacategoria[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategoria[".edit"] = true;
	$tdatacategoria[".afterEditAction"] = 1;
	$tdatacategoria[".closePopupAfterEdit"] = 1;
	$tdatacategoria[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategoria[".add"] = true;
$tdatacategoria[".afterAddAction"] = 1;
$tdatacategoria[".closePopupAfterAdd"] = 1;
$tdatacategoria[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategoria[".list"] = true;
}



$tdatacategoria[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategoria[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategoria[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategoria[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategoria[".printFriendly"] = true;
}



$tdatacategoria[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategoria[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategoria[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategoria[".isUseAjaxSuggest"] = true;

$tdatacategoria[".rowHighlite"] = true;





$tdatacategoria[".ajaxCodeSnippetAdded"] = false;

$tdatacategoria[".buttonsAdded"] = false;

$tdatacategoria[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategoria[".isUseTimeForSearch"] = false;


$tdatacategoria[".badgeColor"] = "6B8E23";


$tdatacategoria[".allSearchFields"] = array();
$tdatacategoria[".filterFields"] = array();
$tdatacategoria[".requiredSearchFields"] = array();

$tdatacategoria[".googleLikeFields"] = array();
$tdatacategoria[".googleLikeFields"][] = "Codigo";
$tdatacategoria[".googleLikeFields"][] = "Nome";



$tdatacategoria[".tableType"] = "list";

$tdatacategoria[".printerPageOrientation"] = 0;
$tdatacategoria[".nPrinterPageScale"] = 100;

$tdatacategoria[".nPrinterSplitRecords"] = 40;

$tdatacategoria[".geocodingEnabled"] = false;










$tdatacategoria[".pageSize"] = 20;

$tdatacategoria[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacategoria[".strOrderBy"] = $tstrOrderBy;

$tdatacategoria[".orderindexes"] = array();


$tdatacategoria[".sqlHead"] = "SELECT Codigo,  	Nome";
$tdatacategoria[".sqlFrom"] = "FROM Categoria";
$tdatacategoria[".sqlWhereExpr"] = "";
$tdatacategoria[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategoria[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategoria[".arrGroupsPerPage"] = $arrGPP;

$tdatacategoria[".highlightSearchResults"] = true;

$tableKeyscategoria = array();
$tableKeyscategoria[] = "Codigo";
$tdatacategoria[".Keys"] = $tableKeyscategoria;


$tdatacategoria[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Categoria";
	$fdata["Label"] = GetFieldLabel("Categoria","Codigo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacategoria["Codigo"] = $fdata;
		$tdatacategoria[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Categoria";
	$fdata["Label"] = GetFieldLabel("Categoria","Nome");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacategoria["Nome"] = $fdata;
		$tdatacategoria[".searchableFields"][] = "Nome";


$tables_data["Categoria"]=&$tdatacategoria;
$field_labels["Categoria"] = &$fieldLabelscategoria;
$fieldToolTips["Categoria"] = &$fieldToolTipscategoria;
$placeHolders["Categoria"] = &$placeHolderscategoria;
$page_titles["Categoria"] = &$pageTitlescategoria;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Categoria"] = array();
//	Material
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Material";
		$detailsParam["dOriginalTable"] = "Material";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "material";
	$detailsParam["dCaptionTable"] = GetTableCaption("Material");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Categoria"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Categoria"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Categoria"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Categoria"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Categoria"][$dIndex]["detailKeys"][]="Codcategoria";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Categoria"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_categoria()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome";
$proto0["m_strFrom"] = "FROM Categoria";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "Categoria",
	"m_srcTableName" => "Categoria"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Categoria";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Categoria",
	"m_srcTableName" => "Categoria"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Categoria";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Categoria";
$proto11["m_srcTableName"] = "Categoria";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Nome";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Categoria";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Categoria";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Categoria";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categoria = createSqlQuery_categoria();


	
		;

		

$tdatacategoria[".sqlquery"] = $queryData_categoria;



$tableEvents["Categoria"] = new eventsBase;
$tdatacategoria[".hasEvents"] = false;

?>