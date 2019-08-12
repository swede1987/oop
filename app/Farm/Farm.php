<?php

class Farm
{
    public static $animals = [];

    public static function addAnimal(Animal $animal)
    {
        static::$animals[] = $animal;
        $animal->walk();
    }

    public static function rollCall()
    {
        foreach (static::$animals as $item) {
            $rand = rand(0, count(static::$animals) - 1);
            static::$animals[$rand]->say();
        }
    }
}

class Animal
{
    public function say()
    {

    }

    public function walk()
    {
        echo "Топ-топ<br/>";
    }
}

class Pig extends Animal
{
    public function say()
    {
        echo "Хрю-хрю<br/>";
    }
}

class Cow extends Animal
{
    public function say()
    {
        echo "Му-му-му<br/>";
    }
}

class Chicken extends Animal
{
    public function say()
    {
        echo "Ко-ко-ко<br/>";
    }
}

Farm::addAnimal(new Pig);
Farm::addAnimal(new Cow);
Farm::addAnimal(new Chicken);
Farm::addAnimal(new Cow);


Farm::rollCall();
