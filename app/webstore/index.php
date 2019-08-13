<?php
namespace App\Webstore;

session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . "\App\CustomerNotify\User.php");
require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

$firstProduct = new Product("Test", "15000");
$secondProduct = new Product("Второй товар", "10000");
$thirdProduct = new Product("Третий товар", "11000");
$fourthProduct = new Product("Четвертый товар", "12000");
$fifthProduct = new Product("Пятый товар", "10000");
$sixthProduct = new Product("Шестой товар", "10000");
$seventhProduct = new Product("Седьмой товар", "9000");

$basket1 = new Basket();

$basket1->addProduct(new Product("Первый продукт", 1500), "2", 1);
$basket1->addProduct(new Product("Второй продукт", 3000), "3", 2);
$basket1->addProduct(new Product("Третий продукт", 3500), "4", 3);

$firstOrder = new Order($basket1);
$order = $firstOrder->getBasket();

//foreach ($order as $key => $item) {
//
//    $item .= $item;
//
//    echo $item . "<br/>";
//}


$firstClient = new \App\CustomerNotify\User("Николай Николаевич", "3@ya.ru", null, "35", null);
$firstClient->notifyOnEmail("для вас создан заказ, на сумму:" . $firstOrder->getPrice() . " руб.<br/> Состав:<br/>" . implode("", $order));