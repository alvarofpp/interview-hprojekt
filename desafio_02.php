<?php

function find_most_frequent_item(array $numbers): int
{
    $numbers_count = array_count_values($numbers);

    return max($numbers_count);
}


$inputs = [3, -1, -1, -1, 2, 3, -1, 3, -1, 2, 4, 9, 3];
print_r(find_most_frequent_item($inputs));
