<?php
$tdataconsultorio_odontologico_usuarios = array();
$tdataconsultorio_odontologico_usuarios[".searchableFields"] = array();
$tdataconsultorio_odontologico_usuarios[".ShortName"] = "consultorio_odontologico_usuarios";
$tdataconsultorio_odontologico_usuarios[".OwnerID"] = "ID";
$tdataconsultorio_odontologico_usuarios[".OriginalTable"] = "Consultorio_Odontologico_usuarios";


$tdataconsultorio_odontologico_usuarios[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataconsultorio_odontologico_usuarios[".originalPagesByType"] = $tdataconsultorio_odontologico_usuarios[".pagesByType"];
$tdataconsultorio_odontologico_usuarios[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataconsultorio_odontologico_usuarios[".originalPages"] = $tdataconsultorio_odontologico_usuarios[".pages"];
$tdataconsultorio_odontologico_usuarios[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataconsultorio_odontologico_usuarios[".originalDefaultPages"] = $tdataconsultorio_odontologico_usuarios[".defaultPages"];

//	field labels
$fieldLabelsconsultorio_odontologico_usuarios = array();
$fieldToolTipsconsultorio_odontologico_usuarios = array();
$pageTitlesconsultorio_odontologico_usuarios = array();
$placeHoldersconsultorio_odontologico_usuarios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"] = array();
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"] = array();
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"] = array();
	$pageTitlesconsultorio_odontologico_usuarios["Portuguese(Brazil)"] = array();
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["username"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["password"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["active"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	$placeHoldersconsultorio_odontologico_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	if (count($fieldToolTipsconsultorio_odontologico_usuarios["Portuguese(Brazil)"]))
		$tdataconsultorio_odontologico_usuarios[".isUseToolTips"] = true;
}


	$tdataconsultorio_odontologico_usuarios[".NCSearch"] = true;



$tdataconsultorio_odontologico_usuarios[".shortTableName"] = "consultorio_odontologico_usuarios";
$tdataconsultorio_odontologico_usuarios[".nSecOptions"] = 1;

$tdataconsultorio_odontologico_usuarios[".mainTableOwnerID"] = "ID";
$tdataconsultorio_odontologico_usuarios[".entityType"] = 0;
$tdataconsultorio_odontologico_usuarios[".connId"] = "ConsultorioOdontologicosqlite3";


$tdataconsultorio_odontologico_usuarios[".strOriginalTableName"] = "Consultorio_Odontologico_usuarios";

	



$tdataconsultorio_odontologico_usuarios[".showAddInPopup"] = false;

$tdataconsultorio_odontologico_usuarios[".showEditInPopup"] = false;

$tdataconsultorio_odontologico_usuarios[".showViewInPopup"] = false;

$tdataconsultorio_odontologico_usuarios[".listAjax"] = false;
//	temporary
//$tdataconsultorio_odontologico_usuarios[".listAjax"] = false;

	$tdataconsultorio_odontologico_usuarios[".audit"] = false;

	$tdataconsultorio_odontologico_usuarios[".locking"] = false;


$pages = $tdataconsultorio_odontologico_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsultorio_odontologico_usuarios[".edit"] = true;
	$tdataconsultorio_odontologico_usuarios[".afterEditAction"] = 1;
	$tdataconsultorio_odontologico_usuarios[".closePopupAfterEdit"] = 1;
	$tdataconsultorio_odontologico_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsultorio_odontologico_usuarios[".add"] = true;
$tdataconsultorio_odontologico_usuarios[".afterAddAction"] = 1;
$tdataconsultorio_odontologico_usuarios[".closePopupAfterAdd"] = 1;
$tdataconsultorio_odontologico_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsultorio_odontologico_usuarios[".list"] = true;
}



$tdataconsultorio_odontologico_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsultorio_odontologico_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsultorio_odontologico_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsultorio_odontologico_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsultorio_odontologico_usuarios[".printFriendly"] = true;
}



$tdataconsultorio_odontologico_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsultorio_odontologico_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsultorio_odontologico_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsultorio_odontologico_usuarios[".isUseAjaxSuggest"] = true;

$tdataconsultorio_odontologico_usuarios[".rowHighlite"] = true;





$tdataconsultorio_odontologico_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdataconsultorio_odontologico_usuarios[".buttonsAdded"] = false;

$tdataconsultorio_odontologico_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultorio_odontologico_usuarios[".isUseTimeForSearch"] = false;


$tdataconsultorio_odontologico_usuarios[".badgeColor"] = "1e90ff";


$tdataconsultorio_odontologico_usuarios[".allSearchFields"] = array();
$tdataconsultorio_odontologico_usuarios[".filterFields"] = array();
$tdataconsultorio_odontologico_usuarios[".requiredSearchFields"] = array();

$tdataconsultorio_odontologico_usuarios[".googleLikeFields"] = array();
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "ID";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "username";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "password";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "email";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "fullname";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "groupid";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "active";
$tdataconsultorio_odontologico_usuarios[".googleLikeFields"][] = "ext_security_id";



$tdataconsultorio_odontologico_usuarios[".tableType"] = "list";

$tdataconsultorio_odontologico_usuarios[".printerPageOrientation"] = 0;
$tdataconsultorio_odontologico_usuarios[".nPrinterPageScale"] = 100;

$tdataconsultorio_odontologico_usuarios[".nPrinterSplitRecords"] = 40;

$tdataconsultorio_odontologico_usuarios[".geocodingEnabled"] = false;










$tdataconsultorio_odontologico_usuarios[".pageSize"] = 20;

$tdataconsultorio_odontologico_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsultorio_odontologico_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdataconsultorio_odontologico_usuarios[".orderindexes"] = array();


$tdataconsultorio_odontologico_usuarios[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataconsultorio_odontologico_usuarios[".sqlFrom"] = "FROM Consultorio_Odontologico_usuarios";
$tdataconsultorio_odontologico_usuarios[".sqlWhereExpr"] = "";
$tdataconsultorio_odontologico_usuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultorio_odontologico_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultorio_odontologico_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultorio_odontologico_usuarios[".highlightSearchResults"] = true;

$tableKeysconsultorio_odontologico_usuarios = array();
$tableKeysconsultorio_odontologico_usuarios[] = "ID";
$tdataconsultorio_odontologico_usuarios[".Keys"] = $tableKeysconsultorio_odontologico_usuarios;


$tdataconsultorio_odontologico_usuarios[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataconsultorio_odontologico_usuarios["ID"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","username");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdataconsultorio_odontologico_usuarios["username"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","password");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdataconsultorio_odontologico_usuarios["password"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","email");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdataconsultorio_odontologico_usuarios["email"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","fullname");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdataconsultorio_odontologico_usuarios["fullname"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","groupid");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdataconsultorio_odontologico_usuarios["groupid"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataconsultorio_odontologico_usuarios["active"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "Consultorio_Odontologico_usuarios";
	$fdata["Label"] = GetFieldLabel("Consultorio_Odontologico_usuarios","ext_security_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataconsultorio_odontologico_usuarios["ext_security_id"] = $fdata;
		$tdataconsultorio_odontologico_usuarios[".searchableFields"][] = "ext_security_id";


$tables_data["Consultorio_Odontologico_usuarios"]=&$tdataconsultorio_odontologico_usuarios;
$field_labels["Consultorio_Odontologico_usuarios"] = &$fieldLabelsconsultorio_odontologico_usuarios;
$fieldToolTips["Consultorio_Odontologico_usuarios"] = &$fieldToolTipsconsultorio_odontologico_usuarios;
$placeHolders["Consultorio_Odontologico_usuarios"] = &$placeHoldersconsultorio_odontologico_usuarios;
$page_titles["Consultorio_Odontologico_usuarios"] = &$pageTitlesconsultorio_odontologico_usuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consultorio_Odontologico_usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consultorio_Odontologico_usuarios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Paciente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Paciente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paciente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Consultorio_Odontologico_usuarios"][0] = $masterParams;
				$masterTablesData["Consultorio_Odontologico_usuarios"][0]["masterKeys"] = array();
	$masterTablesData["Consultorio_Odontologico_usuarios"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Consultorio_Odontologico_usuarios"][0]["detailKeys"] = array();
	$masterTablesData["Consultorio_Odontologico_usuarios"][0]["detailKeys"][]="username";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consultorio_odontologico_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM Consultorio_Odontologico_usuarios";
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
	"m_strName" => "ID",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "Consultorio_Odontologico_usuarios",
	"m_srcTableName" => "Consultorio_Odontologico_usuarios"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Consultorio_Odontologico_usuarios";
$proto23["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Consultorio_Odontologico_usuarios";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Consultorio_Odontologico_usuarios";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Consultorio_Odontologico_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultorio_odontologico_usuarios = createSqlQuery_consultorio_odontologico_usuarios();


	
		;

								

$tdataconsultorio_odontologico_usuarios[".sqlquery"] = $queryData_consultorio_odontologico_usuarios;



$tableEvents["Consultorio_Odontologico_usuarios"] = new eventsBase;
$tdataconsultorio_odontologico_usuarios[".hasEvents"] = false;

?>