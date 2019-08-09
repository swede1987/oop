<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public static function addProduct($product, $quantity, $price, $id)
    {
        $_SESSION['cart'][$id] = array(
            "NAME" => $product,
            "QNT" => $quantity,
            "PRICE" => $price
        );

    }

    public function getPrice($basket)
    {
        foreach ($basket as $key => $product) {
            $price = $product["PRICE"];
            $qnt = $product["QNT"];
            $oneProductPrice = $price * $qnt;
            $basket[$key] = $oneProductPrice;
        }
        $total = array_sum($basket);
        echo $total . " руб.<br />";
    }

    public function describe($basket)
    {
        foreach ($basket as $key => $product) {
            $price = $product["PRICE"];
            $quantity = $product["QNT"];
            $name = $product["NAME"];

        echo $name . " — " . $price . " руб. — " . $quantity . " шт.<br />";
        }

    }
}