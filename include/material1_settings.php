<?php
$tdatamaterial1 = array();
$tdatamaterial1[".searchableFields"] = array();
$tdatamaterial1[".ShortName"] = "material1";
$tdatamaterial1[".OwnerID"] = "";
$tdatamaterial1[".OriginalTable"] = "Material";


$tdatamaterial1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamaterial1[".originalPagesByType"] = $tdatamaterial1[".pagesByType"];
$tdatamaterial1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamaterial1[".originalPages"] = $tdatamaterial1[".pages"];
$tdatamaterial1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamaterial1[".originalDefaultPages"] = $tdatamaterial1[".defaultPages"];

//	field labels
$fieldLabelsmaterial1 = array();
$fieldToolTipsmaterial1 = array();
$pageTitlesmaterial1 = array();
$placeHoldersmaterial1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmaterial1["Portuguese(Brazil)"] = array();
	$fieldToolTipsmaterial1["Portuguese(Brazil)"] = array();
	$placeHoldersmaterial1["Portuguese(Brazil)"] = array();
	$pageTitlesmaterial1["Portuguese(Brazil)"] = array();
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Codfornecedor"] = "Fornecedor";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$fieldLabelsmaterial1["Portuguese(Brazil)"]["Descricao"] = "Descricao";
	$fieldToolTipsmaterial1["Portuguese(Brazil)"]["Descricao"] = "";
	$placeHoldersmaterial1["Portuguese(Brazil)"]["Descricao"] = "";
	if (count($fieldToolTipsmaterial1["Portuguese(Brazil)"]))
		$tdatamaterial1[".isUseToolTips"] = true;
}


	$tdatamaterial1[".NCSearch"] = true;



$tdatamaterial1[".shortTableName"] = "material1";
$tdatamaterial1[".nSecOptions"] = 0;

$tdatamaterial1[".mainTableOwnerID"] = "";
$tdatamaterial1[".entityType"] = 0;
$tdatamaterial1[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatamaterial1[".strOriginalTableName"] = "Material";

	



$tdatamaterial1[".showAddInPopup"] = false;

$tdatamaterial1[".showEditInPopup"] = false;

$tdatamaterial1[".showViewInPopup"] = false;

	$tdatamaterial1[".listAjax"] = true;
//	temporary
//$tdatamaterial1[".listAjax"] = false;

	$tdatamaterial1[".audit"] = false;

	$tdatamaterial1[".locking"] = false;


$pages = $tdatamaterial1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamaterial1[".edit"] = true;
	$tdatamaterial1[".afterEditAction"] = 0;
	$tdatamaterial1[".closePopupAfterEdit"] = 1;
	$tdatamaterial1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamaterial1[".add"] = true;
$tdatamaterial1[".afterAddAction"] = 0;
$tdatamaterial1[".closePopupAfterAdd"] = 1;
$tdatamaterial1[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamaterial1[".list"] = true;
}



$tdatamaterial1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamaterial1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamaterial1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamaterial1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamaterial1[".printFriendly"] = true;
}



$tdatamaterial1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamaterial1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamaterial1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamaterial1[".isUseAjaxSuggest"] = true;

$tdatamaterial1[".rowHighlite"] = true;





$tdatamaterial1[".ajaxCodeSnippetAdded"] = false;

$tdatamaterial1[".buttonsAdded"] = false;

$tdatamaterial1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaterial1[".isUseTimeForSearch"] = false;


$tdatamaterial1[".badgeColor"] = "00c2c5";


$tdatamaterial1[".allSearchFields"] = array();
$tdatamaterial1[".filterFields"] = array();
$tdatamaterial1[".requiredSearchFields"] = array();

$tdatamaterial1[".googleLikeFields"] = array();
$tdatamaterial1[".googleLikeFields"][] = "Codigo";
$tdatamaterial1[".googleLikeFields"][] = "Nome";
$tdatamaterial1[".googleLikeFields"][] = "Valor";
$tdatamaterial1[".googleLikeFields"][] = "Quantidade";
$tdatamaterial1[".googleLikeFields"][] = "Codfornecedor";
$tdatamaterial1[".googleLikeFields"][] = "Descricao";



