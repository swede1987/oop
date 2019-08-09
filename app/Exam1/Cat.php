<?php

class Cat
{
    private $name;
    private $color;
    private $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}


$cat1 = new Cat("Пушок", "белый", "3.5");
$cat1->setName("111");
$cat1->getName();

