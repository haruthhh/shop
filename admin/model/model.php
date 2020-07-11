<?php
$conn=mysqli_connect('localhost','root','','shop');
if(!$conn)die(mysqli_connect_error($conn));

function checkAdmin($login,$password){
	global $conn;
	$query="SELECT * FROM admin WHERE login='$login' AND password='$password'";
	$res=mysqli_query($conn, $query);
	return mysqli_num_rows($res);
}
function addCategories($categoriesName){
	global $conn;
	$query ="INSERT INTO categories VALUES (null, '$categoriesName')";
	$res=mysqli_query($conn, $query);
}
function getCategories(){
	global $conn;
	$query = "SELECT * FROM categories";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function updateCategories($id,$name){
	global $conn;
	$query="UPDATE categories SET name='$name' WHERE id='$id'";
	$res=mysqli_query($conn, $query);
	}
function deleteCategories($id){
	global $conn;
	$query="DELETE FROM categories WHERE id='$id'";
	$res=mysqli_query($conn, $query);
}
function addProducts($name,$price,$description,$catid,$image){
	global $conn;
	$query="INSERT INTO products  VALUES(null, '$name', '$price','$description','$catid','$image')";
	$res=mysqli_query($conn,$query);
}
function getProducts($catid){
	global $conn;
	$query="SELECT * FROM products WHERE catid='$catid'";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function getAllProducts(){
	global $conn;
	$query="SELECT * FROM products";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function updateProducts($id,$name,$price,$description){
	global $conn;
	$query="UPDATE products SET name='$name', price='$price', description='$description' WHERE id='$id'";
	$res=mysqli_query($conn, $query);
}
function deleteProducts($id){
	global $conn;
	$query="DELETE FROM products WHERE id='$id'";
	$res=mysqli_query($conn, $query);
}





















