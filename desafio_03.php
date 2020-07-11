<?php

function solution(string $value, string $endsWith): bool
{
    $lenEndsWith = strlen($endsWith);
    $lenValue = strlen($value);
    $start = $lenValue - $lenEndsWith;

    return substr($value, $start) == $endsWith;
}


$tests = [
    ['input' => 'abc', 'ends' => 'bc', 'output' => true,],
    ['input' => 'abc', 'ends' => 'd', 'output' => false,],
];

foreach ($tests as $test) {
    $case = $test['input'] . ' ends with ' . $test['ends'] . ' = ';
    if (solution($test['input'], $test['ends']) == $test['output']) {
        $case .= 'OKAY';
    } else {
        $case .= 'NOT OKAY';
    }
    echo $case . "<br/>";
}
