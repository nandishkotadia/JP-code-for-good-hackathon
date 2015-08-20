<?php
if(
isset($_POST['username']) && 
isset($_POST['email']) && 
isset($_POST['phno']) && 
isset($_POST['distance']) &&
isset($_POST['speed']) &&
isset($_POST['duration']) &&
isset($_POST['eid']))
$username = $_POST['username'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$distance = $_POST['distance'];
$speed = $_POST['speed'];
$duration = $_POST['duration'];
$earn=$distance*$speed;
$eid= $_POST['eid'];
$con = mysql_connect("localhost","root","");
if(!$con) {
	die('Could not connect:'.mysql_error());
}
$amt=0;
$id=0;
mysql_select_db("jpcode",$con);

$query = "INSERT INTO user_details values('','".$username."','".$phno."','".$email."','".$distance."','".$speed."','".$duration."','".$earn."','".$eid."')";
if(mysql_query($query,$con)) {echo "done";}

$queryy="SELECT * from corp_details WHERE id='".$eid."'";
if($result=mysql_query($queryy,$con))
{
	//echo 'a';
	while($row=mysql_fetch_array($result))
		{
		 $amt=$row['Amount'];
		 $id=$row['id'];
		}
}

$final_amt=$amt-$earn;

$queryyy="UPDATE corp_details SET `Amount`='".$final_amt."' WHERE `id`='".$id."'";
if(mysql_query($queryyy,$con))
{}

$queryyyy="SELECT * FROM leaderboard WHERE `username`='".$username."'";
$result=mysql_query($queryyyy,$con);
if(mysql_num_rows($result)==0)
{
	$qin="INSERT into leaderboard values('".$username."','".$earn."')";
	$result=mysql_query($qin,$con);
}
else 
{
	if(mysql_num_rows($result)==1)
	{
		$qup="UPDATE leaderboard SET earn=earn+'".$earn."' WHERE `username`='".$username."'";
		$result=mysql_query($qup,$con);
	}

}


	?>
	<script type="text/javascript" >alert("Data inserted successfully.");</script>
		<?php
		
			echo("<script>location.href ='index.php'</script>");

?>