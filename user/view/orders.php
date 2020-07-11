<?php
session_start();
require_once('header.php');
require_once('../model/model.php');
if(!isset($_SESSION['user'])):?>
	<h1>Please Log IN</h1>
	<?php 	die;
endif;
$result=getOrders();
echo "<pre>";
print_r($result);
?>



