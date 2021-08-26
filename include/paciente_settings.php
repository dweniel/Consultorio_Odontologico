<?php
$tdatapaciente = array();
$tdatapaciente[".searchableFields"] = array();
$tdatapaciente[".ShortName"] = "paciente";
$tdatapaciente[".OwnerID"] = "Codigo";
$tdatapaciente[".OriginalTable"] = "Paciente";


$tdatapaciente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaciente[".originalPagesByType"] = $tdatapaciente[".pagesByType"];
$tdatapaciente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaciente[".originalPages"] = $tdatapaciente[".pages"];
$tdatapaciente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaciente[".originalDefaultPages"] = $tdatapaciente[".defaultPages"];

//	field labels
$fieldLabelspaciente = array();
$fieldToolTipspaciente = array();
$pageTitlespaciente = array();
$placeHolderspaciente = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspaciente["Portuguese(Brazil)"] = array();
	$fieldToolTipspaciente["Portuguese(Brazil)"] = array();
	$placeHolderspaciente["Portuguese(Brazil)"] = array();
	$pageTitlespaciente["Portuguese(Brazil)"] = array();
	$fieldLabelspaciente["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["CPF"] = "CPF";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["CPF"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["CPF"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["RG"] = "RG";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["RG"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["RG"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Data_de_Nascimento"] = "Data de Nascimento";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Data_de_Nascimento"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Data_de_Nascimento"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Sexo"] = "Sexo";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Sexo"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Sexo"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Nome_da_Mae"] = "Nome da Mãe";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Nome_da_Mae"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Nome_da_Mae"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Nome_do_Pai"] = "Nome do Pai";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Nome_do_Pai"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Nome_do_Pai"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["E_mail"] = "E-mail";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["E_mail"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["E_mail"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Rua"] = "Rua";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Rua"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Rua"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Numero"] = "Número";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Numero"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Numero"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Estado"] = "Estado";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Estado"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Estado"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Telefone"] = "Telefone";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Telefone"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Telefone"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["CEP"] = "CEP";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["CEP"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["CEP"] = "";
	$fieldLabelspaciente["Portuguese(Brazil)"]["Codagendamento"] = "Codagendamento";
	$fieldToolTipspaciente["Portuguese(Brazil)"]["Codagendamento"] = "";
	$placeHolderspaciente["Portuguese(Brazil)"]["Codagendamento"] = "";
	if (count($fieldToolTipspaciente["Portuguese(Brazil)"]))
		$tdatapaciente[".isUseToolTips"] = true;
}


	$tdatapaciente[".NCSearch"] = true;



$tdatapaciente[".shortTableName"] = "paciente";
$tdatapaciente[".nSecOptions"] = 1;

$tdatapaciente[".mainTableOwnerID"] = "Codigo";
$tdatapaciente[".entityType"] = 0;
$tdatapaciente[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatapaciente[".strOriginalTableName"] = "Paciente";

	



$tdatapaciente[".showAddInPopup"] = false;

$tdatapaciente[".showEditInPopup"] = false;

$tdatapaciente[".showViewInPopup"] = false;

	$tdatapaciente[".listAjax"] = true;
//	temporary
//$tdatapaciente[".listAjax"] = false;

	$tdatapaciente[".audit"] = false;

	$tdatapaciente[".locking"] = false;


$pages = $tdatapaciente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaciente[".edit"] = true;
	$tdatapaciente[".afterEditAction"] = 0;
	$tdatapaciente[".closePopupAfterEdit"] = 1;
	$tdatapaciente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaciente[".add"] = true;
$tdatapaciente[".afterAddAction"] = 0;
$tdatapaciente[".closePopupAfterAdd"] = 1;
$tdatapaciente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaciente[".list"] = true;
}



$tdatapaciente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaciente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaciente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaciente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaciente[".printFriendly"] = true;
}



$tdatapaciente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaciente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaciente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaciente[".isUseAjaxSuggest"] = true;

$tdatapaciente[".rowHighlite"] = true;





$tdatapaciente[".ajaxCodeSnippetAdded"] = false;

$tdatapaciente[".buttonsAdded"] = false;

$tdatapaciente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaciente[".isUseTimeForSearch"] = false;


$tdatapaciente[".badgeColor"] = "BC8F8F";


$tdatapaciente[".allSearchFields"] = array();
$tdatapaciente[".filterFields"] = array();
$tdatapaciente[".requiredSearchFields"] = array();

