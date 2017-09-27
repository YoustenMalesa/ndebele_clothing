<?php
	session_start();
	require 'connect.php';
	require 'item.php';

	$page   = NULL;
	$action = NULL;
	$id     = NULL;
	$cart   = NULL;

	if(isset($_GET['page'])) { $page   = $_GET['page']; }
	if(isset($_GET['action'])) { $action   = $_GET['action']; }
	if(isset($_GET['id'])) { $id   = $_GET['id']; }
	if(isset($_SESSION['cart'])){$cart = unserialize(serialize($_SESSION['cart']));}
	
	
	if($action == 'add') {
		$item_query = '';

		if($page == 'index') {
			$item_query = "select * from tbl_clothes where id={$id}";
		}else if($page == 'shoes') {
			$item_query = "select * from tbl_shoes where id={$id}";
		}else {
			$item_query = "select * from tbl_accessories where id={$id}";
		}


		$result  = mysqli_query($connect, $item_query);
		$product = mysqli_fetch_object($result);

		if(isset($id)) {
			$index = -1;

			for($x= 0; $x < count($cart); $x++) { 
				if($cart[$x]->name == $product->name) {
					$index = $x;
					break;
				}
			}

			if($index == -1) {
					$item           = new Item();
					$item->id       = $product->id;
					$item->name     = $product->name;
					$item->price    = $product->price;
					$item->quantity = 1;

					$_SESSION['cart'][] = $item;
			}else {
				$cart[$index]->quantity++;
				$_SESSION['cart'] = $cart;
			}
		}

		header("Location: {$page}.php");
	}else if ($action == 'checkout') {

		
		header("Location: {$page}.php");
	}else if($action == 'remove') {
		$item = $_GET['name'];

		for($x= 0; $x < count($cart); $x++) {
			if($item == $cart[$x]->name) {
				unset($cart[$x]);
				$cart = array_values($cart);
				$_SESSION['cart'] = $cart;
				break;
			}

		}

		header("Location: {$page}.php");
	}
?>