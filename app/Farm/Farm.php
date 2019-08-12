<?php

class Farm
{
    public $animals;

    public function addAnimal(Animal $animal)
    {

    }
}

class Animals
{
    public function say()
    {

    }

    public function walk()
    {
        echo "Топ-топ";
    }
}

class Pig extends Animals
{
    public function say()
    {
        echo "Хрю-хрю";
    }
}

class Cow extends Animals
{
    public function say()
    {
        echo "Му-му-му";
    }
}

class Chicken extends Animals
{
    public function say()
    {
        echo "Ко-ко-ко";
    }
}