<?php
$tdatacontas_a_pagar = array();
$tdatacontas_a_pagar[".searchableFields"] = array();
$tdatacontas_a_pagar[".ShortName"] = "contas_a_pagar";
$tdatacontas_a_pagar[".OwnerID"] = "Codigo";
$tdatacontas_a_pagar[".OriginalTable"] = "Contas_a_pagar";


$tdatacontas_a_pagar[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontas_a_pagar[".originalPagesByType"] = $tdatacontas_a_pagar[".pagesByType"];
$tdatacontas_a_pagar[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontas_a_pagar[".originalPages"] = $tdatacontas_a_pagar[".pages"];
$tdatacontas_a_pagar[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontas_a_pagar[".originalDefaultPages"] = $tdatacontas_a_pagar[".defaultPages"];

//	field labels
$fieldLabelscontas_a_pagar = array();
$fieldToolTipscontas_a_pagar = array();
$pageTitlescontas_a_pagar = array();
$placeHolderscontas_a_pagar = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"] = array();
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"] = array();
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"] = array();
	$pageTitlescontas_a_pagar["Portuguese(Brazil)"] = array();
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Nome_da_Conta"] = "Nome da Conta";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Nome_da_Conta"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Nome_da_Conta"] = "";
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Valor_da_Conta"] = "Valor da Conta";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Valor_da_Conta"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Valor_da_Conta"] = "";
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Tipo_de_Conta"] = "Tipo de Conta";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Tipo_de_Conta"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Tipo_de_Conta"] = "";
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Data_de_Vencimento"] = "Data de Vencimento";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Data_de_Vencimento"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Data_de_Vencimento"] = "";
	$fieldLabelscontas_a_pagar["Portuguese(Brazil)"]["Codconta"] = "Codconta";
	$fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]["Codconta"] = "";
	$placeHolderscontas_a_pagar["Portuguese(Brazil)"]["Codconta"] = "";
	if (count($fieldToolTipscontas_a_pagar["Portuguese(Brazil)"]))
		$tdatacontas_a_pagar[".isUseToolTips"] = true;
}


	$tdatacontas_a_pagar[".NCSearch"] = true;



$tdatacontas_a_pagar[".shortTableName"] = "contas_a_pagar";
$tdatacontas_a_pagar[".nSecOptions"] = 1;

$tdatacontas_a_pagar[".mainTableOwnerID"] = "Codigo";
$tdatacontas_a_pagar[".entityType"] = 0;
$tdatacontas_a_pagar[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatacontas_a_pagar[".strOriginalTableName"] = "Contas_a_pagar";

	



$tdatacontas_a_pagar[".showAddInPopup"] = false;

$tdatacontas_a_pagar[".showEditInPopup"] = false;

$tdatacontas_a_pagar[".showViewInPopup"] = false;

	$tdatacontas_a_pagar[".listAjax"] = true;
//	temporary
//$tdatacontas_a_pagar[".listAjax"] = false;

	$tdatacontas_a_pagar[".audit"] = false;

	$tdatacontas_a_pagar[".locking"] = false;


$pages = $tdatacontas_a_pagar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontas_a_pagar[".edit"] = true;
	$tdatacontas_a_pagar[".afterEditAction"] = 0;
	$tdatacontas_a_pagar[".closePopupAfterEdit"] = 1;
	$tdatacontas_a_pagar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontas_a_pagar[".add"] = true;
$tdatacontas_a_pagar[".afterAddAction"] = 0;
$tdatacontas_a_pagar[".closePopupAfterAdd"] = 1;
$tdatacontas_a_pagar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontas_a_pagar[".list"] = true;
}



$tdatacontas_a_pagar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontas_a_pagar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontas_a_pagar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontas_a_pagar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontas_a_pagar[".printFriendly"] = true;
}



$tdatacontas_a_pagar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontas_a_pagar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontas_a_pagar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontas_a_pagar[".isUseAjaxSuggest"] = true;

$tdatacontas_a_pagar[".rowHighlite"] = true;





