

<?php

require 'core.inc.php';
require 'connect.inc.php';


?>

<html>
	<head>
		<title>RUN & URN</title>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div id="wrapper"  >
			<div class="header" style="text-align:center;">
				<h1>RUN & URN</h1>
				<hr>
			</div>
			<center>
			<div class="forms" style="">

				<div id="form" style="width:50%">
						<form id="jsform" method="POST" action="login.php" class="form-horizontal">
							<fieldset>
								
								<h2 style="text-align:center;margin-top:50px;">Login</h2>
								<input type="text" class="form-control" name="username" placeholder="firstname/company"></input><br/>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="pass"/><br/>
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="admin" checked>Admin</input>
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="corporate">Corporate</input>
								&nbsp; &nbsp; &nbsp; &nbsp;
								<button type="submit" class="btn btn-primary" > Login </button><br/><br/><br/>
								User Login:<a href='https://runkeeper.com/apps/authorize?client_id=b0f438e7169f417689017a9c6c2c33f8&redirect_uri=http%3A%2F%2Fwww.dreambooknfly.com%2Fusage%2Frk-api.usage.php&response_type=code&state='><img src='http://static1.runkeeper.com/images/assets/login-blue-white-200x38.png'/></a>
							</fieldset>
						</form>
				</div>

<hr style="width:500px;">
				<div id="form" style="width:50%">
						<form id="jsform" method="POST" action="register.php">
								<h2 style="text-align:center;margin-top:50px;">Register</h2>
								<input type="text" class="form-control" name="fullname" placeholder="firstname/company"></input><br/>
								<input type="text" class="form-control" name="username" placeholder="username"/><br/>
								<input type="password"  class="form-control" id="exampleInputPassword1" name="password" placeholder="password"></input><br/>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password_again" placeholder="confirmpassword"></input><br/>
								<button type="submit" class="btn btn-primary" > Register </button>
						</form>

				</div>
			</center>
			</div>
		</div>
	</body>
</html>
