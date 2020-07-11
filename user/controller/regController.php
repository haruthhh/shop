<?php
require_once('../model/model.php');
session_start();
if(!isset($_POST['action']))die;
if(empty(trim($_POST['name'])) OR empty(trim($_POST['surname'])) OR empty(trim($_POST['login'])) OR empty(trim($_POST['password'])) OR empty(trim($_POST['confpassword'])) or empty(trim($_POST['mail']))){
$_SESSION['error']='Please fill in the field';
header('location:../view/registration.php');
}
$name=$_POST['name'];
$surname=$_POST['surname'];
$login=$_POST['login'];
$password=$_POST['password'];
$confpassword=$_POST['confpassword'];
$mail=$_POST['mail'];
$regpassword='/[a-zA-Z0-9]{8,19}/';
if(!preg_match($regpassword, $password)){
	$_SESSION['error']="Wrong password Format!";
	header("location:../view/registration.php");
}
if($password!==$confpassword){
	$_SESSION['error']="Passwords are not the same";
	header("location:../view/registration.php");
}
if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
	$_SESSION['error']="WRong e-mail Format!";
	header("location:../view/registration.php");
}
if(checkMail($mail)){
	$_SESSION['error']="This e-mail is already exist!";
	header("location:../view/registration.php");
	die;
}
addUser($login,$password,$mail);
header("location:../view/profile.php");