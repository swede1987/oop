<?php
namespace App\HungryCat;

require_once(__DIR__ . "/HungryCat.php");

$pushok = new HungryCat("Пушок", "серый", "Вискас");
$vaska = new HungryCat("Васька", "черный", "Китекат");

$arrayFood = array("Китекат", "Консервы", "Рыба", "Молоко", "Вискас");

foreach ($arrayFood as $food) {
    $pushok->eat($food);
    $vaska->eat($food);
}