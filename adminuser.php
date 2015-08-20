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



$var="Select * from user_details";
$result=mysql_query($var);



?>

<!DOCTYPE html>
	<head>
		<title>User Data</title>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div id="wrapper">
			<div class="header">
				
				<h1 style="text-align:center;">RUN & URN<span></span></h1>
				<a href="admin.php"><button class="btn btn-primary btn-lg">back</button></a>
			</div>
		
			<h3>User Details</h3>
		<table class="table table-striped">
			<tr><th>Id</th><th>Username</th><th>Phone</th><th>Email</th><th>Distance</th><th>Speed</th><th>Duration</th><th>Earn</th><th>Event Id</th></tr>
	<?php
		while($row=mysql_fetch_array($result))
		{
		
		echo "<tr>";
		echo "<td>" .$row['id']."</td><td>  ".$row['username'] ."</td> <td>" .$row['phno'] ."</td><td> " .$row['email'] ."</td><td> " .$row['distance'] ."</td><td> " .$row['speed'] ."</td><td> " .$row['duration'] ."</td><td> " .$row['earn'] ."</td><td> " .$row['eid'] ."</td>";
		echo "</tr>";
	
		}
	
		


	?>

		</table>
		
		
		
		
		</form>
		</div>
		</div>	
	</body>

	</html>	
