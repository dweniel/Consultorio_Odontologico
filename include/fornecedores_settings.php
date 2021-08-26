<?php
$tdatafornecedores = array();
$tdatafornecedores[".searchableFields"] = array();
$tdatafornecedores[".ShortName"] = "fornecedores";
$tdatafornecedores[".OwnerID"] = "Codigo";
$tdatafornecedores[".OriginalTable"] = "Fornecedores";


$tdatafornecedores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafornecedores[".originalPagesByType"] = $tdatafornecedores[".pagesByType"];
$tdatafornecedores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafornecedores[".originalPages"] = $tdatafornecedores[".pages"];
$tdatafornecedores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafornecedores[".originalDefaultPages"] = $tdatafornecedores[".defaultPages"];

//	field labels
$fieldLabelsfornecedores = array();
$fieldToolTipsfornecedores = array();
$pageTitlesfornecedores = array();
$placeHoldersfornecedores = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfornecedores["Portuguese(Brazil)"] = array();
	$fieldToolTipsfornecedores["Portuguese(Brazil)"] = array();
	$placeHoldersfornecedores["Portuguese(Brazil)"] = array();
	$pageTitlesfornecedores["Portuguese(Brazil)"] = array();
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Telefone"] = "Telefone";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Telefone"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Telefone"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["CNPJ"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Estado"] = "Estado";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Estado"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Estado"] = "";
	if (count($fieldToolTipsfornecedores["Portuguese(Brazil)"]))
		$tdatafornecedores[".isUseToolTips"] = true;
}


	$tdatafornecedores[".NCSearch"] = true;



$tdatafornecedores[".shortTableName"] = "fornecedores";
$tdatafornecedores[".nSecOptions"] = 1;

$tdatafornecedores[".mainTableOwnerID"] = "Codigo";
$tdatafornecedores[".entityType"] = 0;
$tdatafornecedores[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatafornecedores[".strOriginalTableName"] = "Fornecedores";

	



$tdatafornecedores[".showAddInPopup"] = false;

$tdatafornecedores[".showEditInPopup"] = false;

$tdatafornecedores[".showViewInPopup"] = false;

	$tdatafornecedores[".listAjax"] = true;
//	temporary
//$tdatafornecedores[".listAjax"] = false;

	$tdatafornecedores[".audit"] = false;

	$tdatafornecedores[".locking"] = false;


$pages = $tdatafornecedores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafornecedores[".edit"] = true;
	$tdatafornecedores[".afterEditAction"] = 0;
	$tdatafornecedores[".closePopupAfterEdit"] = 1;
	$tdatafornecedores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafornecedores[".add"] = true;
$tdatafornecedores[".afterAddAction"] = 0;
$tdatafornecedores[".closePopupAfterAdd"] = 1;
$tdatafornecedores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafornecedores[".list"] = true;
}



$tdatafornecedores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafornecedores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafornecedores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafornecedores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafornecedores[".printFriendly"] = true;
}



$tdatafornecedores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafornecedores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafornecedores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafornecedores[".isUseAjaxSuggest"] = true;

$tdatafornecedores[".rowHighlite"] = true;





$tdatafornecedores[".ajaxCodeSnippetAdded"] = false;

$tdatafornecedores[".buttonsAdded"] = false;

$tdatafornecedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafornecedores[".isUseTimeForSearch"] = false;


$tdatafornecedores[".badgeColor"] = "8FBC8B";


$tdatafornecedores[".allSearchFields"] = array();
$tdatafornecedores[".filterFields"] = array();
$tdatafornecedores[".requiredSearchFields"] = array();

$tdatafornecedores[".googleLikeFields"] = array();
$tdatafornecedores[".googleLikeFields"][] = "Codigo";
$tdatafornecedores[".googleLikeFields"][] = "Nome";
$tdatafornecedores[".googleLikeFields"][] = "Telefone";
$tdatafornecedores[".googleLikeFields"][] = "CNPJ";
$tdatafornecedores[".googleLikeFields"][] = "Cidade";
$tdatafornecedores[".googleLikeFields"][] = "Estado";



