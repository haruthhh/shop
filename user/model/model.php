<?php
$conn=mysqli_connect('localhost','root','','shop');
if(!$conn)die(mysqli_connect_error($conn));

function addUser($login,$password,$mail){
	global $conn;
	$query="INSERT into users VALUES(null, '$login', '$password', '$mail')";
	mysqli_query($conn,$query);
}

function checkMail($mail){
	global $conn;
	$query="SELECT * FROM users WHERE mail='$mail'";
	$res=mysqli_query($conn,$query);
	return mysqli_num_rows($res);
}
function userId($login,$password){
	global $conn;
	$query="SELECT id FROM users WHERE login='$login' AND password='$password'";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_NUM);
}

function checkUser($login,$password){
	global $conn;
	$query="SELECT * FROM users WHERE login='$login' AND password='$password'";
	$res=mysqli_query($conn,$query);
	return mysqli_num_rows($res);
}
function forgotMail($mail){
	global $conn;
	$query="SELECT * FROM users WHERE mail='$mail'";
	$res=mysqli_query($conn,$query);
	return mysqli_num_rows($res);
}
function updatePassword($password,$mail){
	global $conn;
	$query="UPDATE users SET password='$password' WHERE mail='$mail'";
	mysqli_query($conn,$query);
} 
function cardProducts($idarray){
	global $conn;
	$query="SELECT * FROM products WHERE id IN ($idarray)";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function searchProducts($name){
	global $conn;
	$query="SELECT * FROM products WHERE name='$name'";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);

}
function addOrders($name,$quantity,$price){
	global $conn;
	$query="INSERT INTO orders VALUES(null,'$name','$quantity','$price')";
	$res=mysqli_query($conn,$query);
}
function getOrders(){
	global $conn;
	$query="SELECT * FROM orders";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}