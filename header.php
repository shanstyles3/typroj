<?php
	session_start();
	require_once('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Paw Prints</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<header>
		<?php 
		//include_once "connect.php";
		if(!isset($_SESSION['email']) || $_SESSION['email'] == '') { ?>
			
			<a href="signin.php">Sign In</a>
			<a href="signup.php">Sign Up</a>
					
			<?php } else { ?>
			
			<a href="logout.php">Logout</a>
					
			<?php } ?>
	</header>
	</body>
</html>