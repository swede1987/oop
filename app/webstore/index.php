<?php
namespace App\Webstore;

require_once(__DIR__ . "/User.php");

$vasya = new User("Ivanov", "1@ya.ru", NULL, NULL, 89093491159);

$vasya->notifyOnEmail("Привет");
$vasya->notifyOnPhone("Пока");