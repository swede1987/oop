<?php
namespace App\CustomerNotify;

session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . "\App\Webstore\User.php");
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
Basket::addProduct($thirdProduct->name, "1", $thirdProduct->price,3);

$firstOrder = new Order($_SESSION['cart']);

$firstClient = new \App\Webstore\User("Николай Николаевич", "3@ya.ru", NULL, "35", NULL);
$price = Order::getPrice($_SESSION['cart']);
$sostav = Order::getBasket($_SESSION['cart']);
$firstClient->notifyOnEmail("для вас создан заказ, на сумму:" . $price . " Состав:" . $sostav);