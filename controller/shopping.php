<?php
session_start();
require_once('../database/products.php');
require_once(__DIR__ . '/../model/card.php');

$card = new Card($tax, $products);
$action = $_REQUEST['action'];
switch ($action) {
	case 'updateCard':
		$card->updateCard($_REQUEST['product']);
		header('location: /produtos');
		break;
	case 'updateCardCheckout':
		$card->updateCard($_REQUEST['product']);
		header('location: /carrinho');
		break;
	case 'checkout':
		header('location: /finalizar');
		break;
	case 'done':
		$card->clear();
		header('location: /pronto?code='.$card->code().'');
		break;
	default:
		http_response_code(404);
		require '../views/404.php';
}

?>