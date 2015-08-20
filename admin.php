<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		
	<title>Admin</title>
</head>
<body>
<a href="index.php"><button style=""class="btn btn-primary btn-lg">back</button></a>
<center>
<h1>Admin panel</h1>

<hr>
<br/>

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
			echo "sorry!";
		}
	}

	//echo $fullname = getfield('fullname');
	echo 'Welcome , '.$a.' <span style=""><a class="logout" style="" href="logout.php">Logout</a></span><br>';
}


?>

<a href="adminuser.php"><button class="btn btn-primary btn-lg">User</button></a> &nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;<a href="admincorporate.php"><button class="btn btn-danger btn-lg">Corporate</button></a>

<br />
<br>
<br>
<h1>Leader Boards</h1>
</center>
<h1><?php
			$count=0;
			$qi="SELECT count(id) from user_details";
			$query_run = mysql_query($qi);
			while($row=mysql_fetch_array($query_run))
			{
				$count=$row[0];
			}
		?>
		
			<center><button style="" class="btn btn-danger btn-lg">Total Paticipants:<span><?php echo "\n".$count;?></span></button></center></h1>


<?php

$var1="SELECT * from leaderboard order by earn desc";
$result1=mysql_query($var1);

		while($row1=mysql_fetch_array($result1))
		{
			
			
		echo '<table class="table table-striped">
			<tr><th>Id</th><th>Username</th><th>Amount Earned</th>';
		echo "<tr>";
		echo "<td>" .$row1['username']."</td><td>  ".$row1['earn'] ."</td>";
		echo "</tr>";
		echo "</table>";
			
		}
	
		


	?>

</body>
</html>