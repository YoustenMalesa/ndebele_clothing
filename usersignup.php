<?php
	require 'connect.php';
	$name        = $_POST['fn'];
	$surname     = $_POST['ln'];
	$email       = $_POST['email'];
	$cell_number = $_POST['phone'];

	$address1 = $_POST['add1'];
	$address2 = $_POST['add2'];
	$city     = $_POST['city'];
	$code     = $_POST['zip'];
	$province = $_POST['province'];
	$password = $_POST['password'];

	$subject = "Ndeble Clothing Registration";
	$intro   = "Hi, {$name}";
	$headers = "From: no-reply@ndebeleclothing.co.za";
	$body    = "Thank you for signing up with Ndebele Clothing eShop. Below are your login credentials for reference. \n\n\n ";
	$body	.="Username: {$email} \n Password: {$Password} \n\n\n Happy shopping. \n\n Warm Regards, \n Ndebele Clothing team";


	$cust_det   = "insert into tbl_customer_details(name,surname,email,cell_number) values('{$name}','{$surname}','{$email}','{$cell_number}')";
	$address    = "insert into tbl_address(email,address1,address2,city,code,province) values('{$email}','{$address1}','{$address2}', '{$city}','{$code}','{$code}')";
	$login      = "insert into tbl_user(username,password) values('{$email}','{$password}')";

	$user_exists = "select * from tbl_customer_details where email='{$email}'";
	$result  = mysqli_query($connect, $user_exists);
	$user = mysqli_fetch_object($result);

	if($user == NULL) {
		mysqli_query($connect, $cust_det);
		mysqli_query($connect, $address);
		mysqli_query($connect, $login);

		mysqli_close($connect);
		mail($email,$subject,$body,$headers);
		header('Location: login.php');

	}else {

		header('Location: checkoutpage.php?user_exists=true');
	}

?>