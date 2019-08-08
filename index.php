<?php


require_once(__DIR__ . "/app/HungryCat/HungryCat.php");
require_once(__DIR__ . "/app/ToyFactory/ToyFactory.php");
require_once(__DIR__ . "/app/webstore/User.php");



$pushok = new App\HungryCat\HungryCat("Пушок", "серый", "Вискас");
$vaska = new App\HungryCat\HungryCat("Васька", "черный", "Китекат");

$arrayFood = array("Консервы", "Рыба", "Молоко", "Китекат", "Вискас");

//foreach ($arrayFood as $food) {
//    $pushok->eat($food);
//    $vaska->eat($food);
//}

$countToys = rand(5, 20);
$arrayToys = array("Погремушка", "Лего", "Трансформер", "Машинка", "Кукла", "Домик", "Лошадка", "Пазл", "Мячик");
$arrayPrice = array();

//for($i = 0; $i < $countToys; $i++) {
//    $randomPosition = rand(0, 8);
//    $randomName = $arrayToys[$randomPosition];
//    $newToy = App\ToyFactory\ToyFactory::createToy($randomName);
//    echo $newToy->name . " - " . $newToy->price . " руб.<br />";
//    $arrayPrice[] =$newToy->price;
//}
//$totalPrice = array_sum($arrayPrice);
//echo "<br /><hr><br />Итого - " . $totalPrice . " руб.";

$vasya = new App\Webstore\User("Ivanov", "1@ya.ru", NULL, NULL, 89093491159);

$vasya->notifyOnEmail("Привет");
$vasya->notifyOnPhone("Пока");