$tdatamaterial1[".tableType"] = "list";

$tdatamaterial1[".printerPageOrientation"] = 0;
$tdatamaterial1[".nPrinterPageScale"] = 100;

$tdatamaterial1[".nPrinterSplitRecords"] = 40;

$tdatamaterial1[".geocodingEnabled"] = false;




$tdatamaterial1[".isDisplayLoading"] = true;

$tdatamaterial1[".isResizeColumns"] = true;





$tdatamaterial1[".pageSize"] = 20;

$tdatamaterial1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamaterial1[".strOrderBy"] = $tstrOrderBy;

$tdatamaterial1[".orderindexes"] = array();


$tdatamaterial1[".sqlHead"] = "SELECT Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	Descricao";
$tdatamaterial1[".sqlFrom"] = "FROM Material";
$tdatamaterial1[".sqlWhereExpr"] = "";
$tdatamaterial1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaterial1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaterial1[".arrGroupsPerPage"] = $arrGPP;

$tdatamaterial1[".highlightSearchResults"] = true;

$tableKeysmaterial1 = array();
$tableKeysmaterial1[] = "Codigo";
$tdatamaterial1[".Keys"] = $tableKeysmaterial1;


$tdatamaterial1[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Codigo");
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


	$tdatamaterial1["Codigo"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Nome");
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


	$tdatamaterial1["Nome"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Nome";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatamaterial1["Valor"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Valor";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Quantidade");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Quantidade";

		$fdata["sourceSingle"] = "Quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade";

	
	
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


	$tdatamaterial1["Quantidade"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Quantidade";
//	Codfornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codfornecedor";
	$fdata["GoodName"] = "Codfornecedor";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Codfornecedor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codfornecedor";

		$fdata["sourceSingle"] = "Codfornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codfornecedor";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Fornecedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Codigo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatamaterial1["Codfornecedor"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Codfornecedor";
//	Descricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Descricao";
	$fdata["GoodName"] = "Descricao";
	$fdata["ownerTable"] = "Material";
	$fdata["Label"] = GetFieldLabel("Material","Descricao");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Descricao";

		$fdata["sourceSingle"] = "Descricao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descricao";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatamaterial1["Descricao"] = $fdata;
		$tdatamaterial1[".searchableFields"][] = "Descricao";


$tables_data["Material"]=&$tdatamaterial1;
$field_labels["Material"] = &$fieldLabelsmaterial1;
$fieldToolTips["Material"] = &$fieldToolTipsmaterial1;
$placeHolders["Material"] = &$placeHoldersmaterial1;
$page_titles["Material"] = &$pageTitlesmaterial1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Material"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Material"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Material"][0] = $masterParams;
				$masterTablesData["Material"][0]["masterKeys"] = array();
	$masterTablesData["Material"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Material"][0]["detailKeys"] = array();
	$masterTablesData["Material"][0]["detailKeys"][]="Codfornecedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_material1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	Descricao";
$proto0["m_strFrom"] = "FROM Material";
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
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Material";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Material";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "Material";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto12["m_sql"] = "Quantidade";
$proto12["m_srcTableName"] = "Material";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codfornecedor",
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto14["m_sql"] = "Codfornecedor";
$proto14["m_srcTableName"] = "Material";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Descricao",
	"m_strTable" => "Material",
	"m_srcTableName" => "Material"
));

$proto16["m_sql"] = "Descricao";
$proto16["m_srcTableName"] = "Material";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Material";
$proto19["m_srcTableName"] = "Material";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Nome";
$proto19["m_columns"][] = "Valor";
$proto19["m_columns"][] = "Quantidade";
$proto19["m_columns"][] = "Codfornecedor";
$proto19["m_columns"][] = "Descricao";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Material";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Material";
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
$proto0["m_srcTableName"]="Material";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_material1 = createSqlQuery_material1();


	
		;

						

$tdatamaterial1[".sqlquery"] = $queryData_material1;



$tableEvents["Material"] = new eventsBase;
$tdatamaterial1[".hasEvents"] = false;

?>