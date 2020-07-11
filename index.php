<?php

session_start();

require_once("user/view/header.php");
require_once("admin/model/model.php");
require_once("user/model/model.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="user/assets/css/userIndex.css">
	<script type="text/javascript" src="user/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="user/assets/js/main.js"></script>

</head>
<body>
	<div id="searchdiv">
		
<input type="search" name="search"  placeholder="search product">
<button id="searchs">Search</button>
<?php
			if(isset($_SESSION['searchname'])):
				$searchProd=searchProducts($_SESSION['searchname']);
				if(!empty($searchProd)):
					foreach ($searchProd as  $value):?>
						<div class="products">
			<h1><?=$value['name']?></h1>
			<span><?=$value['price']?></span>
			<p><?=$value['description']?></p>
			<img src="<?='/shop/admin/assets/images/'.$value['images']?>">
			<button id="<?=$value['id']?>" class="add">Add to Card</button>
		</div>
	<?php endforeach;
				else:?>
					<h1>Search doesn't give result</h1>
				<?php endif;?>
				<? unset($_SESSION['searchname']);?>
			<?php endif;?>		
			



</div>
<div id="categoryDiv">

	<?php
	$categories=getCategories();?>
	<form action="index.php" method='post'> 

	<?php
	foreach ($categories as $value):?>
		<div class="catdiv">
			<div><?=$value['name']?></div>
			<button name="action" value="<?=$value['id']?>">Show</button>

</div>
	<?php endforeach?>

	</div>
</form>
	<?php
	if(isset($_POST['action'])){
		$id=$_POST['action'];
		$products=getProducts($id);
	}
	
	else{
		$products=getAllProducts();
	}	?>
	<div id="productsDiv">
	
	<?php
	
	foreach($products as $value):?>
		<div class="products">
			<h1><?=$value['name']?></h1>
			<span><?=$value['price']?></span>
			<p><?=$value['description']?></p>
			<img src="<?='/shop/admin/assets/images/'.$value['images']?>">
			<button id="<?=$value['id']?>" class="add">Add to Card</button>
		</div>
	<?php endforeach;?>
</table>
	</body>
</html>
