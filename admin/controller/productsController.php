<?php
require_once('../model/model.php');
session_start();
$action=$_POST['action'];
if($action=='add'){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$catid=$_SESSION['catid'];
	copy($_FILES['image']['tmp_name'],'../assets/images/'.$_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	addProducts($name,$price,$description,$catid,$image);
	header("location:../view/products.php");
}
if($action=='update'){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	updateProducts($id,$name,$price,$description);



}
if($action=='delete'){
	$id=$_POST['id'];
	deleteProducts($id);
}

