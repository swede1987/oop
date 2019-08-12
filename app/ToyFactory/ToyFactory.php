<?php
namespace App\ToyFactory;


class Toy
{
    public $name;
    public $price;

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
        return new Toy($name, rand(100, 10000));
    }
}