$tdatafornecedores[".tableType"] = "list";

$tdatafornecedores[".printerPageOrientation"] = 0;
$tdatafornecedores[".nPrinterPageScale"] = 100;

$tdatafornecedores[".nPrinterSplitRecords"] = 40;

$tdatafornecedores[".geocodingEnabled"] = false;





$tdatafornecedores[".isResizeColumns"] = true;





$tdatafornecedores[".pageSize"] = 20;

$tdatafornecedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafornecedores[".strOrderBy"] = $tstrOrderBy;

$tdatafornecedores[".orderindexes"] = array();


$tdatafornecedores[".sqlHead"] = "SELECT Codigo,  	Nome,  	Telefone,  	CNPJ,  	Cidade,  	Estado";
$tdatafornecedores[".sqlFrom"] = "FROM Fornecedores";
$tdatafornecedores[".sqlWhereExpr"] = "";
$tdatafornecedores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafornecedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafornecedores[".arrGroupsPerPage"] = $arrGPP;

$tdatafornecedores[".highlightSearchResults"] = true;

$tableKeysfornecedores = array();
$tableKeysfornecedores[] = "Codigo";
$tdatafornecedores[".Keys"] = $tableKeysfornecedores;


$tdatafornecedores[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","Codigo");
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


	$tdatafornecedores["Codigo"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","Nome");
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


	$tdatafornecedores["Nome"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Nome";
//	Telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Telefone";
	$fdata["GoodName"] = "Telefone";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","Telefone");
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


	$tdatafornecedores["Telefone"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Telefone";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","CNPJ");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "CNPJ";

		$fdata["sourceSingle"] = "CNPJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CNPJ";

	
	
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


	$tdatafornecedores["CNPJ"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "CNPJ";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","Cidade");
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


	$tdatafornecedores["Cidade"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "Fornecedores";
	$fdata["Label"] = GetFieldLabel("Fornecedores","Estado");
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


	$tdatafornecedores["Estado"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Estado";


$tables_data["Fornecedores"]=&$tdatafornecedores;
$field_labels["Fornecedores"] = &$fieldLabelsfornecedores;
$fieldToolTips["Fornecedores"] = &$fieldToolTipsfornecedores;
$placeHolders["Fornecedores"] = &$placeHoldersfornecedores;
$page_titles["Fornecedores"] = &$pageTitlesfornecedores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Fornecedores"] = array();
//	Produtos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Produtos";
		$detailsParam["dOriginalTable"] = "Produtos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "produtos1";
	$detailsParam["dCaptionTable"] = GetTableCaption("Produtos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Fornecedores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Fornecedores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Fornecedores"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Fornecedores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Fornecedores"][$dIndex]["detailKeys"][]="Codfornecedor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Fornecedores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fornecedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Telefone,  	CNPJ,  	Cidade,  	Estado";
$proto0["m_strFrom"] = "FROM Fornecedores";
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
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Fornecedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Fornecedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone",
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto10["m_sql"] = "Telefone";
$proto10["m_srcTableName"] = "Fornecedores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto12["m_sql"] = "CNPJ";
$proto12["m_srcTableName"] = "Fornecedores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto14["m_sql"] = "Cidade";
$proto14["m_srcTableName"] = "Fornecedores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "Fornecedores",
	"m_srcTableName" => "Fornecedores"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "Fornecedores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Fornecedores";
$proto19["m_srcTableName"] = "Fornecedores";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Nome";
$proto19["m_columns"][] = "Telefone";
$proto19["m_columns"][] = "CNPJ";
$proto19["m_columns"][] = "Cidade";
$proto19["m_columns"][] = "Estado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Fornecedores";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Fornecedores";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Fornecedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fornecedores = createSqlQuery_fornecedores();


	
		;

						

$tdatafornecedores[".sqlquery"] = $queryData_fornecedores;



$tableEvents["Fornecedores"] = new eventsBase;
$tdatafornecedores[".hasEvents"] = false;

?>