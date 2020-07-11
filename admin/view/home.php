<?php
require_once('../model/model.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>categories</title>
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/controlPanel.css">
</head>
<body>
	<div id="head">
		<div class="shop"><span>online shop</span></div>
		<div class="name"><span>main admin's page</span></div>
	</div>
	<div id="main">
		<div id="left">
			<div id="admin">
				<div class="admin">administrator menu</div>
			</div>
		</div>
		<div id="right">
			
		</div>
	</div>
	<form action="../controller/categoryController.php" method="post">
<input type="text" name="categoryName" placeholder="add categories">
<button name="action" value="add">ok</button>
    </form>
</body>
</html>
<?php
$result=getCategories();
?>

<table>
	<?php
	foreach ($result as $value):
		$id=$value['id'];
		$name=$value['name'];	?>
		<tr id="<?=$id?>">

		<td class="name" contenteditable="true"><?=$name?></td>
		<td><button class="update">Update</button></td>	
		<td><button class="delete">Delete</button></td>	
		<td><a href="products.php?catid=<?=$id?>">Show Products</a></td>

		</tr>

	<?php  endforeach;?>
</table>
