<?php
namespace App\Webstore;

require_once(__DIR__ . "/User.php");

$vasya = new User("Ivanov", "1@ya.ru", null, 19, 89093491159);
$petya = new User("Petrov", "2@ya.ru", null, null, null);

$vasya->notify("Вам нет 18 лет, пожалуйста покиньте сайт<br />");

$petya->notify("Вам нет 18 лет, пожалуйста покиньте сайт<br />");
