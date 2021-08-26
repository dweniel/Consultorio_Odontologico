<?php
$tdataprodutos1 = array();
$tdataprodutos1[".searchableFields"] = array();
$tdataprodutos1[".ShortName"] = "produtos1";
$tdataprodutos1[".OwnerID"] = "Codigo";
$tdataprodutos1[".OriginalTable"] = "Produtos";


$tdataprodutos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprodutos1[".originalPagesByType"] = $tdataprodutos1[".pagesByType"];
$tdataprodutos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprodutos1[".originalPages"] = $tdataprodutos1[".pages"];
$tdataprodutos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprodutos1[".originalDefaultPages"] = $tdataprodutos1[".defaultPages"];

//	field labels
$fieldLabelsprodutos1 = array();
$fieldToolTipsprodutos1 = array();
$pageTitlesprodutos1 = array();
$placeHoldersprodutos1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprodutos1["Portuguese(Brazil)"] = array();
	$fieldToolTipsprodutos1["Portuguese(Brazil)"] = array();
	$placeHoldersprodutos1["Portuguese(Brazil)"] = array();
	$pageTitlesprodutos1["Portuguese(Brazil)"] = array();
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Codfornecedor"] = "Fornecedor";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Descricao"] = "Descrição";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Descricao"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Descricao"] = "";
	$fieldLabelsprodutos1["Portuguese(Brazil)"]["Codconta"] = "Codconta";
	$fieldToolTipsprodutos1["Portuguese(Brazil)"]["Codconta"] = "";
	$placeHoldersprodutos1["Portuguese(Brazil)"]["Codconta"] = "";
	if (count($fieldToolTipsprodutos1["Portuguese(Brazil)"]))
		$tdataprodutos1[".isUseToolTips"] = true;
}


	$tdataprodutos1[".NCSearch"] = true;



$tdataprodutos1[".shortTableName"] = "produtos1";
$tdataprodutos1[".nSecOptions"] = 1;

$tdataprodutos1[".mainTableOwnerID"] = "Codigo";
$tdataprodutos1[".entityType"] = 0;
$tdataprodutos1[".connId"] = "ConsultorioOdontologicosqlite3";


$tdataprodutos1[".strOriginalTableName"] = "Produtos";

	



$tdataprodutos1[".showAddInPopup"] = false;

$tdataprodutos1[".showEditInPopup"] = false;

$tdataprodutos1[".showViewInPopup"] = false;

	$tdataprodutos1[".listAjax"] = true;
//	temporary
//$tdataprodutos1[".listAjax"] = false;

	$tdataprodutos1[".audit"] = false;

	$tdataprodutos1[".locking"] = false;


$pages = $tdataprodutos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprodutos1[".edit"] = true;
	$tdataprodutos1[".afterEditAction"] = 0;
	$tdataprodutos1[".closePopupAfterEdit"] = 1;
	$tdataprodutos1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataprodutos1[".add"] = true;
$tdataprodutos1[".afterAddAction"] = 0;
$tdataprodutos1[".closePopupAfterAdd"] = 1;
$tdataprodutos1[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataprodutos1[".list"] = true;
}



$tdataprodutos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprodutos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprodutos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprodutos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprodutos1[".printFriendly"] = true;
}



$tdataprodutos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprodutos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprodutos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprodutos1[".isUseAjaxSuggest"] = true;

$tdataprodutos1[".rowHighlite"] = true;





$tdataprodutos1[".ajaxCodeSnippetAdded"] = false;

$tdataprodutos1[".buttonsAdded"] = false;

$tdataprodutos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodutos1[".isUseTimeForSearch"] = false;


$tdataprodutos1[".badgeColor"] = "00c2c5";


$tdataprodutos1[".allSearchFields"] = array();
$tdataprodutos1[".filterFields"] = array();
$tdataprodutos1[".requiredSearchFields"] = array();

$tdataprodutos1[".googleLikeFields"] = array();
$tdataprodutos1[".googleLikeFields"][] = "Codigo";
$tdataprodutos1[".googleLikeFields"][] = "Nome";
$tdataprodutos1[".googleLikeFields"][] = "Valor";
$tdataprodutos1[".googleLikeFields"][] = "Quantidade";
$tdataprodutos1[".googleLikeFields"][] = "Codfornecedor";
$tdataprodutos1[".googleLikeFields"][] = "Descricao";
$tdataprodutos1[".googleLikeFields"][] = "Codconta";



$tdataprodutos1[".tableType"] = "list";

$tdataprodutos1[".printerPageOrientation"] = 0;
$tdataprodutos1[".nPrinterPageScale"] = 100;

$tdataprodutos1[".nPrinterSplitRecords"] = 40;

