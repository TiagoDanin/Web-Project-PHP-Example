<?php

class Product {
	public $id;
	public $name;
	public $price;
	public $items = array();

	function __construct($id, $name, $price, $items) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->items = $items;
	}
}