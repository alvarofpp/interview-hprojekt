# vagas-hprojekt

## Questão 01

```php
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
```

## Questão 02

```php
<?php

function find_most_frequent_item(array $numbers): int
{
    $numbers_count = array_count_values($numbers);

    return max($numbers_count);
}
```

## Questão 03

```php
<?php

function solution(string $value, string $endsWith): bool
{
    $lenEndsWith = strlen($endsWith);
    $lenValue = strlen($value);
    $start = $lenValue - $lenEndsWith;

    return substr($value, $start) == $endsWith;
}
```

## Questão 04

```php
<?php

function remove_duplicates(string $words): string
{
    $words_explode = explode(' ', $words);
    $words_unique = array_unique($words_explode);

    return implode(' ', $words_unique);
}
```

## Questão 05

```php
<?php

function random_numbers(int $quantity = 5): array
{
    $numbers = range(1, 9);
    shuffle($numbers);

    return array_slice($numbers, 0, $quantity);
}
```

## Questão 06

| Piloto |
| ------ |
| Kimi Raikkonen |
| Lewuis Hamilton |
| Nico Rosberg |

## Questão 08

```mysql
ALTER TABLE cadastro
ADD COLUMN ativo ENUM(0, 1) DEFAULT 0;
```
