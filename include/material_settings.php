<?php
$tdatamaterial = array();
$tdatamaterial[".searchableFields"] = array();
$tdatamaterial[".ShortName"] = "material";
$tdatamaterial[".OwnerID"] = "";
$tdatamaterial[".OriginalTable"] = "Material";


$tdatamaterial[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamaterial[".originalPagesByType"] = $tdatamaterial[".pagesByType"];
$tdatamaterial[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamaterial[".originalPages"] = $tdatamaterial[".pages"];
$tdatamaterial[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamaterial[".originalDefaultPages"] = $tdatamaterial[".defaultPages"];

//	field labels
$fieldLabelsmaterial = array();
$fieldToolTipsmaterial = array();
$pageTitlesmaterial = array();
$placeHoldersmaterial = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmaterial["Portuguese(Brazil)"] = array();
	$fieldToolTipsmaterial["Portuguese(Brazil)"] = array();
	$placeHoldersmaterial["Portuguese(Brazil)"] = array();
	$pageTitlesmaterial["Portuguese(Brazil)"] = array();
	$fieldLabelsmaterial["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsmaterial["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersmaterial["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsmaterial["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsmaterial["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersmaterial["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsmaterial["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsmaterial["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersmaterial["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsmaterial["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsmaterial["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersmaterial["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelsmaterial["Portuguese(Brazil)"]["Codfornecedor"] = "Fornecedor";
	$fieldToolTipsmaterial["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$placeHoldersmaterial["Portuguese(Brazil)"]["Codfornecedor"] = "";
	if (count($fieldToolTipsmaterial["Portuguese(Brazil)"]))
		$tdatamaterial[".isUseToolTips"] = true;
}


	$tdatamaterial[".NCSearch"] = true;



$tdatamaterial[".shortTableName"] = "material";
$tdatamaterial[".nSecOptions"] = 0;

$tdatamaterial[".mainTableOwnerID"] = "";
$tdatamaterial[".entityType"] = 0;
$tdatamaterial[".connId"] = "ConsultorioOdontologicosqlite3";


$tdatamaterial[".strOriginalTableName"] = "Material";

	



$tdatamaterial[".showAddInPopup"] = false;

$tdatamaterial[".showEditInPopup"] = false;

$tdatamaterial[".showViewInPopup"] = false;

	$tdatamaterial[".listAjax"] = true;
//	temporary
//$tdatamaterial[".listAjax"] = false;

	$tdatamaterial[".audit"] = false;

	$tdatamaterial[".locking"] = false;


$pages = $tdatamaterial[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamaterial[".edit"] = true;
	$tdatamaterial[".afterEditAction"] = 0;
	$tdatamaterial[".closePopupAfterEdit"] = 1;
	$tdatamaterial[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamaterial[".add"] = true;
$tdatamaterial[".afterAddAction"] = 0;
$tdatamaterial[".closePopupAfterAdd"] = 1;
$tdatamaterial[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamaterial[".list"] = true;
}



$tdatamaterial[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamaterial[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamaterial[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamaterial[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamaterial[".printFriendly"] = true;
}



$tdatamaterial[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamaterial[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamaterial[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamaterial[".isUseAjaxSuggest"] = true;

$tdatamaterial[".rowHighlite"] = true;





$tdatamaterial[".ajaxCodeSnippetAdded"] = false;

$tdatamaterial[".buttonsAdded"] = false;

$tdatamaterial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaterial[".isUseTimeForSearch"] = false;


$tdatamaterial[".badgeColor"] = "00c2c5";


$tdatamaterial[".allSearchFields"] = array();
$tdatamaterial[".filterFields"] = array();
$tdatamaterial[".requiredSearchFields"] = array();

$tdatamaterial[".googleLikeFields"] = array();
$tdatamaterial[".googleLikeFields"][] = "Codigo";
$tdatamaterial[".googleLikeFields"][] = "Nome";
$tdatamaterial[".googleLikeFields"][] = "Valor";
$tdatamaterial[".googleLikeFields"][] = "Quantidade";
$tdatamaterial[".googleLikeFields"][] = "Codfornecedor";



$tdatamaterial[".tableType"] = "list";

$tdatamaterial[".printerPageOrientation"] = 0;
$tdatamaterial[".nPrinterPageScale"] = 100;

$tdatamaterial[".nPrinterSplitRecords"] = 40;

$tdatamaterial[".geocodingEnabled"] = false;




$tdatamaterial[".isDisplayLoading"] = true;

$tdatamaterial[".isResizeColumns"] = true;





$tdatamaterial[".pageSize"] = 20;

$tdatamaterial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamaterial[".strOrderBy"] = $tstrOrderBy;

$tdatamaterial[".orderindexes"] = array();


$tdatamaterial[".sqlHead"] = "SELECT Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor";
$tdatamaterial[".sqlFrom"] = "FROM Material";
$tdatamaterial[".sqlWhereExpr"] = "";
$tdatamaterial[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaterial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaterial[".arrGroupsPerPage"] = $arrGPP;

$tdatamaterial[".highlightSearchResults"] = true;

$tableKeysmaterial = array();
$tableKeysmaterial[] = "Codigo";
$tdatamaterial[".Keys"] = $tableKeysmaterial;


$tdatamaterial[".hideMobileList"] = array();




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


	$tdatamaterial["Codigo"] = $fdata;
		$tdatamaterial[".searchableFields"][] = "Codigo";
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


	$tdatamaterial["Nome"] = $fdata;
		$tdatamaterial[".searchableFields"][] = "Nome";
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


	$tdatamaterial["Valor"] = $fdata;
		$tdatamaterial[".searchableFields"][] = "Valor";
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


	$tdatamaterial["Quantidade"] = $fdata;
		$tdatamaterial[".searchableFields"][] = "Quantidade";
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


	$tdatamaterial["Codfornecedor"] = $fdata;
		$tdatamaterial[".searchableFields"][] = "Codfornecedor";


$tables_data["Material"]=&$tdatamaterial;
$field_labels["Material"] = &$fieldLabelsmaterial;
$fieldToolTips["Material"] = &$fieldToolTipsmaterial;
$placeHolders["Material"] = &$placeHoldersmaterial;
$page_titles["Material"] = &$pageTitlesmaterial;

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











function createSqlQuery_material()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor";
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
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Material";
$proto17["m_srcTableName"] = "Material";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Codigo";
$proto17["m_columns"][] = "Nome";
$proto17["m_columns"][] = "Valor";
$proto17["m_columns"][] = "Quantidade";
$proto17["m_columns"][] = "Codfornecedor";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "Material";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Material";
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
$proto0["m_srcTableName"]="Material";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_material = createSqlQuery_material();


	
		;

					

$tdatamaterial[".sqlquery"] = $queryData_material;



$tableEvents["Material"] = new eventsBase;
$tdatamaterial[".hasEvents"] = false;

?>