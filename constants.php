<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

define("CONSTANT_TEST",12);
echo(CONSTANT_TEST);
echo("<br>");

echo(__FILE__ . "<br>"); # pełna ścieżka do pliku, w którym jest wywołany
echo(__DIR__ . "<br>"); # pełna ścieżka do katalogu, w którym jest wywołana
?>

</body>
</html>