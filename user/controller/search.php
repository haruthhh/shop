<?
session_start();

if(!isset($_POST['action']))die;
$action=$_POST['action'];
if($action=='search'){
	$name=$_POST['name'];
	$_SESSION['searchname']=$name;

}