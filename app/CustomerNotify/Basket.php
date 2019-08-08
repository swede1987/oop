<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public static function addProduct($product, $quantity, $price)
    {
        $basket = [];
        $basket[] = array(
            "NAME" => $product,
            "QNT" => $quantity,
            "PRICE" => $price
        );

        self::getPrice($basket);
//        self::describe($product, $quantity, $price);
    }

    public function getPrice($basket)
    {
        $totalPriceAr = [];
        foreach ($basket as $key => $product) {
            $price = $product["PRICE"];
            $qnt = $product["QNT"];
            $oneProductPrice = $price * $qnt;
            $totalPriceAr[] = $oneProductPrice;
        }
//        var_dump($totalPriceAr[0]);
        $totalPrice = array_sum($totalPriceAr);
        echo $totalPrice;
    }

    public function describe($product, $quantity, $price)
    {
        echo $product . " — " . $price . " — " . $quantity . "<br />";
    }
}