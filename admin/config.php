<?php   
ob_start();
@session_start();
error_reporting(0);
//error_reporting(E_ALL);
$hostname = 'localhost';
$username = 'u557725312_universe';
$password ='Universe@123';
$db_name = 'u557725312_universe';

global $obj;
		
ini_set('date.timezone', 'Asia/Kolkata');
require_once("db.class.php");
require_once("variable.php");
$obj = new DB($hostname, $username, $password, $db_name);

@define('SITE_URL',"https://universe.darxtechnologies.com/");
@define('SITE_TITLE',"iTsource");
$website_currency_code='$';
$website_currency_symbol="$";
date_default_timezone_set('Asia/Kolkata');

?>