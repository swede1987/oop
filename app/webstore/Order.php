<?php
namespace App\Webstore;

require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

class Order
{
    public $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function getPrice()
    {
        return $this->basket->getPrice();
    }

    public function getBasket()
    {
        return $this->basket->describe();
    }
}