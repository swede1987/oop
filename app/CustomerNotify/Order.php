<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

class Order
{
    public static function getBasket($basket)
    {
        Basket::describe($basket);
    }

    public static function getPrice($basket)
    {
        Basket::getPrice($basket);
    }
}