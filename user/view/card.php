<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/main.js"></script>
<?php
session_start();
require_once("header.php");
require_once("../model/model.php");

if(!isset($_SESSION['user'])):?>
	<h1>Please Log IN</h1>
	<?php 	die;
endif;

if(!isset($_SESSION['card'])||empty($_SESSION['card'])):?>
	<h1>Your Card is empty!</h1>
<?php die;
 endif;
 $keys=array_keys($_SESSION['card']);
 $idarray=implode(',',$keys);
 $result=cardProducts($idarray);
 // echo "<pre>";
 // print_r($result);
 foreach ($result as $value):
 	$id=$value['id'];
 	$name=$value['name'];
 	$price=$value['price'];
 	$quantity=$_SESSION['card'][$id];
 	$sum=$quantity*$price;
 	?>
 	<table>
 		<tr id="<?=$id?>">
 			<td class="name"><?=$name?></td>
 			<td class="price"><?=$price?></td>
 			<td><input type="number" value="<?=$quantity?>" id="<?=$id?>" class="quantity"></td> 
 			<td><span><?=$sum?></span></td>	
 			<td><button class="delete">Delete</button></td>
 			<td><button class="order">Order</button></td>		
 		</tr>
 	</table>
 	<?php endforeach?>