$tdatapaciente[".googleLikeFields"] = array();
$tdatapaciente[".googleLikeFields"][] = "Codigo";
$tdatapaciente[".googleLikeFields"][] = "Nome";
$tdatapaciente[".googleLikeFields"][] = "CPF";
$tdatapaciente[".googleLikeFields"][] = "RG";
$tdatapaciente[".googleLikeFields"][] = "Data de Nascimento";
$tdatapaciente[".googleLikeFields"][] = "Sexo";
$tdatapaciente[".googleLikeFields"][] = "Nome da Mae";
$tdatapaciente[".googleLikeFields"][] = "Nome do Pai";
$tdatapaciente[".googleLikeFields"][] = "E-mail";
$tdatapaciente[".googleLikeFields"][] = "Rua";
$tdatapaciente[".googleLikeFields"][] = "Numero";
$tdatapaciente[".googleLikeFields"][] = "Bairro";
$tdatapaciente[".googleLikeFields"][] = "Cidade";
$tdatapaciente[".googleLikeFields"][] = "Estado";
$tdatapaciente[".googleLikeFields"][] = "Telefone";
$tdatapaciente[".googleLikeFields"][] = "CEP";
$tdatapaciente[".googleLikeFields"][] = "Codagendamento";



$tdatapaciente[".tableType"] = "list";

$tdatapaciente[".printerPageOrientation"] = 0;
$tdatapaciente[".nPrinterPageScale"] = 100;

$tdatapaciente[".nPrinterSplitRecords"] = 40;

$tdatapaciente[".geocodingEnabled"] = false;





$tdatapaciente[".isResizeColumns"] = true;





$tdatapaciente[".pageSize"] = 20;

$tdatapaciente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaciente[".strOrderBy"] = $tstrOrderBy;

$tdatapaciente[".orderindexes"] = array();


$tdatapaciente[".sqlHead"] = "SELECT Codigo,  	Nome,  	CPF,  	RG,  	\"Data de Nascimento\",  	Sexo,  	\"Nome da Mae\",  	\"Nome do Pai\",  	\"E-mail\",  	Rua,  	Numero,  	Bairro,  	Cidade,  	Estado,  	Telefone,  	CEP,  	Codagendamento";
$tdatapaciente[".sqlFrom"] = "FROM Paciente";
$tdatapaciente[".sqlWhereExpr"] = "";
$tdatapaciente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaciente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaciente[".arrGroupsPerPage"] = $arrGPP;

$tdatapaciente[".highlightSearchResults"] = true;

$tableKeyspaciente = array();
$tableKeyspaciente[] = "Codigo";
$tdatapaciente[".Keys"] = $tableKeyspaciente;


