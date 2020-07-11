<?php
require_once('../model/model.php');
session_start();
date_default_timezone_set('Asia/Yerevan');
if(!isset($_POST['action']))die;
if(empty(trim($_POST['login']))||empty(trim($_POST['password']))){
	$_SESSION['error']="Plesa fill in the field";
	header("location:../view/login.php");
}
$login=$_POST['login'];
$password=$_POST['password'];
if(isset($_POST['check'])){
	setcookie('id',$login,time()+3600);
}
if(!checkUser($login,$password)){
	$_SESSION['error']="No such user!";
	header("location:../view/login.php");
	die;
}

setcookie('user',$login,time()+60*60*24*7);
$_SESSION['user'][]=$_COOKIE['user'];

// print_r(userId($login,$password));
// $_SESSION['id'][]=userID($login,$password);
// print_r($_SESSION['id']);
header("location:../view/profile.php");