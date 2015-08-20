
<script type="text/javascript" >alert("You are registered Successfully");</script>
				<?php
				require 'core.inc.php';
				require 'connect.inc.php';
				ob_start();		
 				//echo("<script>location.href = 'online.php'</script>");
				echo("<script>location.href ='index.php'</script>");
				ob_end_flush();
 				exit();

?>