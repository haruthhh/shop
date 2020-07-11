<?php
session_start();
require_once("../model/model.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
</head>
<body>
	<form action="forgotPassword.php" method="post">
	<input type='email' name="mail" placeholder="enter your mail">	
	<button name="action">Send</button>	
	</form>

</body>
</html>
<?php
	if(!isset($_POST['action']))die;
	$mail=$_POST['mail'];
	if(!forgotMail($mail)):
?>
<div>NO SUCH USER</div>
<?php
die;
 endif?>
 <?php
 $_SESSION['mail']=$mail;
 header("location:restorePassword.php");
