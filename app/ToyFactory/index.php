<?php
namespace App\ToyFactory;

require_once(__DIR__ . "/ToyFactory.php");

$countToys = rand(5, 20);
$arrayToys = array("Погремушка", "Лего", "Трансформер", "Машинка", "Кукла", "Домик", "Лошадка", "Пазл", "Мячик");
$arrayPrice = array();

for($i = 0; $i < $countToys; $i++) {
    $randomPosition = rand(0, 8);
    $randomName = $arrayToys[$randomPosition];
    $newToy = ToyFactory::createToy($randomName);
    echo $newToy->name . " - " . $newToy->price . " руб.<br />";
    $arrayPrice[] =$newToy->price;
}
$totalPrice = array_sum($arrayPrice);

echo "<br /><hr><br />Итого - " . $totalPrice . " руб.";