<?php
namespace App\CustomerNotify;

session_start();

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

$firstProduct = new Product("Test", "15000");
$secondProduct = new Product("Второй товар", "10000");
$thirdProduct = new Product("Третий товар", "11000");
$fourthProduct = new Product("Четвертый товар", "12000");
$fifthProduct = new Product("Пятый товар", "10000");
$sixthProduct = new Product("Шестой товар", "10000");
$seventhProduct = new Product("Седьмой товар", "9000");


Basket::addProduct($firstProduct->name, "2", $firstProduct->price, 1);
Basket::addProduct($thirdProduct->name, "1", $thirdProduct->price,2);

var_dump($_SESSION['cart']);