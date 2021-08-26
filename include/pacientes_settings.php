<?php
$tdatapacientes = array();
$tdatapacientes[".searchableFields"] = array();
$tdatapacientes[".ShortName"] = "pacientes";
$tdatapacientes[".OwnerID"] = "";
$tdatapacientes[".OriginalTable"] = "Pacientes";


$tdatapacientes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapacientes[".originalPagesByType"] = $tdatapacientes[".pagesByType"];
$tdatapacientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapacientes[".originalPages"] = $tdatapacientes[".pages"];
$tdatapacientes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapacientes[".originalDefaultPages"] = $tdatapacientes[".defaultPages"];

//	field labels
$fieldLabelspacientes = array();
$fieldToolTipspacientes = array();
$pageTitlespacientes = array();
$placeHolderspacientes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspacientes["English"] = array();
	$fieldToolTipspacientes["English"] = array();
	$placeHolderspacientes["English"] = array();
	$pageTitlespacientes["English"] = array();
	$fieldLabelspacientes["English"]["Codigo"] = "Codigo";
	$fieldToolTipspacientes["English"]["Codigo"] = "";
	$placeHolderspacientes["English"]["Codigo"] = "";
	$fieldLabelspacientes["English"]["Nome"] = "Nome";
	$fieldToolTipspacientes["English"]["Nome"] = "";
	$placeHolderspacientes["English"]["Nome"] = "";
	$fieldLabelspacientes["English"]["Telefone"] = "Telefone";
	$fieldToolTipspacientes["English"]["Telefone"] = "";
	$placeHolderspacientes["English"]["Telefone"] = "";
	$fieldLabelspacientes["English"]["Cidade"] = "Cidade";
	$fieldToolTipspacientes["English"]["Cidade"] = "";
	$placeHolderspacientes["English"]["Cidade"] = "";
	$fieldLabelspacientes["English"]["Estado"] = "Estado";
	$fieldToolTipspacientes["English"]["Estado"] = "";
	$placeHolderspacientes["English"]["Estado"] = "";
	$fieldLabelspacientes["English"]["CPF"] = "CPF";
	$fieldToolTipspacientes["English"]["CPF"] = "";
	$placeHolderspacientes["English"]["CPF"] = "";
	$fieldLabelspacientes["English"]["Rua"] = "Rua";
	$fieldToolTipspacientes["English"]["Rua"] = "";
	$placeHolderspacientes["English"]["Rua"] = "";
	if (count($fieldToolTipspacientes["English"]))
		$tdatapacientes[".isUseToolTips"] = true;
}


	$tdatapacientes[".NCSearch"] = true;



$tdatapacientes[".shortTableName"] = "pacientes";
$tdatapacientes[".nSecOptions"] = 0;

$tdatapacientes[".mainTableOwnerID"] = "";
$tdatapacientes[".entityType"] = 0;
$tdatapacientes[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatapacientes[".strOriginalTableName"] = "Pacientes";

	



$tdatapacientes[".showAddInPopup"] = false;

$tdatapacientes[".showEditInPopup"] = false;

$tdatapacientes[".showViewInPopup"] = false;

$tdatapacientes[".listAjax"] = false;
//	temporary
//$tdatapacientes[".listAjax"] = false;

	$tdatapacientes[".audit"] = false;

	$tdatapacientes[".locking"] = false;


$pages = $tdatapacientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapacientes[".edit"] = true;
	$tdatapacientes[".afterEditAction"] = 1;
	$tdatapacientes[".closePopupAfterEdit"] = 1;
	$tdatapacientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapacientes[".add"] = true;
$tdatapacientes[".afterAddAction"] = 1;
$tdatapacientes[".closePopupAfterAdd"] = 1;
$tdatapacientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapacientes[".list"] = true;
}



$tdatapacientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapacientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapacientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapacientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapacientes[".printFriendly"] = true;
}



$tdatapacientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapacientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapacientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapacientes[".isUseAjaxSuggest"] = true;

$tdatapacientes[".rowHighlite"] = true;





$tdatapacientes[".ajaxCodeSnippetAdded"] = false;

$tdatapacientes[".buttonsAdded"] = false;

$tdatapacientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapacientes[".isUseTimeForSearch"] = false;


$tdatapacientes[".badgeColor"] = "6493EA";


$tdatapacientes[".allSearchFields"] = array();
$tdatapacientes[".filterFields"] = array();
$tdatapacientes[".requiredSearchFields"] = array();

