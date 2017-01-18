<?php
header( 'Content-type: text/html; charset=gb2312');
error_reporting(E_ALL);
define('PATH',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('UPLOADPATH','upload/');
define('UPLOADSAVEPATH',PATH.DS.'upload/');
if (isset($_POST["PHPSESSID"])) {
	session_id($_POST["PHPSESSID"]);
} else if (isset($_GET["PHPSESSID"])) {
	session_id($_GET["PHPSESSID"]);
}
session_start();
//Êý¾Ý¿âÅäÖÃ
$dbconf = array('host'=>'localhost','port'=>3306,'user'=>'root','pwd'=>'','db'=>'student','charset'=>'GBK');
include_once  PATH.DS.'class/mysql.class.php';
include_once PATH.DS.'source/function.php';
$db = new class_mysql($dbconf);