<?php
	require 'cart.php';

	$user = NULL;
	$cart = NULL;

	if(isset($_SESSION['user'])){$user = unserialize(serialize($_SESSION['user']));}
	if(isset($_SESSION['cart'])){$cart = unserialize(serialize($_SESSION['cart']));}

	$name = $user->name;
	$to = $user->email;
	$subject = "Ndebele Clothing Order Confirmation";
	$body = "Hi, ${name}  \n\n\nThank you for shopping at Ndebele Clothing eShop. This is to confirm that Ndebele clothing has received your order. Please allow 2 days for processing of your order.\n";
	$body .=" \n Kindly contact us on info@ndebeleclothing.co.za should you require further assistance. \n\n\n ";
	$body  .= "Regards, \n Ndebele Sales Team";
	$headers = "From: orders@ndebeleclothing.co.za";



	$cart = NULL;
	$_SESSION['cart'] = $cart;
	mail($to,$subject,$body,$headers);


	header('Location: index.php');

?>