<?php
	require 'connect.php';
	$action = $_GET['action'];
	$id     = $_GET['id'];
	$cat    = $_GET['cat'];

	$action_query = "delete from tbl_{$cat} where id={$id}";

	mysqli_query($connect, $action_query);
	header("Location: adminops_{$cat}.php");

?>