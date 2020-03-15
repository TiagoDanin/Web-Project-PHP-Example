<?php
session_start();

class Card {
	private $tax;
	private $products = array();

	function __construct($tax, $products) {
		$this->tax = $tax;
		$this->products = $products;
	}
	
	public function updateTotal() {
		$total = $this->tax;
		foreach ($this->products as $product) {
			if (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id]) {
				$total += $product->price;
			}
		}
	
		if ($total == $this->tax) {
			$total = 0;
		}
		
		$_SESSION['total'] = $total;
	}
	
	public function updateCard($productId) {
		$_SESSION[$productId] = !$_SESSION[$productId];
		$this->updateTotal();
	}

	public function clear() {
		foreach ($this->products as $product) {
			$_SESSION['p' . $product->id] = false;
		}
	}

	public function code() {
		return uniqid('') . uniqid('-') . uniqid('-') . uniqid('-');
	}
}