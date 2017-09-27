<?php
	require 'connect.php';

	$name  = $_POST['item_name'];
	$desc  = $_POST['item_desc'];
	$price = $_POST['item_price'];
	$cat   = $_POST['cat'];

	$filetemp = $_FILES["item_img"]["tmp_name"];
	$filename = $_FILES["item_img"]["name"];
	$filetype = $_FILES["item_img"]["type"];
	$filepath = "img/{$cat}/".$filename;

	$insert_query = "insert into tbl_{$cat} (name, price, description, image) values ('{$name}','{$price}','{$desc}', '{$filepath}')";
	mysqli_query($connect, $insert_query);
	move_uploaded_file($filetemp, $filepath);

	header("Location: adminops_{$cat}.php");
?>