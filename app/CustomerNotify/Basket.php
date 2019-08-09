<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public static function addProduct($product, $quantity, $price, $id, $count = 1)
    {
        $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$count;

        var_dump($_SESSION['cart']);

//        $_SESSION['cart'][$id]['content'] = array(
//            "NAME" => $product,
//            "QNT" => $quantity,
//            "PRICE" => $price
//        );
//
//        return true;

    }
//
//    public function getPrice($basket)
//    {
////        var_dump($basket);
//        foreach ($basket as $key => $product) {
//            $price = $product["PRICE"];
//            $qnt = $product["QNT"];
//            $oneProductPrice = $price * $qnt;
//            $basket[$key] = $oneProductPrice;
//        }
//        return $basket;
////        var_dump($basket);
//    }
//
//    public function describe($product, $quantity, $price)
//    {
//        echo $product . " — " . $price . " — " . $quantity . "<br />";
//    }
}