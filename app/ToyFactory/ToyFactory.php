<?php
namespace App\ToyFactory;


class Toy
{
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class ToyFactory
{
    public function createToy($name)
    {
        $price = rand(100, 10000);
        return new Toy($name, $price);
    }
}