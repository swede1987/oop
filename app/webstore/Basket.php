<?php
namespace App\Webstore;

require_once(__DIR__ . "\Order.php");
require_once(__DIR__ . "\Product.php");

class Basket
{
    public $content = [];
    public $qnt = [];

    public function addProduct(Product $product, $quantity, $id)
    {
        $this->content[$id] = $product;
        $this->qnt[$id] = $quantity;
    }

    public function getPrice()
    {
        $basket = [];
        foreach ($this->content as $key => $product) {
            $price = $product->price;
            $qnt = $this->qnt[$key];

            $oneProductPrice = $price * $qnt;
            $basket[] = $oneProductPrice;
        }
        $total = array_sum($basket);
        return $total;
    }

    public function describe()
    {
        $describe = [];
        foreach ($this->content as $key => $product) {
            $price = $product->price;
            $qnt = $this->qnt[$key];
            $name = $product->name;

        $describe[] = $name . " — " . $price . " руб. — " . $qnt . " шт.<br/>";
        }
        return $describe;

    }
}