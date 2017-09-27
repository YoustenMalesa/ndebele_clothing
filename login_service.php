<?php
	require 'connect.php';
	require 'cart.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query_user   = "select * from tbl_user, tbl_customer_details c where username='{$username}' and password='{$password}' and c.email='{$username}'";

	$result  = mysqli_query($connect, $query_user);
	$user    = mysqli_fetch_object($result);

	$_SESSION['user'] = $user;

	if($user == NULL) {
		header('Location: login.php?login_status=true');
	}else {
		$name = $user->name;
		header("Location: checkoutorder.php?name={$name}");
	}

?>