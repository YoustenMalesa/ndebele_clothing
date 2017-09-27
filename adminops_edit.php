<?php
	require 'connect.php';

	$name = $_POST['item_name'];
	$desc = $_POST['item_desc'];
	$price= $_POST['item_price'];
	$id   = $_POST['id'];
	$cat  = $_POST['cat'];

	$action_query = "update tbl_{$cat} set name='{$name}', price='{$price}', description='{$desc}' where id={$id}";
	mysqli_query($connect, $action_query);
	header("Location: adminops_{$cat}.php");
?>