<?php
session_start();
require_once("../model/model.php");
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/product.js"></script>
	<title>Products</title>
</head>
<body>
	<form action="../controller/productsController.php" method="post" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="enter product's name">
		<input type="text" name="price" placeholder="enter product's price">
		<input type="text" name="description" placeholder="enter product's description">	
		<input type="file" name="image">	
		<button name="action" value="add">ADD</button>
	</form>
<?php
if (isset($_GET['catid'])){
	$_SESSION['catid']=$_GET['catid'];
}
$result=getProducts($_SESSION['catid']);

?>
<table border="2">
	<tr>
		<th>Product name</th>
		<th>Price</th>
		<th>Description</th>
		<th>Image</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
	foreach ($result as $value):
		$id=$value['id'];
		$name=$value['name'];
		$price=$value['price'];
		$description=$value['description'];
		$image=$value['images'];
	?>
	<tr id="<?=$id?>">
		<td class="name" contenteditable="true"><?=$name?></td>
		<td class="price" contenteditable="true"><?=$price?></td>
		<td class="description" contenteditable="true"><?=$description?></td>
		<td><img src="../assets/images/<?=$image?>"></td>
		<td><button class='update'>Update</button></td>
		<td><button class="delete">Delete</button></td>
	</tr>
<?php endforeach;?>
</table>
</body>
</html>
<style>
	img{
		width: 100px;
	}
</style>