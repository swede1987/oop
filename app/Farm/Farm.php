<?php

class Farm
{
    public static $animals = [];

    public static function addAnimal(Hoff $animal)
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

class BirdFarm
{

}

class Farmer
{
    function addAnimal(Farm $farm, Animal $animal)
    {

    }

    function rollCall(Farm $farm)
    {

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

class Bird
{
    public function say()
    {

    }

    public function tryToFly()
    {
        echo "Вжих-вжих-топ-топ<br/>";
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

class Chicken extends Bird
{
    public function say()
    {
        echo "Ко-ко-ко<br/>";
    }
}

class Goose extends Bird
{

}

class Turkey extends Bird
{

}

class Horse extends Animal
{

}



//Farm::addAnimal(new Pig);
//Farm::addAnimal(new Cow);
//Farm::addAnimal(new Chicken);
//Farm::addAnimal(new Pig);
//
//
//Farm::rollCall();
