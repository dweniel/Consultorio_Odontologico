<?php
$tdatadias_disponiveis = array();
$tdatadias_disponiveis[".searchableFields"] = array();
$tdatadias_disponiveis[".ShortName"] = "dias_disponiveis";
$tdatadias_disponiveis[".OwnerID"] = "Codigo";
$tdatadias_disponiveis[".OriginalTable"] = "Dias_Disponiveis";


$tdatadias_disponiveis[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadias_disponiveis[".originalPagesByType"] = $tdatadias_disponiveis[".pagesByType"];
$tdatadias_disponiveis[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadias_disponiveis[".originalPages"] = $tdatadias_disponiveis[".pages"];
$tdatadias_disponiveis[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadias_disponiveis[".originalDefaultPages"] = $tdatadias_disponiveis[".defaultPages"];

//	field labels
$fieldLabelsdias_disponiveis = array();
$fieldToolTipsdias_disponiveis = array();
$pageTitlesdias_disponiveis = array();
$placeHoldersdias_disponiveis = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"] = array();
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"] = array();
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"] = array();
	$pageTitlesdias_disponiveis["Portuguese(Brazil)"] = array();
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Data_disponivel"] = "Data Disponível";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Data_disponivel"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Data_disponivel"] = "";
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Hora_disponivel"] = "Hora Disponível";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Hora_disponivel"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Hora_disponivel"] = "";
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Tipo_de_consulta"] = "Tipo de Consulta";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Tipo_de_consulta"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Tipo_de_consulta"] = "";
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Valor_total_da_consulta"] = "Valor Total da Consulta";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Valor_total_da_consulta"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Valor_total_da_consulta"] = "";
	$fieldLabelsdias_disponiveis["Portuguese(Brazil)"]["Coddisponivel"] = "Coddisponivel";
	$fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]["Coddisponivel"] = "";
	$placeHoldersdias_disponiveis["Portuguese(Brazil)"]["Coddisponivel"] = "";
	if (count($fieldToolTipsdias_disponiveis["Portuguese(Brazil)"]))
		$tdatadias_disponiveis[".isUseToolTips"] = true;
}


	$tdatadias_disponiveis[".NCSearch"] = true;



$tdatadias_disponiveis[".shortTableName"] = "dias_disponiveis";
$tdatadias_disponiveis[".nSecOptions"] = 1;

$tdatadias_disponiveis[".mainTableOwnerID"] = "Codigo";
$tdatadias_disponiveis[".entityType"] = 0;
$tdatadias_disponiveis[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatadias_disponiveis[".strOriginalTableName"] = "Dias_Disponiveis";

	



$tdatadias_disponiveis[".showAddInPopup"] = false;

$tdatadias_disponiveis[".showEditInPopup"] = false;

$tdatadias_disponiveis[".showViewInPopup"] = false;

	$tdatadias_disponiveis[".listAjax"] = true;
//	temporary
//$tdatadias_disponiveis[".listAjax"] = false;

	$tdatadias_disponiveis[".audit"] = false;

	$tdatadias_disponiveis[".locking"] = false;


$pages = $tdatadias_disponiveis[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadias_disponiveis[".edit"] = true;
	$tdatadias_disponiveis[".afterEditAction"] = 0;
	$tdatadias_disponiveis[".closePopupAfterEdit"] = 1;
	$tdatadias_disponiveis[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadias_disponiveis[".add"] = true;
$tdatadias_disponiveis[".afterAddAction"] = 0;
$tdatadias_disponiveis[".closePopupAfterAdd"] = 1;
$tdatadias_disponiveis[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadias_disponiveis[".list"] = true;
}



$tdatadias_disponiveis[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadias_disponiveis[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadias_disponiveis[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadias_disponiveis[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadias_disponiveis[".printFriendly"] = true;
}



$tdatadias_disponiveis[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadias_disponiveis[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadias_disponiveis[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadias_disponiveis[".isUseAjaxSuggest"] = true;

$tdatadias_disponiveis[".rowHighlite"] = true;





$tdatadias_disponiveis[".ajaxCodeSnippetAdded"] = false;

$tdatadias_disponiveis[".buttonsAdded"] = false;

$tdatadias_disponiveis[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadias_disponiveis[".isUseTimeForSearch"] = false;


$tdatadias_disponiveis[".badgeColor"] = "cd853f";


$tdatadias_disponiveis[".allSearchFields"] = array();
$tdatadias_disponiveis[".filterFields"] = array();
$tdatadias_disponiveis[".requiredSearchFields"] = array();

$tdatadias_disponiveis[".googleLikeFields"] = array();
$tdatadias_disponiveis[".googleLikeFields"][] = "Codigo";
$tdatadias_disponiveis[".googleLikeFields"][] = "Data disponivel";
$tdatadias_disponiveis[".googleLikeFields"][] = "Hora disponivel";
$tdatadias_disponiveis[".googleLikeFields"][] = "Tipo de consulta";
$tdatadias_disponiveis[".googleLikeFields"][] = "Valor total da consulta";
$tdatadias_disponiveis[".googleLikeFields"][] = "Coddisponivel";



$tdatadias_disponiveis[".tableType"] = "list";

$tdatadias_disponiveis[".printerPageOrientation"] = 0;
$tdatadias_disponiveis[".nPrinterPageScale"] = 100;

$tdatadias_disponiveis[".nPrinterSplitRecords"] = 40;

$tdatadias_disponiveis[".geocodingEnabled"] = false;





$tdatadias_disponiveis[".isResizeColumns"] = true;





$tdatadias_disponiveis[".pageSize"] = 20;

$tdatadias_disponiveis[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadias_disponiveis[".strOrderBy"] = $tstrOrderBy;

$tdatadias_disponiveis[".orderindexes"] = array();


$tdatadias_disponiveis[".sqlHead"] = "SELECT Codigo,  	\"Data disponivel\",  	\"Hora disponivel\",  	\"Tipo de consulta\",  	\"Valor total da consulta\",  	Coddisponivel";
$tdatadias_disponiveis[".sqlFrom"] = "FROM Dias_Disponiveis";
$tdatadias_disponiveis[".sqlWhereExpr"] = "";
$tdatadias_disponiveis[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadias_disponiveis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadias_disponiveis[".arrGroupsPerPage"] = $arrGPP;

$tdatadias_disponiveis[".highlightSearchResults"] = true;

$tableKeysdias_disponiveis = array();
$tableKeysdias_disponiveis[] = "Codigo";
$tdatadias_disponiveis[".Keys"] = $tableKeysdias_disponiveis;


$tdatadias_disponiveis[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Codigo");
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


	$tdatadias_disponiveis["Codigo"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Codigo";
//	Data disponivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Data disponivel";
	$fdata["GoodName"] = "Data_disponivel";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Data_disponivel");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data disponivel";

		$fdata["sourceSingle"] = "Data Disponivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data disponivel\"";

	
	
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


	$tdatadias_disponiveis["Data disponivel"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Data disponivel";
//	Hora disponivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hora disponivel";
	$fdata["GoodName"] = "Hora_disponivel";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Hora_disponivel");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Hora disponivel";

		$fdata["sourceSingle"] = "Hora Disponivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Hora disponivel\"";

	
	
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


	$tdatadias_disponiveis["Hora disponivel"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Hora disponivel";
//	Tipo de consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo de consulta";
	$fdata["GoodName"] = "Tipo_de_consulta";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Tipo_de_consulta");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Tipo de consulta";

		$fdata["sourceSingle"] = "Tipo de consulta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Tipo de consulta\"";

	
	
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


	$tdatadias_disponiveis["Tipo de consulta"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Tipo de consulta";
//	Valor total da consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor total da consulta";
	$fdata["GoodName"] = "Valor_total_da_consulta";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Valor_total_da_consulta");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor total da consulta";

		$fdata["sourceSingle"] = "Valor total da consulta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Valor total da consulta\"";

	
	
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


	$tdatadias_disponiveis["Valor total da consulta"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Valor total da consulta";
//	Coddisponivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Coddisponivel";
	$fdata["GoodName"] = "Coddisponivel";
	$fdata["ownerTable"] = "Dias_Disponiveis";
	$fdata["Label"] = GetFieldLabel("Dias_Disponiveis","Coddisponivel");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Coddisponivel";

		$fdata["sourceSingle"] = "Coddisponivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Coddisponivel";

	
	
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


	$tdatadias_disponiveis["Coddisponivel"] = $fdata;
		$tdatadias_disponiveis[".searchableFields"][] = "Coddisponivel";


$tables_data["Dias_Disponiveis"]=&$tdatadias_disponiveis;
$field_labels["Dias_Disponiveis"] = &$fieldLabelsdias_disponiveis;
$fieldToolTips["Dias_Disponiveis"] = &$fieldToolTipsdias_disponiveis;
$placeHolders["Dias_Disponiveis"] = &$placeHoldersdias_disponiveis;
$page_titles["Dias_Disponiveis"] = &$pageTitlesdias_disponiveis;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Dias_Disponiveis"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Dias_Disponiveis"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Paciente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Paciente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paciente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Dias_Disponiveis"][0] = $masterParams;
				$masterTablesData["Dias_Disponiveis"][0]["masterKeys"] = array();
	$masterTablesData["Dias_Disponiveis"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Dias_Disponiveis"][0]["detailKeys"] = array();
	$masterTablesData["Dias_Disponiveis"][0]["detailKeys"][]="Coddisponivel";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dias_disponiveis()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Data disponivel\",  	\"Hora disponivel\",  	\"Tipo de consulta\",  	\"Valor total da consulta\",  	Coddisponivel";
$proto0["m_strFrom"] = "FROM Dias_Disponiveis";
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
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Dias_Disponiveis";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Data disponivel",
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto8["m_sql"] = "\"Data disponivel\"";
$proto8["m_srcTableName"] = "Dias_Disponiveis";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora disponivel",
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto10["m_sql"] = "\"Hora disponivel\"";
$proto10["m_srcTableName"] = "Dias_Disponiveis";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de consulta",
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto12["m_sql"] = "\"Tipo de consulta\"";
$proto12["m_srcTableName"] = "Dias_Disponiveis";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor total da consulta",
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto14["m_sql"] = "\"Valor total da consulta\"";
$proto14["m_srcTableName"] = "Dias_Disponiveis";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Coddisponivel",
	"m_strTable" => "Dias_Disponiveis",
	"m_srcTableName" => "Dias_Disponiveis"
));

$proto16["m_sql"] = "Coddisponivel";
$proto16["m_srcTableName"] = "Dias_Disponiveis";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Dias_Disponiveis";
$proto19["m_srcTableName"] = "Dias_Disponiveis";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Data disponivel";
$proto19["m_columns"][] = "Hora disponivel";
$proto19["m_columns"][] = "Tipo de consulta";
$proto19["m_columns"][] = "Valor total da consulta";
$proto19["m_columns"][] = "Coddisponivel";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Dias_Disponiveis";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Dias_Disponiveis";
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
$proto0["m_srcTableName"]="Dias_Disponiveis";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dias_disponiveis = createSqlQuery_dias_disponiveis();


	
		;

						

$tdatadias_disponiveis[".sqlquery"] = $queryData_dias_disponiveis;



$tableEvents["Dias_Disponiveis"] = new eventsBase;
$tdatadias_disponiveis[".hasEvents"] = false;

?>