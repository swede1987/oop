<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

class Order
{
    public function __construct($basket)
    {
        self::getPrice($basket);
//        self::describe($product, $quantity, $price);
    }

    public function getBasket()
    {

    }

    public function getPrice()
    {

    }
}