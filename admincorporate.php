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


$var="Select * from corp_details";
$result=mysql_query($var);



?>

<!DOCTYPE html>
	<head>
		<title>Magic Bus</title>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div id="wrapper">
			<div class="header">
				<h1 style="text-align:center;">RUN & URN</h1>
				<a href="admin.php"><button class="btn btn-primary btn-lg">back</button></a>
			</div>
		
			<h3>Corporate Details</h3>
		<table class="table table-striped">
			<tr><th>Id</th><th>Corporate Name</th><th>Start Date</th><th>End Date</th><th>Amount</th></tr>
	<?php
		while($row=mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" .$row['id']."</td><td>  ".$row['corporateName'] ."</td> <td>" .$row['startDate'] ."</td><td> " .$row['endDate'] ."</td><td>"  .$row['Amount'] ."</td>";
		echo "</tr>";
	
		}


	?>

		</table>
		<?php
			$count=0;

			$sql = "Select count(id) from user_details";
			$query_run = mysql_query($sql);
			
			$count=mysql_num_rows($query_run);
			/*
			while($row=mysql_fetch_assoc($query_run))
			{
				$count=$row['id'];	
				

				
			}*/
		?>
		
			<center><button style="padding-top:20px;padding-bottom:20px;" class="btn btn-danger btn-lg">Total Paticipants:<span><?php echo "\n".$count;?></span></button></center>
			
		</form>
		</div>
		</div>	
	</body>

	</html>	
