<?php

function get_real_floor(int $number): int
{
    if ($number < 0) {
        return $number;
    }

    if ($number == 0 || $number == 1) {
        return 0;
    }

    $floor = floor($number / 13);
    return $number - ($floor + 1);
}


$tests = [
    ['input' => 1, 'output' => 0,],
    ['input' => 0, 'output' => 0,],
    ['input' => 5, 'output' => 4,],
    ['input' => 15, 'output' => 13,],
    ['input' => -3, 'output' => -3,],
];

foreach ($tests as $test) {
    echo (get_real_floor($test['input']) == $test['output'])."<br/>";
}
