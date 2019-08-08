<?php

$items = ['where', 'is', 'my', 'money'];

$sum = 0;

for($i = 0; $i < 100; $i++) {
    if ($i % 3 == 0) {
        $randKeys = array_rand($items);
        echo $items[$randKeys] . "<br />";
    }

    if ($i % 5 == 0) {
        $sum += $i;
    }

    if (($i % 3 == 0) && ($i % 5 == 0)) {
        shuffle($items);
    }
}

var_dump($items);

echo "<br />" . $sum;



