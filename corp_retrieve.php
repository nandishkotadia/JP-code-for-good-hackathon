<?php
//require('connect.inc.php');
$mysql_host = "mysql16.000webhost.com";
$mysql_db = "a6605538_jpcode";
$mysql_user = "a6605538_user";
$mysql_pass = "dreamtest2";
	$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
    // Check connection
    if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
//done connection working fine

if(isset($_POST['corporateName']) && isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['Amount']))
{
$corporateName = $_POST['corporateName'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$Amount = $_POST['Amount'];

$data="Company Name".$corporateName."\n Start Date".$startDate."\n End Date".$endDate."\n Donation Amount ".$Amount." ";
$to = "dreamtechdev@gmail.com" ;
mail($to,"Donation Event",$data,"From: Magic Bus");
//mail working fine




/*$con = mysql_connect("localhost","root","");
if(!$con) {
	die('Could not connect:'.mysql_error());
}

mysql_select_db("jpcode",$con);*/
/*
$query = "INSERT INTO corp_details values('".$corporateName."','".$startDate."','".$endDate."','".$Amount."','NULL')";
if(mysql_query($query,$con)) {
	
	
	
}	*/

//require('nanpost.php');

require('twit.php');
//twitter working fine
}
?>