<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="../controller/loginController.php">
		<input type="text" name="login" placeholder="Please enter your login">
		<input type="password" name="password" placeholder="Please enter your password">
		<a href="../controller/forgotPassword.php">Forgot password</a>
		<input type="checkbox" name="check" id="check">
		<label for="check">Remember me</label>
		<button name="action" value="login">Sign In</button>
		
	</form>
	<?php
	if(isset($_SESSION['error'])):?>
		<div id="err"><?=$_SESSION['error']?></div>
<?php
	session_unset();
endif?>
</body>
</html>
<style type="text/css">
	#err{
		color:red;
		font-size: 1.5em;
	}
</style>
