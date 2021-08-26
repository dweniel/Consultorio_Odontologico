<?php
$tdatacontas_pagas = array();
$tdatacontas_pagas[".searchableFields"] = array();
$tdatacontas_pagas[".ShortName"] = "contas_pagas";
$tdatacontas_pagas[".OwnerID"] = "Codigo";
$tdatacontas_pagas[".OriginalTable"] = "Contas_pagas";


$tdatacontas_pagas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontas_pagas[".originalPagesByType"] = $tdatacontas_pagas[".pagesByType"];
$tdatacontas_pagas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontas_pagas[".originalPages"] = $tdatacontas_pagas[".pages"];
$tdatacontas_pagas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontas_pagas[".originalDefaultPages"] = $tdatacontas_pagas[".defaultPages"];

//	field labels
$fieldLabelscontas_pagas = array();
$fieldToolTipscontas_pagas = array();
$pageTitlescontas_pagas = array();
$placeHolderscontas_pagas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscontas_pagas["Portuguese(Brazil)"] = array();
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"] = array();
	$placeHolderscontas_pagas["Portuguese(Brazil)"] = array();
	$pageTitlescontas_pagas["Portuguese(Brazil)"] = array();
	$fieldLabelscontas_pagas["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHolderscontas_pagas["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelscontas_pagas["Portuguese(Brazil)"]["Nome_da_conta"] = "Nome da Conta";
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"]["Nome_da_conta"] = "";
	$placeHolderscontas_pagas["Portuguese(Brazil)"]["Nome_da_conta"] = "";
	$fieldLabelscontas_pagas["Portuguese(Brazil)"]["Tipo_de_conta"] = "Tipo de Conta";
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"]["Tipo_de_conta"] = "";
	$placeHolderscontas_pagas["Portuguese(Brazil)"]["Tipo_de_conta"] = "";
	$fieldLabelscontas_pagas["Portuguese(Brazil)"]["Valor_total_da_conta"] = "Valor Total da Conta";
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"]["Valor_total_da_conta"] = "";
	$placeHolderscontas_pagas["Portuguese(Brazil)"]["Valor_total_da_conta"] = "";
	$fieldLabelscontas_pagas["Portuguese(Brazil)"]["Data_de_vencimento"] = "Data de Vencimento";
	$fieldToolTipscontas_pagas["Portuguese(Brazil)"]["Data_de_vencimento"] = "";
	$placeHolderscontas_pagas["Portuguese(Brazil)"]["Data_de_vencimento"] = "";
	if (count($fieldToolTipscontas_pagas["Portuguese(Brazil)"]))
		$tdatacontas_pagas[".isUseToolTips"] = true;
}


	$tdatacontas_pagas[".NCSearch"] = true;



$tdatacontas_pagas[".shortTableName"] = "contas_pagas";
$tdatacontas_pagas[".nSecOptions"] = 1;

$tdatacontas_pagas[".mainTableOwnerID"] = "Codigo";
$tdatacontas_pagas[".entityType"] = 0;
$tdatacontas_pagas[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatacontas_pagas[".strOriginalTableName"] = "Contas_pagas";

	



$tdatacontas_pagas[".showAddInPopup"] = false;

$tdatacontas_pagas[".showEditInPopup"] = false;

$tdatacontas_pagas[".showViewInPopup"] = false;

	$tdatacontas_pagas[".listAjax"] = true;
//	temporary
//$tdatacontas_pagas[".listAjax"] = false;

	$tdatacontas_pagas[".audit"] = false;

	$tdatacontas_pagas[".locking"] = false;


$pages = $tdatacontas_pagas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontas_pagas[".edit"] = true;
	$tdatacontas_pagas[".afterEditAction"] = 0;
	$tdatacontas_pagas[".closePopupAfterEdit"] = 1;
	$tdatacontas_pagas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontas_pagas[".add"] = true;
$tdatacontas_pagas[".afterAddAction"] = 0;
$tdatacontas_pagas[".closePopupAfterAdd"] = 1;
$tdatacontas_pagas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontas_pagas[".list"] = true;
}



$tdatacontas_pagas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontas_pagas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontas_pagas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontas_pagas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontas_pagas[".printFriendly"] = true;
}



$tdatacontas_pagas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontas_pagas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontas_pagas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontas_pagas[".isUseAjaxSuggest"] = true;

