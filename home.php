<?php

require 'core.inc.php';
require 'connect.inc.php';

if(loggedin())
{
	//echo $_SESSION['user_id'];
	//echo $field;
	$query = "SELECT `fullname` FROM corp_reg WHERE `id`='".$_SESSION['user_id']."'";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run, 0, 'fullname'))
		{
		$a= $query_result;
		}
		else
		{

		}
	}

	//echo $fullname = getfield('fullname');
	echo 'Welcome , '.$a.' <span style=""><a class="logout" style="" href="logout.php">Logout</a></span><br>';
}
?>

<!DOCTYPE html>
	<head>
		<title>Corporate home</title>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		
	</head>
	<body>
		<div id="wrapper">
			<div class="header">
				<h1></h1>
				<h1>RUN & URN<span></span></h1>
			</div>
		

		<div class="forms">
		<form action="corp_retrieve.php" METHOD="POST" class="form-horizontal">
		<table cellspacing=20px class="table table-bordered">
		<tr>
		<td><h3>Enter the name of Corporate: </h3></td>
		<td><input type="email" class="form-control" name="corporateName" maxlength="40" value=""></td>
		</tr>
		<tr>
		<td><h3>Enter Start Date of the Challenge</td>
		<td><input  type="date" class="form-control" name="startDate" value=""></td>
		</tr>
		<tr>
		<td><h3>Enter End Date of the Challenge</h3></td>
		<td><input  type="date" class="form-control" name="endDate" value=""></td>
		</tr>
		<tr>
		<td><h3>Enter the Amount assigned for the pool: </h3></td>
		<td> <input id="inputEmail3" class="form-control" type="text" name="Amount" value=""></td>
		</tr>
		</table>
		
		<button class="btn btn-primary btn-large" type="submit" name="Submit" value="Submit Details">Submit</button>
		
		
		</form>
		</div>
		</div>	
	</body>

	</html>	
