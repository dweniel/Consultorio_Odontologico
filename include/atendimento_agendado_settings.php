<?php
$tdataatendimento_agendado = array();
$tdataatendimento_agendado[".searchableFields"] = array();
$tdataatendimento_agendado[".ShortName"] = "atendimento_agendado";
$tdataatendimento_agendado[".OwnerID"] = "Codigo";
$tdataatendimento_agendado[".OriginalTable"] = "Atendimento_Agendado";


$tdataatendimento_agendado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataatendimento_agendado[".originalPagesByType"] = $tdataatendimento_agendado[".pagesByType"];
$tdataatendimento_agendado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataatendimento_agendado[".originalPages"] = $tdataatendimento_agendado[".pages"];
$tdataatendimento_agendado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataatendimento_agendado[".originalDefaultPages"] = $tdataatendimento_agendado[".defaultPages"];

//	field labels
$fieldLabelsatendimento_agendado = array();
$fieldToolTipsatendimento_agendado = array();
$pageTitlesatendimento_agendado = array();
$placeHoldersatendimento_agendado = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"] = array();
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"] = array();
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"] = array();
	$pageTitlesatendimento_agendado["Portuguese(Brazil)"] = array();
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Data_do_Atendimento"] = "Data do Atendimento";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Data_do_Atendimento"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Data_do_Atendimento"] = "";
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Telefone"] = "Telefone";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Telefone"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Telefone"] = "";
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Horario_do_Atendimento"] = "Horario do Atendimento";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Horario_do_Atendimento"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Horario_do_Atendimento"] = "";
	$fieldLabelsatendimento_agendado["Portuguese(Brazil)"]["Valor_da_Consulta"] = "Valor da Consulta";
	$fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]["Valor_da_Consulta"] = "";
	$placeHoldersatendimento_agendado["Portuguese(Brazil)"]["Valor_da_Consulta"] = "";
	if (count($fieldToolTipsatendimento_agendado["Portuguese(Brazil)"]))
		$tdataatendimento_agendado[".isUseToolTips"] = true;
}


	$tdataatendimento_agendado[".NCSearch"] = true;



$tdataatendimento_agendado[".shortTableName"] = "atendimento_agendado";
$tdataatendimento_agendado[".nSecOptions"] = 1;

$tdataatendimento_agendado[".mainTableOwnerID"] = "Codigo";
$tdataatendimento_agendado[".entityType"] = 0;
$tdataatendimento_agendado[".connId"] = "ConsultorioOdontologicosqlite3";


$tdataatendimento_agendado[".strOriginalTableName"] = "Atendimento_Agendado";

	



$tdataatendimento_agendado[".showAddInPopup"] = false;

$tdataatendimento_agendado[".showEditInPopup"] = false;

$tdataatendimento_agendado[".showViewInPopup"] = false;

	$tdataatendimento_agendado[".listAjax"] = true;
//	temporary
//$tdataatendimento_agendado[".listAjax"] = false;

	$tdataatendimento_agendado[".audit"] = false;

	$tdataatendimento_agendado[".locking"] = false;


$pages = $tdataatendimento_agendado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataatendimento_agendado[".edit"] = true;
	$tdataatendimento_agendado[".afterEditAction"] = 0;
	$tdataatendimento_agendado[".closePopupAfterEdit"] = 1;
	$tdataatendimento_agendado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataatendimento_agendado[".add"] = true;
$tdataatendimento_agendado[".afterAddAction"] = 0;
$tdataatendimento_agendado[".closePopupAfterAdd"] = 1;
$tdataatendimento_agendado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataatendimento_agendado[".list"] = true;
}



$tdataatendimento_agendado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataatendimento_agendado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataatendimento_agendado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataatendimento_agendado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataatendimento_agendado[".printFriendly"] = true;
}



$tdataatendimento_agendado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataatendimento_agendado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataatendimento_agendado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataatendimento_agendado[".isUseAjaxSuggest"] = true;

$tdataatendimento_agendado[".rowHighlite"] = true;





$tdataatendimento_agendado[".ajaxCodeSnippetAdded"] = false;

$tdataatendimento_agendado[".buttonsAdded"] = false;

$tdataatendimento_agendado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataatendimento_agendado[".isUseTimeForSearch"] = false;


$tdataatendimento_agendado[".badgeColor"] = "6b8e23";


$tdataatendimento_agendado[".allSearchFields"] = array();
$tdataatendimento_agendado[".filterFields"] = array();
$tdataatendimento_agendado[".requiredSearchFields"] = array();

$tdataatendimento_agendado[".googleLikeFields"] = array();
$tdataatendimento_agendado[".googleLikeFields"][] = "Codigo";
$tdataatendimento_agendado[".googleLikeFields"][] = "Nome";
$tdataatendimento_agendado[".googleLikeFields"][] = "Data do Atendimento";
$tdataatendimento_agendado[".googleLikeFields"][] = "Telefone";
$tdataatendimento_agendado[".googleLikeFields"][] = "Horario do Atendimento";
$tdataatendimento_agendado[".googleLikeFields"][] = "Valor da Consulta";



$tdataatendimento_agendado[".tableType"] = "list";

$tdataatendimento_agendado[".printerPageOrientation"] = 0;
$tdataatendimento_agendado[".nPrinterPageScale"] = 100;

$tdataatendimento_agendado[".nPrinterSplitRecords"] = 40;

$tdataatendimento_agendado[".geocodingEnabled"] = false;





$tdataatendimento_agendado[".isResizeColumns"] = true;





