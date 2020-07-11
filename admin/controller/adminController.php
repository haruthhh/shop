<?php

session_start();

require_once('../model/model.php');
if(!isset($_POST['action']))die;
if(empty(trim($_POST['login']))||empty(trim($_POST['password']))){
	$_SESSION['error']="Please fill in the field!";
	header("location:../index.php");
	die;
}

$login=$_POST['login'];
$password=$_POST['password'];

if(checkAdmin($login,$password)) {
	header("location:../view/home.php");	
} else {
	$_SESSION['error'] = "Incorrect login or password!";
	header("location:../index.php");
	die;
}
