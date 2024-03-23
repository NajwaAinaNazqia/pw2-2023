<?php

require_once "class_kasus.php";

$lavender = new Lavender("Lavender", "Ungu", "Relaksasi", "Musim Panas");
$lily = new Lily("Lili", "Putih", "Bunga Bakung", "Musim Semi");
$tulip = new Tulip("Tulip", "Pink, Merah, Putih", "Kesucian", "Musim Semi");

echo "---- My Flowers ---- <br>";
echo "<br>";
echo "Info Bunga Lavender :<br>";
$lavender->getInfo();
echo "<hr>";

echo "Info Bunga Lili :<br>";
$lily->getInfo();
echo "<hr>";

echo "Info Bunga Tulip :<br>";
$tulip->getInfo();
echo "<hr>";

?>