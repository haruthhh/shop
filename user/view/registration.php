<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="../controller/regController.php" method="post">
		<input type="text" name="name" placeholder="Please enter your name">
		<input type="text" name="surname" placeholder="Plase enter your surname">
		<input type="text" name="login" placeholder="please enter your login">
		<input type="password" name="password" placeholder="Please enter your password">		
		<input type="password" name="confpassword" placeholder="Confirm your password">
		<input type="text" name="mail" placeholder="Please enter your mail">
		<button name="action" value="add">Send</button>
	</form>
	<?php
	if(isset($_SESSION['error'])):
	?>
	<div id="errordiv"><?=$_SESSION['error']?></div>
<?php 
session_unset();
endif?>
</body>
</html>
<style type="text/css">
	#errordiv{
		color: red;
		font-size: 1.5em;
	}
</style>