$tdatacontas_pagas[".rowHighlite"] = true;





$tdatacontas_pagas[".ajaxCodeSnippetAdded"] = false;

$tdatacontas_pagas[".buttonsAdded"] = false;

$tdatacontas_pagas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontas_pagas[".isUseTimeForSearch"] = false;


$tdatacontas_pagas[".badgeColor"] = "9acd32";


$tdatacontas_pagas[".allSearchFields"] = array();
$tdatacontas_pagas[".filterFields"] = array();
$tdatacontas_pagas[".requiredSearchFields"] = array();

$tdatacontas_pagas[".googleLikeFields"] = array();
$tdatacontas_pagas[".googleLikeFields"][] = "Codigo";
$tdatacontas_pagas[".googleLikeFields"][] = "Nome da conta";
$tdatacontas_pagas[".googleLikeFields"][] = "Tipo de conta";
$tdatacontas_pagas[".googleLikeFields"][] = "Valor total da conta";
$tdatacontas_pagas[".googleLikeFields"][] = "Data de vencimento";



$tdatacontas_pagas[".tableType"] = "list";

$tdatacontas_pagas[".printerPageOrientation"] = 0;
$tdatacontas_pagas[".nPrinterPageScale"] = 100;

$tdatacontas_pagas[".nPrinterSplitRecords"] = 40;

$tdatacontas_pagas[".geocodingEnabled"] = false;





$tdatacontas_pagas[".isResizeColumns"] = true;





$tdatacontas_pagas[".pageSize"] = 20;

$tdatacontas_pagas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontas_pagas[".strOrderBy"] = $tstrOrderBy;

$tdatacontas_pagas[".orderindexes"] = array();


$tdatacontas_pagas[".sqlHead"] = "SELECT Codigo,  	\"Nome da conta\",  	\"Tipo de conta\",  	\"Valor total da conta\",  	\"Data de vencimento\"";
$tdatacontas_pagas[".sqlFrom"] = "FROM Contas_pagas";
$tdatacontas_pagas[".sqlWhereExpr"] = "";
$tdatacontas_pagas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontas_pagas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontas_pagas[".arrGroupsPerPage"] = $arrGPP;

$tdatacontas_pagas[".highlightSearchResults"] = true;

$tableKeyscontas_pagas = array();
$tableKeyscontas_pagas[] = "Codigo";
$tdatacontas_pagas[".Keys"] = $tableKeyscontas_pagas;