$tdataatendimento_agendado[".pageSize"] = 20;

$tdataatendimento_agendado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataatendimento_agendado[".strOrderBy"] = $tstrOrderBy;

$tdataatendimento_agendado[".orderindexes"] = array();


$tdataatendimento_agendado[".sqlHead"] = "SELECT Codigo,  	Nome,  	\"Data do Atendimento\",  	Telefone,  	\"Horario do Atendimento\",  	\"Valor da Consulta\"";
$tdataatendimento_agendado[".sqlFrom"] = "FROM Atendimento_Agendado";
$tdataatendimento_agendado[".sqlWhereExpr"] = "";
$tdataatendimento_agendado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataatendimento_agendado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataatendimento_agendado[".arrGroupsPerPage"] = $arrGPP;

$tdataatendimento_agendado[".highlightSearchResults"] = true;

$tableKeysatendimento_agendado = array();
$tableKeysatendimento_agendado[] = "Codigo";
$tdataatendimento_agendado[".Keys"] = $tableKeysatendimento_agendado;


$tdataatendimento_agendado[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Codigo");
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


	$tdataatendimento_agendado["Codigo"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Nome");
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


	$tdataatendimento_agendado["Nome"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Nome";
//	Data do Atendimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Data do Atendimento";
	$fdata["GoodName"] = "Data_do_Atendimento";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Data_do_Atendimento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data do Atendimento";

		$fdata["sourceSingle"] = "Data do Atendimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data do Atendimento\"";

	
	
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


	$tdataatendimento_agendado["Data do Atendimento"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Data do Atendimento";
//	Telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefone";
	$fdata["GoodName"] = "Telefone";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Telefone");
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


	$tdataatendimento_agendado["Telefone"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Telefone";
//	Horario do Atendimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Horario do Atendimento";
	$fdata["GoodName"] = "Horario_do_Atendimento";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Horario_do_Atendimento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Horario do Atendimento";

		$fdata["sourceSingle"] = "Horario do Atendimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Horario do Atendimento\"";

	
	
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


	$tdataatendimento_agendado["Horario do Atendimento"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Horario do Atendimento";
//	Valor da Consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Valor da Consulta";
	$fdata["GoodName"] = "Valor_da_Consulta";
	$fdata["ownerTable"] = "Atendimento_Agendado";
	$fdata["Label"] = GetFieldLabel("Atendimento_Agendado","Valor_da_Consulta");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor da Consulta";

		$fdata["sourceSingle"] = "Valor da Consulta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Valor da Consulta\"";

	
	
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


	$tdataatendimento_agendado["Valor da Consulta"] = $fdata;
		$tdataatendimento_agendado[".searchableFields"][] = "Valor da Consulta";


$tables_data["Atendimento_Agendado"]=&$tdataatendimento_agendado;
$field_labels["Atendimento_Agendado"] = &$fieldLabelsatendimento_agendado;
$fieldToolTips["Atendimento_Agendado"] = &$fieldToolTipsatendimento_agendado;
$placeHolders["Atendimento_Agendado"] = &$placeHoldersatendimento_agendado;
$page_titles["Atendimento_Agendado"] = &$pageTitlesatendimento_agendado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Atendimento_Agendado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Atendimento_Agendado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Paciente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Paciente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paciente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Atendimento_Agendado"][0] = $masterParams;
				$masterTablesData["Atendimento_Agendado"][0]["masterKeys"] = array();
	$masterTablesData["Atendimento_Agendado"][0]["masterKeys"][]="Codagendamento";
				$masterTablesData["Atendimento_Agendado"][0]["detailKeys"] = array();
	$masterTablesData["Atendimento_Agendado"][0]["detailKeys"][]="Codigo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_atendimento_agendado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	\"Data do Atendimento\",  	Telefone,  	\"Horario do Atendimento\",  	\"Valor da Consulta\"";
$proto0["m_strFrom"] = "FROM Atendimento_Agendado";
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
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Atendimento_Agendado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Atendimento_Agendado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Data do Atendimento",
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto10["m_sql"] = "\"Data do Atendimento\"";
$proto10["m_srcTableName"] = "Atendimento_Agendado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone",
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto12["m_sql"] = "Telefone";
$proto12["m_srcTableName"] = "Atendimento_Agendado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Horario do Atendimento",
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto14["m_sql"] = "\"Horario do Atendimento\"";
$proto14["m_srcTableName"] = "Atendimento_Agendado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor da Consulta",
	"m_strTable" => "Atendimento_Agendado",
	"m_srcTableName" => "Atendimento_Agendado"
));

$proto16["m_sql"] = "\"Valor da Consulta\"";
$proto16["m_srcTableName"] = "Atendimento_Agendado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Atendimento_Agendado";
$proto19["m_srcTableName"] = "Atendimento_Agendado";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Nome";
$proto19["m_columns"][] = "Data do Atendimento";
$proto19["m_columns"][] = "Telefone";
$proto19["m_columns"][] = "Horario do Atendimento";
$proto19["m_columns"][] = "Valor da Consulta";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Atendimento_Agendado";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Atendimento_Agendado";
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
$proto0["m_srcTableName"]="Atendimento_Agendado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_atendimento_agendado = createSqlQuery_atendimento_agendado();


	
		;

						

$tdataatendimento_agendado[".sqlquery"] = $queryData_atendimento_agendado;



$tableEvents["Atendimento_Agendado"] = new eventsBase;
$tdataatendimento_agendado[".hasEvents"] = false;

?>