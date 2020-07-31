<?php
require "animal.php";
require "Ape.php";
require "Frog.php";

$sheep = new Animal("shaun");
echo $sheep->getName(); // "shaun"
echo "<br>";
echo $sheep->getLegs(); // 2
echo $sheep->cold_blooded; // false
echo "<br>";
var_dump($sheep);
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()

//APE
$sungokong = new Ape("kera sakti");
echo "Suara sungokong yaitu " . $sungokong->yell(); // "Auooo"
echo "<br>";
var_dump($sungokong);

//FROG
$kodok = new Frog("buduk");
echo "<br>";
echo "Kodok Memiliki " . $kodok->getLeg() . " kaki";
echo "<br>";
echo "Lompat kodok adalah " . $kodok->jump(); // "hop hop"

var_dump($kodok);
