<?php
$tdatastudent_enlistment_chart = array();
$tdatastudent_enlistment_chart[".searchableFields"] = array();
$tdatastudent_enlistment_chart[".ShortName"] = "student_enlistment_chart";
$tdatastudent_enlistment_chart[".OwnerID"] = "";
$tdatastudent_enlistment_chart[".OriginalTable"] = "public.student_enlistments";


$tdatastudent_enlistment_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatastudent_enlistment_chart[".originalPagesByType"] = $tdatastudent_enlistment_chart[".pagesByType"];
$tdatastudent_enlistment_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatastudent_enlistment_chart[".originalPages"] = $tdatastudent_enlistment_chart[".pages"];
$tdatastudent_enlistment_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatastudent_enlistment_chart[".originalDefaultPages"] = $tdatastudent_enlistment_chart[".defaultPages"];

//	field labels
$fieldLabelsstudent_enlistment_chart = array();
$fieldToolTipsstudent_enlistment_chart = array();
$pageTitlesstudent_enlistment_chart = array();
$placeHoldersstudent_enlistment_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_enlistment_chart["English"] = array();
	$fieldToolTipsstudent_enlistment_chart["English"] = array();
	$placeHoldersstudent_enlistment_chart["English"] = array();
	$pageTitlesstudent_enlistment_chart["English"] = array();
	$fieldLabelsstudent_enlistment_chart["English"]["term_id"] = "Term Id";
	$fieldToolTipsstudent_enlistment_chart["English"]["term_id"] = "";
	$placeHoldersstudent_enlistment_chart["English"]["term_id"] = "";
	$fieldLabelsstudent_enlistment_chart["English"]["status"] = "Status";
	$fieldToolTipsstudent_enlistment_chart["English"]["status"] = "";
	$placeHoldersstudent_enlistment_chart["English"]["status"] = "";
	$fieldLabelsstudent_enlistment_chart["English"]["count"] = "Count";
	$fieldToolTipsstudent_enlistment_chart["English"]["count"] = "";
	$placeHoldersstudent_enlistment_chart["English"]["count"] = "";
	if (count($fieldToolTipsstudent_enlistment_chart["English"]))
		$tdatastudent_enlistment_chart[".isUseToolTips"] = true;
}


	$tdatastudent_enlistment_chart[".NCSearch"] = true;

	$tdatastudent_enlistment_chart[".ChartRefreshTime"] = 0;


$tdatastudent_enlistment_chart[".shortTableName"] = "student_enlistment_chart";
$tdatastudent_enlistment_chart[".nSecOptions"] = 0;

$tdatastudent_enlistment_chart[".mainTableOwnerID"] = "";
$tdatastudent_enlistment_chart[".entityType"] = 3;
$tdatastudent_enlistment_chart[".connId"] = "financialslatestDbatlocalhost";


$tdatastudent_enlistment_chart[".strOriginalTableName"] = "public.student_enlistments";

	



$tdatastudent_enlistment_chart[".showAddInPopup"] = false;

$tdatastudent_enlistment_chart[".showEditInPopup"] = false;

$tdatastudent_enlistment_chart[".showViewInPopup"] = false;

$tdatastudent_enlistment_chart[".listAjax"] = false;
//	temporary
//$tdatastudent_enlistment_chart[".listAjax"] = false;

	$tdatastudent_enlistment_chart[".audit"] = false;

	$tdatastudent_enlistment_chart[".locking"] = false;


$pages = $tdatastudent_enlistment_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudent_enlistment_chart[".edit"] = true;
	$tdatastudent_enlistment_chart[".afterEditAction"] = 1;
	$tdatastudent_enlistment_chart[".closePopupAfterEdit"] = 1;
	$tdatastudent_enlistment_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudent_enlistment_chart[".add"] = true;
$tdatastudent_enlistment_chart[".afterAddAction"] = 1;
$tdatastudent_enlistment_chart[".closePopupAfterAdd"] = 1;
$tdatastudent_enlistment_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudent_enlistment_chart[".list"] = true;
}



$tdatastudent_enlistment_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudent_enlistment_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudent_enlistment_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudent_enlistment_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudent_enlistment_chart[".printFriendly"] = true;
}



$tdatastudent_enlistment_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudent_enlistment_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudent_enlistment_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudent_enlistment_chart[".isUseAjaxSuggest"] = true;





$tdatastudent_enlistment_chart[".ajaxCodeSnippetAdded"] = false;

