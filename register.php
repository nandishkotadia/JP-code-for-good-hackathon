<?php
require 'core.inc.php';
require 'connect.inc.php';


	if(
		isset($_POST['fullname']) &&
		isset($_POST['username'])  &&
		isset($_POST['password'])&& 
		isset($_POST['password_again']) )
		
		
	{
		echo $fullname = $_POST['fullname'];
		
		echo $username = $_POST['username'];
		echo $password = $_POST['password'];
		echo $password_again = $_POST['password_again'];
		
		$password_hash = md5($password);
		
		if(!empty($fullname) && !empty($username) && !empty($password) && !empty($password_again))
		{
			
			if(strlen($username)>20 ||strlen($fullname)>20|| strlen($password)>20)
			{
				//header('location:online.php');
				header('Location:'.$http_referer);
				?>
				<script type="text/javascript" >alert("Please ahear to maxlength of fields.");</script>
				<?php
				ob_start();		
				
 				//echo("<script>location.href = 'online.php'</script>");
 				echo("<script>location.href ='index.php'</script>");
 				
				ob_end_flush();
 				exit();
				 
			}
			else
			{
			if($password != $password_again)
			{
				?>
				<script type="text/javascript" >alert("password do not match");</script>
				<?php
				ob_start();
					
 				//echo("<script>location.href = 'online.php'</script>");
 				echo("<script>location.href ='index.php'</script>");
				ob_end_flush();
 				exit();
				
			}

			else
			{
				$query = "SELECT `username` FROM `corp_reg` WHERE `username`='$username'";
				$query_run = mysql_query($query);

				if(mysql_num_rows($query_run)==1)
				{
					?>
					<script type="text/javascript" >alert("<?php echo 'The username '.$username.' already exists'; ?>");</script>
					<?php
					ob_start();
					
 					//echo("<script>location.href = 'online.php'</script>");
 					echo("<script>location.href ='index.php'</script>");
					ob_end_flush();
 					exit();
 					echo "already registered";
					
				}
				else
				{
					$query = "INSERT INTO `corp_reg` VALUES ('','$fullname','$username','$password')";
					if($query_run = mysql_query($query))
					{
						header ('Location:register_success.php');
					}
					/*
					else
					{
					
						?>
					<script type="text/javascript" >alert("Sorry, we could,\'t register you at this time . Try again later");</script>
					<?php
					ob_start();		
 					
 					//echo("<script>location.href = 'online.php'</script>");
 					echo("<script>location.href ='".$http_referer."'</script>");
					ob_end_flush();
 					exit();
						
					}*/
				}
	
			}
		}
			
		}
		else
		{
			?>
			<script type="text/javascript" >alert("All fields are required.");</script>
					<?php
					ob_start();		
 					
 					//echo("<script>location.href = 'online.php'</script>");
					echo("<script>location.href ='index.php'</script>");
					ob_end_flush();
 					exit();
			
		}
	}


?>

<!--<form action="register.php" method="POST">
Username: <br><input type="text" name="username" maxlength="30" value="<?php if(isset($username)){ echo $username; }?>"><br><br>
Password: <br><input type="password" name="password" ><br><br>
Password again: <br><input type="password" name="password_again"><br><br>
Firstname: <br><input type="text" name="firstname" maxlength="40" value="<?php if(isset($firstname)){ echo $firstname; }?>"><br><br>
Surname: <br><input type="text" name="surname" maxlength="40" value="<?php if(isset($surname)){ echo $surname; }?>"><br><br>
<input type="submit" value="Register">
</form>-->