$tdatapacientes[".googleLikeFields"] = array();
$tdatapacientes[".googleLikeFields"][] = "Codigo";
$tdatapacientes[".googleLikeFields"][] = "Nome";
$tdatapacientes[".googleLikeFields"][] = "Telefone";
$tdatapacientes[".googleLikeFields"][] = "Cidade";
$tdatapacientes[".googleLikeFields"][] = "Estado";
$tdatapacientes[".googleLikeFields"][] = "CPF";
$tdatapacientes[".googleLikeFields"][] = "Rua";



$tdatapacientes[".tableType"] = "list";

$tdatapacientes[".printerPageOrientation"] = 0;
$tdatapacientes[".nPrinterPageScale"] = 100;

$tdatapacientes[".nPrinterSplitRecords"] = 40;

$tdatapacientes[".geocodingEnabled"] = false;










$tdatapacientes[".pageSize"] = 20;

$tdatapacientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapacientes[".strOrderBy"] = $tstrOrderBy;

$tdatapacientes[".orderindexes"] = array();


$tdatapacientes[".sqlHead"] = "SELECT Codigo,  	Nome,  	Telefone,  	Cidade,  	Estado,  	CPF,  	Rua";
$tdatapacientes[".sqlFrom"] = "FROM Pacientes";
$tdatapacientes[".sqlWhereExpr"] = "";
$tdatapacientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapacientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapacientes[".arrGroupsPerPage"] = $arrGPP;

$tdatapacientes[".highlightSearchResults"] = true;

$tableKeyspacientes = array();
$tableKeyspacientes[] = "Codigo";
$tdatapacientes[".Keys"] = $tableKeyspacientes;


$tdatapacientes[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Codigo");
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


	$tdatapacientes["Codigo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Nome");
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


	$tdatapacientes["Nome"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Nome";
//	Telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Telefone";
	$fdata["GoodName"] = "Telefone";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Telefone");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Telefone";

		$fdata["sourceSingle"] = "Telefone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefone";

	
	
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


	$tdatapacientes["Telefone"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Telefone";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Cidade");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Cidade";

		$fdata["sourceSingle"] = "Cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cidade";

	
	
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


	$tdatapacientes["Cidade"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Estado");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdatapacientes["Estado"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Estado";
//	CPF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CPF";
	$fdata["GoodName"] = "CPF";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","CPF");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "CPF";

		$fdata["sourceSingle"] = "CPF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CPF";

	
	
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


	$tdatapacientes["CPF"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "CPF";
//	Rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Rua";
	$fdata["GoodName"] = "Rua";
	$fdata["ownerTable"] = "Pacientes";
	$fdata["Label"] = GetFieldLabel("Pacientes","Rua");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Rua";

		$fdata["sourceSingle"] = "Rua";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rua";

	
	
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


	$tdatapacientes["Rua"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Rua";


$tables_data["Pacientes"]=&$tdatapacientes;
$field_labels["Pacientes"] = &$fieldLabelspacientes;
$fieldToolTips["Pacientes"] = &$fieldToolTipspacientes;
$placeHolders["Pacientes"] = &$placeHolderspacientes;
$page_titles["Pacientes"] = &$pageTitlespacientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Pacientes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Pacientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pacientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Telefone,  	Cidade,  	Estado,  	CPF,  	Rua";
$proto0["m_strFrom"] = "FROM Pacientes";
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
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Pacientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Pacientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto10["m_sql"] = "Telefone";
$proto10["m_srcTableName"] = "Pacientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto12["m_sql"] = "Cidade";
$proto12["m_srcTableName"] = "Pacientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto14["m_sql"] = "Estado";
$proto14["m_srcTableName"] = "Pacientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CPF",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto16["m_sql"] = "CPF";
$proto16["m_srcTableName"] = "Pacientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Rua",
	"m_strTable" => "Pacientes",
	"m_srcTableName" => "Pacientes"
));

$proto18["m_sql"] = "Rua";
$proto18["m_srcTableName"] = "Pacientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Pacientes";
$proto21["m_srcTableName"] = "Pacientes";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Codigo";
$proto21["m_columns"][] = "Nome";
$proto21["m_columns"][] = "Telefone";
$proto21["m_columns"][] = "Cidade";
$proto21["m_columns"][] = "Estado";
$proto21["m_columns"][] = "CPF";
$proto21["m_columns"][] = "Rua";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Pacientes";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Pacientes";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Pacientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pacientes = createSqlQuery_pacientes();


	
		;

							

$tdatapacientes[".sqlquery"] = $queryData_pacientes;



$tableEvents["Pacientes"] = new eventsBase;
$tdatapacientes[".hasEvents"] = false;

?>