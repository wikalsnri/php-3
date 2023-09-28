<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("Shaun");
echo "Name : " . $sheep->get_name() . "<br>";
echo "Legs : " . $sheep->get_legs() . "<br>";
echo "Cold blooded : " . $sheep->get_cold_blooded() . "<br><br>";

$kodok = new Frog("Buduk");
echo "Name : " . $kodok->get_name() . "<br>";
echo "Legs : " . $kodok->get_legs() . "<br>";
echo "Cold blooded : " . $kodok->get_cold_blooded() . "<br>";
echo "Jump : " . $kodok->jump() . "<br><br>";

$sungokong = new Ape("Kera Sakti");
echo "Name : " . $sungokong->get_name() . "<br>";
echo "Legs : " . $sungokong->get_legs() . "<br>";
echo "Cold blooded : " . $sungokong->get_cold_blooded() . "<br>";
echo "Yell : " . $sungokong->yell() . "<br><br>";

?>
 
</body>
</html>