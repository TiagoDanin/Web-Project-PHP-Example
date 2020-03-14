<?php
session_start();
require_once('../database/products.php');

function updateTotal($products, $tax) {
	$total = $tax;
	foreach ($products as $product) {
		if (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id]) {
			$total += $product->price;
		}
	}

	$_SESSION['total'] = $total;
}

function updateCard($products, $tax) {
	$productId = $_REQUEST['product'];
	$_SESSION[$productId] = !$_SESSION[$productId];
	updateTotal($products, $tax);
}

$action = $_REQUEST['action'];
switch ($action) {
	case 'updateCard':
		updateCard($products, $tax);
		header('location: /');
		break;
	default:
		http_response_code(404);
		require '../views/404.php';
}

?>