$tdatapaciente[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Codigo");
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


	$tdatapaciente["Codigo"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Nome");
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


	$tdatapaciente["Nome"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Nome";
//	CPF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CPF";
	$fdata["GoodName"] = "CPF";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","CPF");
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


	$tdatapaciente["CPF"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "CPF";
//	RG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RG";
	$fdata["GoodName"] = "RG";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","RG");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "RG";

		$fdata["sourceSingle"] = "RG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RG";

	
	
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


	$tdatapaciente["RG"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "RG";
//	Data de Nascimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data de Nascimento";
	$fdata["GoodName"] = "Data_de_Nascimento";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Data_de_Nascimento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data de Nascimento";

		$fdata["sourceSingle"] = "Data de Nascimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data de Nascimento\"";

	
	
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


	$tdatapaciente["Data de Nascimento"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Data de Nascimento";
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Sexo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Sexo";

		$fdata["sourceSingle"] = "Sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sexo";

	
	
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


	$tdatapaciente["Sexo"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Sexo";
//	Nome da Mae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nome da Mae";
	$fdata["GoodName"] = "Nome_da_Mae";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Nome_da_Mae");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome da Mae";

		$fdata["sourceSingle"] = "Nome da Mae";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nome da Mae\"";

	
	
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


	$tdatapaciente["Nome da Mae"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Nome da Mae";
//	Nome do Pai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Nome do Pai";
	$fdata["GoodName"] = "Nome_do_Pai";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Nome_do_Pai");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome do Pai";

		$fdata["sourceSingle"] = "Nome do Pai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nome do Pai\"";

	
	
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


	$tdatapaciente["Nome do Pai"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Nome do Pai";
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","E_mail");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "E-mail";

		$fdata["sourceSingle"] = "E-mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"E-mail\"";

	
	
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


	$tdatapaciente["E-mail"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "E-mail";
//	Rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Rua";
	$fdata["GoodName"] = "Rua";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Rua");
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


	$tdatapaciente["Rua"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Rua";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Numero");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero";

	
	
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


	$tdatapaciente["Numero"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Numero";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Bairro");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Bairro";

		$fdata["sourceSingle"] = "Bairro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bairro";

	
	
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


	$tdatapaciente["Bairro"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Cidade");
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


	$tdatapaciente["Cidade"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Estado");
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


	$tdatapaciente["Estado"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Estado";
//	Telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Telefone";
	$fdata["GoodName"] = "Telefone";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Telefone");
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


	$tdatapaciente["Telefone"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Telefone";
//	CEP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CEP";
	$fdata["GoodName"] = "CEP";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","CEP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CEP";

		$fdata["sourceSingle"] = "CEP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CEP";

	
	
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


	$tdatapaciente["CEP"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "CEP";
//	Codagendamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Codagendamento";
	$fdata["GoodName"] = "Codagendamento";
	$fdata["ownerTable"] = "Paciente";
	$fdata["Label"] = GetFieldLabel("Paciente","Codagendamento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Codagendamento";

		$fdata["sourceSingle"] = "Codagendamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codagendamento";

	
	
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


	$tdatapaciente["Codagendamento"] = $fdata;
		$tdatapaciente[".searchableFields"][] = "Codagendamento";


$tables_data["Paciente"]=&$tdatapaciente;
$field_labels["Paciente"] = &$fieldLabelspaciente;
$fieldToolTips["Paciente"] = &$fieldToolTipspaciente;
$placeHolders["Paciente"] = &$placeHolderspaciente;
$page_titles["Paciente"] = &$pageTitlespaciente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Paciente"] = array();
//	Atendimento_Agendado
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Atendimento_Agendado";
		$detailsParam["dOriginalTable"] = "Atendimento_Agendado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "atendimento_agendado";
	$detailsParam["dCaptionTable"] = GetTableCaption("Atendimento_Agendado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Paciente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Paciente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["masterKeys"][]="Codagendamento";

				$detailsTablesData["Paciente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["detailKeys"][]="Codigo";
//	Dias_Disponiveis
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Dias_Disponiveis";
		$detailsParam["dOriginalTable"] = "Dias_Disponiveis";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dias_disponiveis";
	$detailsParam["dCaptionTable"] = GetTableCaption("Dias_Disponiveis");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Paciente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Paciente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Paciente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["detailKeys"][]="Coddisponivel";
//	Consultorio_Odontologico_usuarios
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Consultorio_Odontologico_usuarios";
		$detailsParam["dOriginalTable"] = "Consultorio_Odontologico_usuarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultorio_odontologico_usuarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("Consultorio_Odontologico_usuarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Paciente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Paciente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Paciente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Paciente"][$dIndex]["detailKeys"][]="username";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Paciente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paciente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	CPF,  	RG,  	\"Data de Nascimento\",  	Sexo,  	\"Nome da Mae\",  	\"Nome do Pai\",  	\"E-mail\",  	Rua,  	Numero,  	Bairro,  	Cidade,  	Estado,  	Telefone,  	CEP,  	Codagendamento";
$proto0["m_strFrom"] = "FROM Paciente";
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
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Paciente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Paciente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CPF",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto10["m_sql"] = "CPF";
$proto10["m_srcTableName"] = "Paciente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RG",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto12["m_sql"] = "RG";
$proto12["m_srcTableName"] = "Paciente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Nascimento",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto14["m_sql"] = "\"Data de Nascimento\"";
$proto14["m_srcTableName"] = "Paciente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto16["m_sql"] = "Sexo";
$proto16["m_srcTableName"] = "Paciente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome da Mae",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto18["m_sql"] = "\"Nome da Mae\"";
$proto18["m_srcTableName"] = "Paciente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome do Pai",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto20["m_sql"] = "\"Nome do Pai\"";
$proto20["m_srcTableName"] = "Paciente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "E-mail",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto22["m_sql"] = "\"E-mail\"";
$proto22["m_srcTableName"] = "Paciente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Rua",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto24["m_sql"] = "Rua";
$proto24["m_srcTableName"] = "Paciente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto26["m_sql"] = "Numero";
$proto26["m_srcTableName"] = "Paciente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto28["m_sql"] = "Bairro";
$proto28["m_srcTableName"] = "Paciente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto30["m_sql"] = "Cidade";
$proto30["m_srcTableName"] = "Paciente";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto32["m_sql"] = "Estado";
$proto32["m_srcTableName"] = "Paciente";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto34["m_sql"] = "Telefone";
$proto34["m_srcTableName"] = "Paciente";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CEP",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto36["m_sql"] = "CEP";
$proto36["m_srcTableName"] = "Paciente";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Codagendamento",
	"m_strTable" => "Paciente",
	"m_srcTableName" => "Paciente"
));

$proto38["m_sql"] = "Codagendamento";
$proto38["m_srcTableName"] = "Paciente";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "Paciente";
$proto41["m_srcTableName"] = "Paciente";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "Codigo";
$proto41["m_columns"][] = "Nome";
$proto41["m_columns"][] = "CPF";
$proto41["m_columns"][] = "RG";
$proto41["m_columns"][] = "Data de Nascimento";
$proto41["m_columns"][] = "Sexo";
$proto41["m_columns"][] = "Nome da Mae";
$proto41["m_columns"][] = "Nome do Pai";
$proto41["m_columns"][] = "E-mail";
$proto41["m_columns"][] = "Rua";
$proto41["m_columns"][] = "Numero";
$proto41["m_columns"][] = "Bairro";
$proto41["m_columns"][] = "Cidade";
$proto41["m_columns"][] = "Estado";
$proto41["m_columns"][] = "Telefone";
$proto41["m_columns"][] = "CEP";
$proto41["m_columns"][] = "Codagendamento";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "Paciente";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Paciente";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Paciente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paciente = createSqlQuery_paciente();


	
		;

																	

$tdatapaciente[".sqlquery"] = $queryData_paciente;



$tableEvents["Paciente"] = new eventsBase;
$tdatapaciente[".hasEvents"] = false;

?>