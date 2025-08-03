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

// Tablice w PHP
$userNames = ["Kasia", "Ania", "Marek", "Janek", 13]; // tablica indeksowana
echo($userNames[0] . "<br>"); // wyświetla "Kasia"
echo($userNames[1] . "<br>"); // wyświetla "Ania
echo($userNames[2] . "<br>"); // wyświetla "Marek"
echo($userNames[3] . "<br>"); // wyświetla "Janek
echo($userNames[4] . "<br>"); // wyświetla "13"

// Tablica asocjacyjna
$carBrandModels = [];
$carBrandModels["BMW"] = "X5";
$carBrandModels["Audi"] = "A4";
$carBrandModels["Mercedes"] = "C-Class";
$carBrandModels["Tablica wielowymiarowa"] = ["h1", "h2", "h3"];  // tablica wielowymiarowa
echo($carBrandModels["BMW"] . "<br>"); // wyświetla "X5"
echo($carBrandModels["Audi"] . "<br>"); // wyświetla "A4"
echo($carBrandModels["Mercedes"] . "<br>"); // wyświetla "C-Class"
echo($carBrandModels["Tablica wielowymiarowa"][0] . "<br>"); // wyświetla "h1"
echo($carBrandModels["Tablica wielowymiarowa"][1] . "<br>"); // wyświetla "h2"
echo($carBrandModels["Tablica wielowymiarowa"][2] . "<br>"); // wyświetla "h3"

print_r($carBrandModels);

$formatedText = print_r($carBrandModels, true);
echo("<pre> $formatedText </pre>"); // wyświetla tablicę w formacie czytelnym dla człowieka


?>




</body>
</html>

