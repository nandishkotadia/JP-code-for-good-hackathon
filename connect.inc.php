<?php
/*$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'jpcode';*/
$mysql_host = "mysql16.000webhost.com";
$mysql_db = "a6605538_jpcode";
$mysql_user = "a6605538_user";
$mysql_pass = "dreamtest2";

if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db))
{
	die(mysql_error());
	
}
mysql_query("SET NAMES 'utf8'");


?>

