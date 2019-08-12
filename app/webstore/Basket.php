<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public $content;

    public function addProduct(Product $product, $quantity, $id)
    {
        $basket[$id]['name'] = $product->getName();
        $basket[$id]['qnt'] = $quantity;
        $basket[$id]['price'] = $product->getPrice();
        $this->content[] = $basket[$id];
    }

    public function getPrice()
    {
        $basket = [];
        foreach ($this->content as $key => $product) {
            $price = $product["price"];
            $qnt = $product["qnt"];
            $oneProductPrice = $price * $qnt;
            $basket[] = $oneProductPrice;
        }
        $total = array_sum($basket);
        echo $total . " руб.<br />";
    }

    public function describe()
    {
        foreach ($this->content as $key => $product) {
            $price = $product["price"];
            $quantity = $product["qnt"];
            $name = $product["name"];

        echo $name . " — " . $price . " руб. — " . $quantity . " шт.<br />";
        }

    }
}