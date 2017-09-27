<?php
	require 'connect.php';
	require 'cart.php';

	$username = $_POST['admin_username'];
	$password = $_POST['admin_password'];
	echo $username;

	$query_user   = "select * from tbl_admin where username='{$username}' and password='{$password}'";

	$result  = mysqli_query($connect, $query_user);
	$user    = mysqli_fetch_object($result);

	if($user == NULL) {
		header('Location: login.php?login_status=true');
	}else {
		$name = $user->name;
		header("Location: adminops_clothes.php?name={$name}");
	}

?>