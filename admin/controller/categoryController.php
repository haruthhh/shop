<?php
require_once('../model/model.php');
$action=$_POST['action'];
if($action=='add'){
	if(empty(trim($_POST['categoryName']))){
		echo "Please fill in the field";
	}
	else{
	$categoryName=$_POST['categoryName'];
	addCategories($categoryName);
	header("location:../view/home.php");
	}

}
if($action=='update'){
$id=$_POST['id'];
$name=$_POST['name'];
updateCategories($id,$name);
}
if($action=='delete'){
$id=$_POST['id'];
deleteCategories($id);
}
