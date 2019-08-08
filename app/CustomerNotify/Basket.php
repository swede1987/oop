<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public static function addProduct($product, $quantity, $price, $id)
    {
        $basket = [];
        $basket[$id] = array(
            "NAME" => $product,
            "QNT" => $quantity,
            "PRICE" => $price
        );

        self::getPrice($basket);

    }

    public function getPrice($basket)
    {
        $totalPriceAr = [];

        foreach ($basket as $key => $product) {
            $price = $product["PRICE"];
            $qnt = $product["QNT"];
            $oneProductPrice = $price * $qnt;
            $totalPriceAr[$key] = $oneProductPrice;
        }

        $totalPrice = array_sum($totalPriceAr);
        var_dump($totalPrice);
    }

    public function describe($product, $quantity, $price)
    {
        echo $product . " — " . $price . " — " . $quantity . "<br />";
    }
}