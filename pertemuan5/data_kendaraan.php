<?php

require_once "class_kendaraan.php";

//Object
$motor = new Motor("Motor", "Bensin", 2);
$submarine = new Submarine("Submarine", "Solar", "10000");

//Echo Motor
echo "Info Motor : " . " <br>";
$motor->getinfomotor();
echo "<br>";

//echo Motor
echo "Info Kapal Selam : " . " <br>";
$submarine->getinfosubmarine();
echo "<br>";

?>