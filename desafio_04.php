<?php

function remove_duplicates(string $words): string
{
    $words_explode = explode(' ', $words);
    $words_unique = array_unique($words_explode);

    return implode(' ', $words_unique);
}


$tests = [
    [
        'input' => 'alfa beta beta gama gama delta alfa beta beta gama gama gama delta',
        'output' => 'alfa beta gama delta',
    ],
];

foreach ($tests as $test) {
    echo (remove_duplicates($test['input']) == $test['output']) . '<br/>';
}
