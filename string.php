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

$name = "Jan";
$username = $name . " Kowalski"; // konkatenacja zmiennych
echo($username . "<br>"); // wyświetla "Jan Kowalski"

$usernameLen = strlen($username). "<br>"; // funkcja strlen() zwraca długość łańcucha znaków
echo($usernameLen);

$num = 12.456;
echo("Wartość zmiennej num to: ".$num. "<br>"); // wyświetla wartość zmiennej num
echo("Wartość zmiennej num to: $num w naszym programie. <br>"); // wyświetla wartość zmiennej num
echo("Test łańcucha". "<br>"); // wyświetla "Test łańcucha"
echo("Test \" łańcucha");

?>

</body>
</html>
