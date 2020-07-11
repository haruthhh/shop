<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>OnLine shop</title>
	<link rel="stylesheet" type="text/css" href="assets/css/enterPage.css">
</head>
<body>
		<div class="main">
			<div id="admin">Welcome admin's page</div>
			<form action="controller/adminController.php" method="post">
				<div class="input">
				    <input type="text" name="login" placeholder="enter your login">
				    <input type="password" name="password" placeholder="enter your password" >
				    <button name="action">Sign In</button>
			    </div>
			</form>
		</div>
		<div id="errors">
			<?php
			if(isset($_SESSION['error'])):?>
				<h2><?=$_SESSION['error']?></h2>
				<?php session_unset();
		 endif?>

		</div>
</body>
</html>