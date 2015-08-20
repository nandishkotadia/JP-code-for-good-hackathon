<?php
require 'core.inc.php';
require 'connect.inc.php';

$var="Select * from user_details";
$result=mysql_query($var);

	while($row=mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" .$row['distance']."</td><td>  ".$row['speed'] ."</td> <td>" .$row['time'] ."</td><td> " .$row['x_value'] ."</td><td>"  .$row['id'] ."</td>";
		echo "</tr>";
	
		}


?>