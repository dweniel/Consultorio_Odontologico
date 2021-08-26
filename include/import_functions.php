<?php

if (PHP_VERSION_ID < 70200) {
	require_once getabspath("include/import_functions_excel.php");
} else {
	require_once(dirname(__FILE__) . "./phpspreadsheet_int.php");
}

?>