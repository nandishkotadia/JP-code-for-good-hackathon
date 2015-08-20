<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db))
{
	die("cant connect");

}

if(isset($_POST['username']) && isset($_POST['password']))
{
	$type=$_POST["optionsRadios"];
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($type=="admin")
	{
		if($username=="admin" && $password=="admin")
		{
			header('location:admin.php');
		}
		else
		{
			?>
		<script type="text/javascript" >alert("Invalid username/password combination.");</script>
		<?php
		
			echo("<script>location.href ='index.php'</script>");
		}
	}
	if($type=="corporate")
	{
	$query =" SELECT `id` from corp_reg where `username`='".$username."' AND `password`='".$password."'";
	if(!empty($username) && !empty($password))
	{
	if($query_run=mysql_query($query))
	{
		$mysql_num_rows=mysql_num_rows($query_run);
		if($mysql_num_rows==0)
		{
			
		?>
		<script type="text/javascript" >alert("Invalid username/password combination.");</script>
		<?php
		
		echo("<script>location.href ='index.php'</script>");
				
 			
		}
		else
		{

			mail($username,"Thank you","Thank you for your registeration.\n--Team,RUN & URN.","From Magic Bus");
			$user_id = mysql_result($query_run,0,'id');
			$_SESSION['user_id']=$user_id;
			//echo 'logged in';
			header("location:home.php");
		}
	}
	}
	}
}
?>