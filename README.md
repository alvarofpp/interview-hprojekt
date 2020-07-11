# vagas-hprojekt

Candidato: Álvaro Ferreira Pires de Paiva.

----------

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

## Questão 07

```mysql
DROP FUNCTION IF EXISTS fnValCoordenadas;
CREATE FUNCTION fnValCoordenadas(
  in_coord VARCHAR(20),
  in_tipo CHAR(1)
) RETURNS VARCHAR(20) CHARSET latin1
BEGIN
  IF (in_coord NOT REGEXP '^(-|\\+)?([0-9]+\\.[0-9]*|[0-9]*\\.[0-9]+|[0-9]+)$') THEN
    SET in_coord = NULL;
  END IF;
  RETURN in_coord;
END;

SELECT fnValCoordenadas('-3.45', 1) = -3.45;
SELECT fnValCoordenadas('+3.0', 1) = 3.0;
SELECT fnValCoordenadas('3.', 1) = 3.;
SELECT fnValCoordenadas('', 2) IS NULL;
SELECT fnValCoordenadas('Alvaro', 2) IS NULL;
SELECT fnValCoordenadas('asd.123', 2) IS NULL;
```

## Questão 08

```mysql
ALTER TABLE cadastro
ADD COLUMN ativo ENUM(0, 1) DEFAULT 0;
```

## Questão 09

`ERROR 1366 (HY000) at line 5: Incorrect decimal value: '1,234' for column 'valor' at row 2`

## Questão 10

Por se tratar de uma tabela de dados, creio então que pertenceria a um banco de dados, portanto armazenaria usando o Amazon Relational Database Service (RDS).

Se fosse uma tabela de dados simples que, por exemplo, armazenar-se constantes que praticamente não fossem alteradas (ou raramente alteradas), que seriam carregadas poucas vezes e armazenadas em alguma memória durante a execução de um sistema, poderia converter isso para um arquivo (tipo CSV) e armazenar no Amazon S3.

Dependendo de como esses dados seriam salvos e usados no sistema, serviços como o Amazon Elastic File System (EFS) poderiam ser usados.