$tdatastudent_enlistment_chart[".buttonsAdded"] = false;

$tdatastudent_enlistment_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_enlistment_chart[".isUseTimeForSearch"] = false;


$tdatastudent_enlistment_chart[".badgeColor"] = "EDCA00";


$tdatastudent_enlistment_chart[".allSearchFields"] = array();
$tdatastudent_enlistment_chart[".filterFields"] = array();
$tdatastudent_enlistment_chart[".requiredSearchFields"] = array();

$tdatastudent_enlistment_chart[".googleLikeFields"] = array();
$tdatastudent_enlistment_chart[".googleLikeFields"][] = "status";
$tdatastudent_enlistment_chart[".googleLikeFields"][] = "term_id";
$tdatastudent_enlistment_chart[".googleLikeFields"][] = "count";



$tdatastudent_enlistment_chart[".tableType"] = "chart";

$tdatastudent_enlistment_chart[".printerPageOrientation"] = 0;
$tdatastudent_enlistment_chart[".nPrinterPageScale"] = 100;

$tdatastudent_enlistment_chart[".nPrinterSplitRecords"] = 40;

$tdatastudent_enlistment_chart[".geocodingEnabled"] = false;



// chart settings
$tdatastudent_enlistment_chart[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatastudent_enlistment_chart[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_enlistment_chart[".orderindexes"] = array();


$tdatastudent_enlistment_chart[".sqlHead"] = "SELECT se.status, se.term_id, COUNT(*)";
$tdatastudent_enlistment_chart[".sqlFrom"] = "FROM student_enlistments se  JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id  JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$tdatastudent_enlistment_chart[".sqlWhereExpr"] = "se.term_id = :session.term_id";
$tdatastudent_enlistment_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_enlistment_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_enlistment_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent_enlistment_chart[".highlightSearchResults"] = true;

$tableKeysstudent_enlistment_chart = array();
$tdatastudent_enlistment_chart[".Keys"] = $tableKeysstudent_enlistment_chart;


$tdatastudent_enlistment_chart[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("student_enlistment_chart","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "se.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudent_enlistment_chart["status"] = $fdata;
		$tdatastudent_enlistment_chart[".searchableFields"][] = "status";
//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "public.student_enlistments";
	$fdata["Label"] = GetFieldLabel("student_enlistment_chart","term_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "term_id";

		$fdata["sourceSingle"] = "term_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "se.term_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudent_enlistment_chart["term_id"] = $fdata;
		$tdatastudent_enlistment_chart[".searchableFields"][] = "term_id";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("student_enlistment_chart","count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "count";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudent_enlistment_chart["count"] = $fdata;
		$tdatastudent_enlistment_chart[".searchableFields"][] = "count";

$tdatastudent_enlistment_chart[".chartLabelField"] = "status";
$tdatastudent_enlistment_chart[".chartSeries"] = array();
$tdatastudent_enlistment_chart[".chartSeries"][] = array(
	"field" => "count",
	"total" => ""
);
	$tdatastudent_enlistment_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">student_enlistment_chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">count</attr>';
	$tdatastudent_enlistment_chart[".chartXml"] .= '</attr>';
	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
	</attr>';
	$tdatastudent_enlistment_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="head">'.xmlencode("student_enlistment_chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("term_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatastudent_enlistment_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("student_enlistment_chart","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">term_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("student_enlistment_chart","term_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudent_enlistment_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("student_enlistment_chart","count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatastudent_enlistment_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">student_enlistment_chart</attr>
<attr value="short_table_name">student_enlistment_chart</attr>
</attr>

</chart>';

$tables_data["student_enlistment_chart"]=&$tdatastudent_enlistment_chart;
$field_labels["student_enlistment_chart"] = &$fieldLabelsstudent_enlistment_chart;
$fieldToolTips["student_enlistment_chart"] = &$fieldToolTipsstudent_enlistment_chart;
$placeHolders["student_enlistment_chart"] = &$placeHoldersstudent_enlistment_chart;
$page_titles["student_enlistment_chart"] = &$pageTitlesstudent_enlistment_chart;


changeTextControlsToDate( "student_enlistment_chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["student_enlistment_chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["student_enlistment_chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_student_enlistment_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "se.status, se.term_id, COUNT(*)";
$proto0["m_strFrom"] = "FROM student_enlistments se  JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id  JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto0["m_strWhere"] = "se.term_id = :session.term_id";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "se.term_id = :session.term_id";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= :session.term_id";
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
	"m_strName" => "status",
	"m_strTable" => "se",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto6["m_sql"] = "se.status";
$proto6["m_srcTableName"] = "student_enlistment_chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto8["m_sql"] = "se.term_id";
$proto8["m_srcTableName"] = "student_enlistment_chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(*)";
$proto10["m_srcTableName"] = "student_enlistment_chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.student_enlistments";
$proto14["m_srcTableName"] = "student_enlistment_chart";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "term_id";
$proto14["m_columns"][] = "student_id";
$proto14["m_columns"][] = "status";
$proto14["m_columns"][] = "created_at";
$proto14["m_columns"][] = "updated_at";
$proto14["m_columns"][] = "remarks";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "student_enlistments se";
$proto13["m_alias"] = "se";
$proto13["m_srcTableName"] = "student_enlistment_chart";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strHead"] = "SELECT";
$proto18["m_strFieldList"] = "student_enlistment_id";
$proto18["m_strFrom"] = "FROM student_enlist_classes";
$proto18["m_strWhere"] = "status IN ('Finalized','Enlisted')";
$proto18["m_strOrderBy"] = "";
	
		;
			$proto18["cipherer"] = null;
$proto20=array();
$proto20["m_sql"] = "status IN ('Finalized','Enlisted')";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "IN ('Finalized','Enlisted')";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_where"] = $obj;
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

$proto18["m_having"] = $obj;
$proto18["m_fieldlist"] = array();
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto24["m_sql"] = "student_enlistment_id";
$proto24["m_srcTableName"] = "student_enlistment_chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto18["m_fieldlist"][]=$obj;
$proto18["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.student_enlist_classes";
$proto27["m_srcTableName"] = "student_enlistment_chart";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "student_enlistment_id";
$proto27["m_columns"][] = "class_id";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "linked";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "remarks";
$proto27["m_columns"][] = "is_enlisted_during_change_mat";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "student_enlist_classes";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "student_enlistment_chart";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto18["m_fromlist"][]=$obj;
$proto18["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "public.student_enlist_classes",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto18["m_groupby"][]=$obj;
$proto18["m_orderby"] = array();
$proto18["m_srcTableName"]="student_enlistment_chart";		
$obj = new SQLQuery($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "JOIN (SELECT student_enlistment_id FROM student_enlist_classes WHERE status IN ('Finalized','Enlisted') GROUP BY student_enlistment_id)   sec  ON sec.student_enlistment_id = se.id";
$proto17["m_alias"] = "sec";
$proto17["m_srcTableName"] = "student_enlistment_chart";
$proto32=array();
$proto32["m_sql"] = "sec.student_enlistment_id = se.id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_enlistment_id",
	"m_strTable" => "sec",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= se.id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "public.student_program_records";
$proto35["m_srcTableName"] = "student_enlistment_chart";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "student_program_record_id";
$proto35["m_columns"][] = "campus_id";
$proto35["m_columns"][] = "academic_program_id";
$proto35["m_columns"][] = "acad_group";
$proto35["m_columns"][] = "curriculum_id";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "acad_org";
$proto35["m_columns"][] = "term_admitted";
$proto35["m_columns"][] = "first_registration";
$proto35["m_columns"][] = "classification";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "JOIN student_program_records spr ON spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto34["m_alias"] = "spr";
$proto34["m_srcTableName"] = "student_enlistment_chart";
$proto36=array();
$proto36["m_sql"] = "spr.campus_id = se.student_id  AND spr.status='ACTIVE'";
$proto36["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "spr.campus_id = se.student_id  AND spr.status='ACTIVE'"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
						$proto38=array();
$proto38["m_sql"] = "spr.campus_id = se.student_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "campus_id",
	"m_strTable" => "spr",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= se.student_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto36["m_contained"][]=$obj;
						$proto40=array();
$proto40["m_sql"] = "spr.status='ACTIVE'";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "spr",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "='ACTIVE'";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto36["m_contained"][]=$obj;
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "se",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "term_id",
	"m_strTable" => "se",
	"m_srcTableName" => "student_enlistment_chart"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="student_enlistment_chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_enlistment_chart = createSqlQuery_student_enlistment_chart();


	
		;

			

$tdatastudent_enlistment_chart[".sqlquery"] = $queryData_student_enlistment_chart;



$tdatastudent_enlistment_chart[".hasEvents"] = false;

?>