$tdatacontas_a_pagar[".ajaxCodeSnippetAdded"] = false;

$tdatacontas_a_pagar[".buttonsAdded"] = false;

$tdatacontas_a_pagar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontas_a_pagar[".isUseTimeForSearch"] = false;


$tdatacontas_a_pagar[".badgeColor"] = "5f9ea0";


$tdatacontas_a_pagar[".allSearchFields"] = array();
$tdatacontas_a_pagar[".filterFields"] = array();
$tdatacontas_a_pagar[".requiredSearchFields"] = array();

$tdatacontas_a_pagar[".googleLikeFields"] = array();
$tdatacontas_a_pagar[".googleLikeFields"][] = "Codigo";
$tdatacontas_a_pagar[".googleLikeFields"][] = "Nome da Conta";
$tdatacontas_a_pagar[".googleLikeFields"][] = "Valor da Conta";
$tdatacontas_a_pagar[".googleLikeFields"][] = "Tipo de Conta";
$tdatacontas_a_pagar[".googleLikeFields"][] = "Data de Vencimento";
$tdatacontas_a_pagar[".googleLikeFields"][] = "Codconta";



$tdatacontas_a_pagar[".tableType"] = "list";

$tdatacontas_a_pagar[".printerPageOrientation"] = 0;
$tdatacontas_a_pagar[".nPrinterPageScale"] = 100;

$tdatacontas_a_pagar[".nPrinterSplitRecords"] = 40;

$tdatacontas_a_pagar[".geocodingEnabled"] = false;





$tdatacontas_a_pagar[".isResizeColumns"] = true;





$tdatacontas_a_pagar[".pageSize"] = 20;

$tdatacontas_a_pagar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontas_a_pagar[".strOrderBy"] = $tstrOrderBy;

$tdatacontas_a_pagar[".orderindexes"] = array();


$tdatacontas_a_pagar[".sqlHead"] = "SELECT Codigo,  	\"Nome da Conta\",  	\"Valor da Conta\",  	\"Tipo de Conta\",  	\"Data de Vencimento\",  	Codconta";
$tdatacontas_a_pagar[".sqlFrom"] = "FROM Contas_a_pagar";
$tdatacontas_a_pagar[".sqlWhereExpr"] = "";
$tdatacontas_a_pagar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontas_a_pagar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontas_a_pagar[".arrGroupsPerPage"] = $arrGPP;

$tdatacontas_a_pagar[".highlightSearchResults"] = true;

$tableKeyscontas_a_pagar = array();
$tableKeyscontas_a_pagar[] = "Codigo";
$tdatacontas_a_pagar[".Keys"] = $tableKeyscontas_a_pagar;


