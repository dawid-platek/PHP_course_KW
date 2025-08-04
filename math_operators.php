<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

// Operatory matematyczne w PHP
$a = 10;
$b = 23;
$sum = $a + $b; // dodawanie
$diff = $b - $a; // odejmowanie
$prod = $a * $b; // mnożenie
$quot = $b / $a; // dzielenie

$result = ((($a+$b) * 2) - 5) / 3; // złożone wyrażenie matematyczne
echo ($result . "<br>"); // wyświetla wynik złożonego wyrażenia matematycznego, wyświetla 20.333333333333

echo (3 ** 3 . "<br>"); // potęgowanie, wyświetla 27
echo (40 % 12 . "<br>"); // reszta z dzielenia, wyświetla 4

$intNum = (int)$result; // rzutowanie zmiennej $result na typ całkowity
echo ($intNum . "<br>"); // wyświetla rzutowaną wartość, wyświetla 20

$floatNum = (float)$intNum; // rzutowanie zmiennej $intNum na typ zmiennoprzecinkowy
echo ($floatNum . "<br>"); // wyświetla rzutowaną wartość, wyświetla 20.0
var_dump($floatNum);

?>
</body>
</html>