$tdataprodutos1[".geocodingEnabled"] = false;




$tdataprodutos1[".isDisplayLoading"] = true;

$tdataprodutos1[".isResizeColumns"] = true;





$tdataprodutos1[".pageSize"] = 20;

$tdataprodutos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprodutos1[".strOrderBy"] = $tstrOrderBy;

$tdataprodutos1[".orderindexes"] = array();


$tdataprodutos1[".sqlHead"] = "SELECT Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	Descricao,  	Codconta";
$tdataprodutos1[".sqlFrom"] = "FROM Produtos";
$tdataprodutos1[".sqlWhereExpr"] = "";
$tdataprodutos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodutos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodutos1[".arrGroupsPerPage"] = $arrGPP;

$tdataprodutos1[".highlightSearchResults"] = true;

$tableKeysprodutos1 = array();
$tableKeysprodutos1[] = "Codigo";
$tdataprodutos1[".Keys"] = $tableKeysprodutos1;


$tdataprodutos1[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Codigo");
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


	$tdataprodutos1["Codigo"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Nome");
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


	$tdataprodutos1["Nome"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Nome";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Valor");
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


	$tdataprodutos1["Valor"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Valor";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Quantidade");
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


	$tdataprodutos1["Quantidade"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Quantidade";
//	Codfornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codfornecedor";
	$fdata["GoodName"] = "Codfornecedor";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Codfornecedor");
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


	$tdataprodutos1["Codfornecedor"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Codfornecedor";
//	Descricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Descricao";
	$fdata["GoodName"] = "Descricao";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Descricao");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Descricao";

		$fdata["sourceSingle"] = "Descricao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descricao";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataprodutos1["Descricao"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Descricao";
//	Codconta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Codconta";
	$fdata["GoodName"] = "Codconta";
	$fdata["ownerTable"] = "Produtos";
	$fdata["Label"] = GetFieldLabel("Produtos","Codconta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codconta";

		$fdata["sourceSingle"] = "Codconta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codconta";

	
	
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


	$tdataprodutos1["Codconta"] = $fdata;
		$tdataprodutos1[".searchableFields"][] = "Codconta";


$tables_data["Produtos"]=&$tdataprodutos1;
$field_labels["Produtos"] = &$fieldLabelsprodutos1;
$fieldToolTips["Produtos"] = &$fieldToolTipsprodutos1;
$placeHolders["Produtos"] = &$placeHoldersprodutos1;
$page_titles["Produtos"] = &$pageTitlesprodutos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Produtos"] = array();
//	Contas_a_pagar
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Contas_a_pagar";
		$detailsParam["dOriginalTable"] = "Contas_a_pagar";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contas_a_pagar";
	$detailsParam["dCaptionTable"] = GetTableCaption("Contas_a_pagar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Produtos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Produtos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Produtos"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Produtos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Produtos"][$dIndex]["detailKeys"][]="Nome da Conta";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Produtos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Produtos"][0] = $masterParams;
				$masterTablesData["Produtos"][0]["masterKeys"] = array();
	$masterTablesData["Produtos"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Produtos"][0]["detailKeys"] = array();
	$masterTablesData["Produtos"][0]["detailKeys"][]="Codfornecedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_produtos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	Descricao,  	Codconta";
$proto0["m_strFrom"] = "FROM Produtos";
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
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Produtos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Produtos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "Produtos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto12["m_sql"] = "Quantidade";
$proto12["m_srcTableName"] = "Produtos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codfornecedor",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto14["m_sql"] = "Codfornecedor";
$proto14["m_srcTableName"] = "Produtos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Descricao",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto16["m_sql"] = "Descricao";
$proto16["m_srcTableName"] = "Produtos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Codconta",
	"m_strTable" => "Produtos",
	"m_srcTableName" => "Produtos"
));

$proto18["m_sql"] = "Codconta";
$proto18["m_srcTableName"] = "Produtos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Produtos";
$proto21["m_srcTableName"] = "Produtos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Codigo";
$proto21["m_columns"][] = "Nome";
$proto21["m_columns"][] = "Valor";
$proto21["m_columns"][] = "Quantidade";
$proto21["m_columns"][] = "Codfornecedor";
$proto21["m_columns"][] = "Descricao";
$proto21["m_columns"][] = "Codconta";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Produtos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Produtos";
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
$proto0["m_srcTableName"]="Produtos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_produtos1 = createSqlQuery_produtos1();


	
		;

							

$tdataprodutos1[".sqlquery"] = $queryData_produtos1;



$tableEvents["Produtos"] = new eventsBase;
$tdataprodutos1[".hasEvents"] = false;

?>