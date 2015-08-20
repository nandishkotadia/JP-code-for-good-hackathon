<?php
require 'connect.inc.php';
ob_start();
session_start();
//echo $current_file = $_SERVER['SCRIPT_NAME'];

/*
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
{
$http_referer = $_SERVER['HTTP_REFERER'];
}*/

function loggedin()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
	return true;
}
else
{
	return false;
}
}


function getfield($field)
{
	//echo $_SESSION['user_id'];
	//echo $field;
	$query = "SELECT `$field` FROM corp_reg WHERE `id`='".$_SESSION['user_id']."'";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run, 0, $field))
		{
			
			return $query_result;
		}
	}
	else
	{
		//echo 'hello';
	}
}

?>