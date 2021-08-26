<?php
$tdatamateriais = array();
$tdatamateriais[".searchableFields"] = array();
$tdatamateriais[".ShortName"] = "materiais";
$tdatamateriais[".OwnerID"] = "";
$tdatamateriais[".OriginalTable"] = "Materiais";


$tdatamateriais[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamateriais[".originalPagesByType"] = $tdatamateriais[".pagesByType"];
$tdatamateriais[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamateriais[".originalPages"] = $tdatamateriais[".pages"];
$tdatamateriais[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamateriais[".originalDefaultPages"] = $tdatamateriais[".defaultPages"];

//	field labels
$fieldLabelsmateriais = array();
$fieldToolTipsmateriais = array();
$pageTitlesmateriais = array();
$placeHoldersmateriais = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmateriais["English"] = array();
	$fieldToolTipsmateriais["English"] = array();
	$placeHoldersmateriais["English"] = array();
	$pageTitlesmateriais["English"] = array();
	$fieldLabelsmateriais["English"]["Codigo"] = "Codigo";
	$fieldToolTipsmateriais["English"]["Codigo"] = "";
	$placeHoldersmateriais["English"]["Codigo"] = "";
	$fieldLabelsmateriais["English"]["Nome"] = "Nome";
	$fieldToolTipsmateriais["English"]["Nome"] = "";
	$placeHoldersmateriais["English"]["Nome"] = "";
	$fieldLabelsmateriais["English"]["Quantidade"] = "Quantidade";
	$fieldToolTipsmateriais["English"]["Quantidade"] = "";
	$placeHoldersmateriais["English"]["Quantidade"] = "";
	$fieldLabelsmateriais["English"]["Tipo"] = "Tipo";
	$fieldToolTipsmateriais["English"]["Tipo"] = "";
	$placeHoldersmateriais["English"]["Tipo"] = "";
	$fieldLabelsmateriais["English"]["Codfornecedor"] = "Codfornecedor";
	$fieldToolTipsmateriais["English"]["Codfornecedor"] = "";
	$placeHoldersmateriais["English"]["Codfornecedor"] = "";
	if (count($fieldToolTipsmateriais["English"]))
		$tdatamateriais[".isUseToolTips"] = true;
}


	$tdatamateriais[".NCSearch"] = true;



$tdatamateriais[".shortTableName"] = "materiais";
$tdatamateriais[".nSecOptions"] = 0;

$tdatamateriais[".mainTableOwnerID"] = "";
$tdatamateriais[".entityType"] = 0;
$tdatamateriais[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatamateriais[".strOriginalTableName"] = "Materiais";

	



$tdatamateriais[".showAddInPopup"] = false;

$tdatamateriais[".showEditInPopup"] = false;

$tdatamateriais[".showViewInPopup"] = false;

$tdatamateriais[".listAjax"] = false;
//	temporary
//$tdatamateriais[".listAjax"] = false;

	$tdatamateriais[".audit"] = false;

	$tdatamateriais[".locking"] = false;


$pages = $tdatamateriais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamateriais[".edit"] = true;
	$tdatamateriais[".afterEditAction"] = 1;
	$tdatamateriais[".closePopupAfterEdit"] = 1;
	$tdatamateriais[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamateriais[".add"] = true;
$tdatamateriais[".afterAddAction"] = 1;
$tdatamateriais[".closePopupAfterAdd"] = 1;
$tdatamateriais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamateriais[".list"] = true;
}



$tdatamateriais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamateriais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamateriais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamateriais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamateriais[".printFriendly"] = true;
}



$tdatamateriais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamateriais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamateriais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamateriais[".isUseAjaxSuggest"] = true;

$tdatamateriais[".rowHighlite"] = true;





$tdatamateriais[".ajaxCodeSnippetAdded"] = false;

$tdatamateriais[".buttonsAdded"] = false;

$tdatamateriais[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamateriais[".isUseTimeForSearch"] = false;


$tdatamateriais[".badgeColor"] = "7b68ee";


$tdatamateriais[".allSearchFields"] = array();
$tdatamateriais[".filterFields"] = array();
$tdatamateriais[".requiredSearchFields"] = array();

$tdatamateriais[".googleLikeFields"] = array();
$tdatamateriais[".googleLikeFields"][] = "Codigo";
$tdatamateriais[".googleLikeFields"][] = "Nome";
$tdatamateriais[".googleLikeFields"][] = "Quantidade";
$tdatamateriais[".googleLikeFields"][] = "Tipo";
$tdatamateriais[".googleLikeFields"][] = "Codfornecedor";



$tdatamateriais[".tableType"] = "list";

$tdatamateriais[".printerPageOrientation"] = 0;
$tdatamateriais[".nPrinterPageScale"] = 100;

$tdatamateriais[".nPrinterSplitRecords"] = 40;

$tdatamateriais[".geocodingEnabled"] = false;










$tdatamateriais[".pageSize"] = 20;

$tdatamateriais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamateriais[".strOrderBy"] = $tstrOrderBy;

$tdatamateriais[".orderindexes"] = array();


$tdatamateriais[".sqlHead"] = "SELECT Codigo,  	Nome,  	Quantidade,  	Tipo,  	Codfornecedor";
$tdatamateriais[".sqlFrom"] = "FROM Materiais";
$tdatamateriais[".sqlWhereExpr"] = "";
$tdatamateriais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamateriais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamateriais[".arrGroupsPerPage"] = $arrGPP;

$tdatamateriais[".highlightSearchResults"] = true;

$tableKeysmateriais = array();
$tableKeysmateriais[] = "Codigo";
$tdatamateriais[".Keys"] = $tableKeysmateriais;


$tdatamateriais[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Codigo");
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


	$tdatamateriais["Codigo"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Nome");
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


	$tdatamateriais["Nome"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Nome";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Quantidade");
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


	$tdatamateriais["Quantidade"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Quantidade";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Tipo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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


	$tdatamateriais["Tipo"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Tipo";
//	Codfornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codfornecedor";
	$fdata["GoodName"] = "Codfornecedor";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Codfornecedor");
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


	$tdatamateriais["Codfornecedor"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Codfornecedor";


$tables_data["Materiais"]=&$tdatamateriais;
$field_labels["Materiais"] = &$fieldLabelsmateriais;
$fieldToolTips["Materiais"] = &$fieldToolTipsmateriais;
$placeHolders["Materiais"] = &$placeHoldersmateriais;
$page_titles["Materiais"] = &$pageTitlesmateriais;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Materiais"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Materiais"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Materiais"][0] = $masterParams;
				$masterTablesData["Materiais"][0]["masterKeys"] = array();
	$masterTablesData["Materiais"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Materiais"][0]["detailKeys"] = array();
	$masterTablesData["Materiais"][0]["detailKeys"][]="Codfornecedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_materiais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Quantidade,  	Tipo,  	Codfornecedor";
$proto0["m_strFrom"] = "FROM Materiais";
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
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Materiais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Materiais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto10["m_sql"] = "Quantidade";
$proto10["m_srcTableName"] = "Materiais";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto12["m_sql"] = "Tipo";
$proto12["m_srcTableName"] = "Materiais";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codfornecedor",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto14["m_sql"] = "Codfornecedor";
$proto14["m_srcTableName"] = "Materiais";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Materiais";
$proto17["m_srcTableName"] = "Materiais";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Codigo";
$proto17["m_columns"][] = "Nome";
$proto17["m_columns"][] = "Quantidade";
$proto17["m_columns"][] = "Tipo";
$proto17["m_columns"][] = "Codfornecedor";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "Materiais";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Materiais";
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
$proto0["m_srcTableName"]="Materiais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_materiais = createSqlQuery_materiais();


	
		;

					

$tdatamateriais[".sqlquery"] = $queryData_materiais;



$tableEvents["Materiais"] = new eventsBase;
$tdatamateriais[".hasEvents"] = false;

?>