$tdatacontas_pagas[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Contas_pagas";
	$fdata["Label"] = GetFieldLabel("Contas_pagas","Codigo");
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


	$tdatacontas_pagas["Codigo"] = $fdata;
		$tdatacontas_pagas[".searchableFields"][] = "Codigo";
//	Nome da conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome da conta";
	$fdata["GoodName"] = "Nome_da_conta";
	$fdata["ownerTable"] = "Contas_pagas";
	$fdata["Label"] = GetFieldLabel("Contas_pagas","Nome_da_conta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome da conta";

		$fdata["sourceSingle"] = "Nome da conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nome da conta\"";

	
	
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


	$tdatacontas_pagas["Nome da conta"] = $fdata;
		$tdatacontas_pagas[".searchableFields"][] = "Nome da conta";
//	Tipo de conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tipo de conta";
	$fdata["GoodName"] = "Tipo_de_conta";
	$fdata["ownerTable"] = "Contas_pagas";
	$fdata["Label"] = GetFieldLabel("Contas_pagas","Tipo_de_conta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Tipo de conta";

		$fdata["sourceSingle"] = "Tipo de conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Tipo de conta\"";

	
	
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


	$tdatacontas_pagas["Tipo de conta"] = $fdata;
		$tdatacontas_pagas[".searchableFields"][] = "Tipo de conta";
//	Valor total da conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Valor total da conta";
	$fdata["GoodName"] = "Valor_total_da_conta";
	$fdata["ownerTable"] = "Contas_pagas";
	$fdata["Label"] = GetFieldLabel("Contas_pagas","Valor_total_da_conta");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor total da conta";

		$fdata["sourceSingle"] = "Valor total da conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Valor total da conta\"";

	
	
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


	$tdatacontas_pagas["Valor total da conta"] = $fdata;
		$tdatacontas_pagas[".searchableFields"][] = "Valor total da conta";
//	Data de vencimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data de vencimento";
	$fdata["GoodName"] = "Data_de_vencimento";
	$fdata["ownerTable"] = "Contas_pagas";
	$fdata["Label"] = GetFieldLabel("Contas_pagas","Data_de_vencimento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data de vencimento";

		$fdata["sourceSingle"] = "Data de vencimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data de vencimento\"";

	
	
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


	$tdatacontas_pagas["Data de vencimento"] = $fdata;
		$tdatacontas_pagas[".searchableFields"][] = "Data de vencimento";


$tables_data["Contas_pagas"]=&$tdatacontas_pagas;
$field_labels["Contas_pagas"] = &$fieldLabelscontas_pagas;
$fieldToolTips["Contas_pagas"] = &$fieldToolTipscontas_pagas;
$placeHolders["Contas_pagas"] = &$placeHolderscontas_pagas;
$page_titles["Contas_pagas"] = &$pageTitlescontas_pagas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Contas_pagas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Contas_pagas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Contas_a_pagar";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Contas_a_pagar";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contas_a_pagar";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Contas_pagas"][0] = $masterParams;
				$masterTablesData["Contas_pagas"][0]["masterKeys"] = array();
	$masterTablesData["Contas_pagas"][0]["masterKeys"][]="Codconta";
				$masterTablesData["Contas_pagas"][0]["masterKeys"][]="Nome da Conta";
				$masterTablesData["Contas_pagas"][0]["masterKeys"][]="Valor da Conta";
				$masterTablesData["Contas_pagas"][0]["masterKeys"][]="Tipo de Conta";
				$masterTablesData["Contas_pagas"][0]["masterKeys"][]="Data de Vencimento";
				$masterTablesData["Contas_pagas"][0]["detailKeys"] = array();
	$masterTablesData["Contas_pagas"][0]["detailKeys"][]="Codigo";
				$masterTablesData["Contas_pagas"][0]["detailKeys"][]="Nome da conta";
				$masterTablesData["Contas_pagas"][0]["detailKeys"][]="Valor total da conta";
				$masterTablesData["Contas_pagas"][0]["detailKeys"][]="Tipo de conta";
				$masterTablesData["Contas_pagas"][0]["detailKeys"][]="Data de vencimento";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contas_pagas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Nome da conta\",  	\"Tipo de conta\",  	\"Valor total da conta\",  	\"Data de vencimento\"";
$proto0["m_strFrom"] = "FROM Contas_pagas";
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
	"m_strTable" => "Contas_pagas",
	"m_srcTableName" => "Contas_pagas"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Contas_pagas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome da conta",
	"m_strTable" => "Contas_pagas",
	"m_srcTableName" => "Contas_pagas"
));

$proto8["m_sql"] = "\"Nome da conta\"";
$proto8["m_srcTableName"] = "Contas_pagas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de conta",
	"m_strTable" => "Contas_pagas",
	"m_srcTableName" => "Contas_pagas"
));

$proto10["m_sql"] = "\"Tipo de conta\"";
$proto10["m_srcTableName"] = "Contas_pagas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor total da conta",
	"m_strTable" => "Contas_pagas",
	"m_srcTableName" => "Contas_pagas"
));

$proto12["m_sql"] = "\"Valor total da conta\"";
$proto12["m_srcTableName"] = "Contas_pagas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de vencimento",
	"m_strTable" => "Contas_pagas",
	"m_srcTableName" => "Contas_pagas"
));

$proto14["m_sql"] = "\"Data de vencimento\"";
$proto14["m_srcTableName"] = "Contas_pagas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Contas_pagas";
$proto17["m_srcTableName"] = "Contas_pagas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Codigo";
$proto17["m_columns"][] = "Nome da conta";
$proto17["m_columns"][] = "Tipo de conta";
$proto17["m_columns"][] = "Valor total da conta";
$proto17["m_columns"][] = "Data de vencimento";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "Contas_pagas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Contas_pagas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Contas_pagas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contas_pagas = createSqlQuery_contas_pagas();


	
		;

					

$tdatacontas_pagas[".sqlquery"] = $queryData_contas_pagas;



$tableEvents["Contas_pagas"] = new eventsBase;
$tdatacontas_pagas[".hasEvents"] = false;

?>