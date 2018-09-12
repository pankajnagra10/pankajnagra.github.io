<?php

ob_start();
session_start(); 
//session_destroy();
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS .  "templates". DS ."front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__ . DS .  "templates". DS ."back");

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY",__DIR__ . DS ."uploads");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

/*
if ($connection== TRUE)
	{
		echo " connection establish ";
	}
else{
	echo " print false";
}*/
include_once("functions.php");



/*

echo __DIR__; 
echo TEMPLATE_FRONT;
*/
//echo UPLOAD_DIRECTORY;



?>
 