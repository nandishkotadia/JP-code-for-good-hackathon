<?php
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<center>
			<div id="form" style="width:50%">
						<form id="jsform" method="POST" action="dummyenter.php">
								<h2 style="text-align:center;margin-top:50px;">Dummy Data for users</h2>
								<input type="text" class="form-control" name="username" placeholder="username"></input><br/>
								<input type="text" class="form-control" name="phno" placeholder="phno"></input><br/>
								<input type="text" class="form-control" name="email" placeholder="email"></input><br/>
								<input type="text" class="form-control" name="distance" placeholder="'60'in kms"/><br/>
								<input type="text" class="form-control" name="speed" placeholder="'60' in kmphs"/><br/>
								<input type="text" class="form-control" name="duration" placeholder="'60' in mins"/><br/>
								<input type="text" class="form-control" name="eid" placeholder="event id"/><br/>
								<button type="submit" class="btn btn-primary" > Enter </button>
						</form>

			</div>
</body>

</html>