<?php
namespace App\CustomerNotify;

require_once(__DIR__ . "\Basket.php");
require_once(__DIR__ . "\Product.php");

class Order
{
    public $price;
    public $basket;

    public function __construct($basket)
    {
        $this->basket = $basket;
    }

    public function getBasket()
    {
        $basket = $this->basket;
        $this->basket = $basket->describe();
    }

    public function getPrice()
    {
        $basket = $this->basket;
        $this->price = $basket->getPrice();
    }
}