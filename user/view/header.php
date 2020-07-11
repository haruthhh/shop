<link rel="stylesheet" type="text/css" href="">
<div>
<ul>
	<li>
		<a href="/shop/index.php">Home</a>
	</li>
	<li>
		<a href="/shop/user/view/card.php">Card</a>
	</li>
	<li>
		<a href="/shop/user/view/orders.php">Orders</a>
	</li>

		<?php
		if(!isset($_SESSION['user'])):?>
	<li>
		<a href="/shop/user/view/login.php">Login</a>
	</li>
	<li>
		<a href="/shop/user/view/registration.php">Registration</a>
	</li>
	<?php else:?>
		<li>
			<a href="/shop/user/controller/logout.php">LogOut</a>
		</li>
<?php endif;?>
</ul>
</div>

<style type="text/css">
	ul{
		display: flex;
		justify-content: space-around;
		padding: 15px;
	}
	div{
		/*background-color: green;*/
	}
</style>