<?php
require_once('../model/model.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>RestorePassword</title>
</head>
<body>
	<form method="post" action="restorePassword.php">
		<input type="password" name="password" placeholder="enter your password">
		<input type="password" name="confpassword" placeholder="repeat your password">
		<button name="button">OK</button>
	</form>
	<?php
	if(!isset($_POST['button']))die;
	if(empty(trim($_POST['password']))||empty(trim($_POST['confpassword']))):?>
	<div class="e">Please fill in the field</div>
<?php die; endif?>
	<?php
	if($_POST['password']!==$_POST['confpassword']):?>
		<div class="e">Passwords are different!</div>
	<?php die; endif?>
	<?php
	session_start();
	$mail=$_SESSION['mail'];
	$password=$_POST['password'];
	$reg= '/[a-zA-Z0-9]{8,19}/';
	if(!preg_match($reg, $password)):?>
		<div class="e">Wrong password format</div>
		<?php die; endif?>
	<?php
	updatePassword($password,$mail);
	header("location:../view/profile.php");
	?>
</body>
</html>
<style type="text/css">
.e{
		font-size: 1.5em;
		color: red;
	}
</style>