$tdatacontas_a_pagar[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Codigo");
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


	$tdatacontas_a_pagar["Codigo"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Codigo";
//	Nome da Conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome da Conta";
	$fdata["GoodName"] = "Nome_da_Conta";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Nome_da_Conta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome da Conta";

		$fdata["sourceSingle"] = "Nome da Conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nome da Conta\"";

	
	
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


	$tdatacontas_a_pagar["Nome da Conta"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Nome da Conta";
//	Valor da Conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor da Conta";
	$fdata["GoodName"] = "Valor_da_Conta";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Valor_da_Conta");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor da Conta";

		$fdata["sourceSingle"] = "Valor da Conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Valor da Conta\"";

	
	
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


	$tdatacontas_a_pagar["Valor da Conta"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Valor da Conta";
//	Tipo de Conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo de Conta";
	$fdata["GoodName"] = "Tipo_de_Conta";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Tipo_de_Conta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Tipo de Conta";

		$fdata["sourceSingle"] = "Tipo de Conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Tipo de Conta\"";

	
	
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


	$tdatacontas_a_pagar["Tipo de Conta"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Tipo de Conta";
//	Data de Vencimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data de Vencimento";
	$fdata["GoodName"] = "Data_de_Vencimento";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Data_de_Vencimento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data de Vencimento";

		$fdata["sourceSingle"] = "Data de Vencimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data de Vencimento\"";

	
	
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


	$tdatacontas_a_pagar["Data de Vencimento"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Data de Vencimento";
//	Codconta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Codconta";
	$fdata["GoodName"] = "Codconta";
	$fdata["ownerTable"] = "Contas_a_pagar";
	$fdata["Label"] = GetFieldLabel("Contas_a_pagar","Codconta");
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


	$tdatacontas_a_pagar["Codconta"] = $fdata;
		$tdatacontas_a_pagar[".searchableFields"][] = "Codconta";


$tables_data["Contas_a_pagar"]=&$tdatacontas_a_pagar;
$field_labels["Contas_a_pagar"] = &$fieldLabelscontas_a_pagar;
$fieldToolTips["Contas_a_pagar"] = &$fieldToolTipscontas_a_pagar;
$placeHolders["Contas_a_pagar"] = &$placeHolderscontas_a_pagar;
$page_titles["Contas_a_pagar"] = &$pageTitlescontas_a_pagar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Contas_a_pagar"] = array();
//	Contas_pagas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Contas_pagas";
		$detailsParam["dOriginalTable"] = "Contas_pagas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contas_pagas";
	$detailsParam["dCaptionTable"] = GetTableCaption("Contas_pagas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Contas_a_pagar"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"][]="Codconta";

	$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"][]="Nome da Conta";

	$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"][]="Valor da Conta";

	$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"][]="Tipo de Conta";

	$detailsTablesData["Contas_a_pagar"][$dIndex]["masterKeys"][]="Data de Vencimento";

				$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"][]="Codigo";

		
	$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"][]="Nome da conta";

		
	$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"][]="Valor total da conta";

		
	$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"][]="Tipo de conta";

		
	$detailsTablesData["Contas_a_pagar"][$dIndex]["detailKeys"][]="Data de vencimento";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Contas_a_pagar"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Produtos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Produtos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "produtos1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Contas_a_pagar"][0] = $masterParams;
				$masterTablesData["Contas_a_pagar"][0]["masterKeys"] = array();
	$masterTablesData["Contas_a_pagar"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Contas_a_pagar"][0]["detailKeys"] = array();
	$masterTablesData["Contas_a_pagar"][0]["detailKeys"][]="Nome da Conta";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contas_a_pagar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Nome da Conta\",  	\"Valor da Conta\",  	\"Tipo de Conta\",  	\"Data de Vencimento\",  	Codconta";
$proto0["m_strFrom"] = "FROM Contas_a_pagar";
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
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Contas_a_pagar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome da Conta",
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto8["m_sql"] = "\"Nome da Conta\"";
$proto8["m_srcTableName"] = "Contas_a_pagar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor da Conta",
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto10["m_sql"] = "\"Valor da Conta\"";
$proto10["m_srcTableName"] = "Contas_a_pagar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Conta",
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto12["m_sql"] = "\"Tipo de Conta\"";
$proto12["m_srcTableName"] = "Contas_a_pagar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Vencimento",
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto14["m_sql"] = "\"Data de Vencimento\"";
$proto14["m_srcTableName"] = "Contas_a_pagar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Codconta",
	"m_strTable" => "Contas_a_pagar",
	"m_srcTableName" => "Contas_a_pagar"
));

$proto16["m_sql"] = "Codconta";
$proto16["m_srcTableName"] = "Contas_a_pagar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Contas_a_pagar";
$proto19["m_srcTableName"] = "Contas_a_pagar";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Nome da Conta";
$proto19["m_columns"][] = "Valor da Conta";
$proto19["m_columns"][] = "Tipo de Conta";
$proto19["m_columns"][] = "Data de Vencimento";
$proto19["m_columns"][] = "Codconta";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Contas_a_pagar";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Contas_a_pagar";
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
$proto0["m_srcTableName"]="Contas_a_pagar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contas_a_pagar = createSqlQuery_contas_a_pagar();


	
		;

						

$tdatacontas_a_pagar[".sqlquery"] = $queryData_contas_a_pagar;



$tableEvents["Contas_a_pagar"] = new eventsBase;
$tdatacontas_a_pagar[".hasEvents"] = false;

?>