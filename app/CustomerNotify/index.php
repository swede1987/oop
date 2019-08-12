<?php
namespace App\Webstore;

require_once(__DIR__ . "/User.php");

$vasya = new User("Ivanov", "1@ya.ru", null, null, 89093491159);
$petya = new User("Petrov", "2@ya.ru", null, null, null);

$vasya->notify("Вам нет 18 лет, пожалуйста покиньте сайт<br />");
$vasya->notifyOnEmail("Сообщение на почту");
$vasya->notifyOnPhone("Сообщение на телефон");

$petya->notify("Вам нет 18 лет, пожалуйста покиньте сайт<br />");
$petya->notifyOnEmail("Сообщение на почту");
$petya->notifyOnPhone("Сообщение на телефон");
