<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

class Order
{
    public function __construct($basket)
    {
        echo "Содержимое корзины:<hr />";
        self::getBasket($basket);
        echo "<hr>";
        echo "Общая стоимость заказа: <br />";
        self::getPrice($basket);
    }

    public static function getBasket($basket)
    {
        Basket::describe($basket);
    }

    public static function getPrice($basket)
    {
        Basket::getPrice($basket);
    }
}