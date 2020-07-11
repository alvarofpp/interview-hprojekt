<?php

function random_numbers(int $quantity = 5): array
{
    $numbers = range(1, 9);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}


for ($i = 0; $i < 10; $i++) {
    $unique = array_unique(random_numbers());
    echo (count($unique) == 5) . "<br/>";
}
