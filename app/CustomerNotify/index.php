<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

$firstProduct = new Product("Test", "15000");

var_dump($firstProduct);