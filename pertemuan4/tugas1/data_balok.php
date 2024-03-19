<?php
    require_once 'class_balok.php'; 

        $balok1 = new Balok(29, 16, 7);
        $balok2 = new Balok(15, 5, 7);
        $balok3 = new Balok(10, 5, 6);
        $balok4 = new Balok(12, 4, 6);

        echo "--- Balok ---<br>";
        echo "<br>Balok 1";
        echo "<br>Luas Permukaan: " . $balok1->getLuas() . " cm";
        echo "<br>Keliling: " . $balok1->getKeliling() . " cm";
        echo "<br>Volume: " . $balok1->getVolume() . " cm <br>";

        echo "<br>Balok 2:";
        echo "<br>Luas Permukaan: " . $balok2->getLuas() . " cm";
        echo "<br>Keliling: " . $balok2->getKeliling() . " cm";
        echo "<br>Volume: " . $balok2->getVolume() . " cm <br> ";

        echo "<br>Balok 3:";
        echo "<br>Luas Permukaan: " . $balok3->getLuas() . " cm";
        echo "<br>Keliling: " . $balok3->getKeliling() . " cm";
        echo "<br>Volume: " . $balok3->getVolume() . " cm <br>";

        echo "<br>Balok 4:";
        echo "<br>Luas Permukaan: " . $balok4->getLuas() . " cm";
        echo "<br>Keliling: " . $balok4->getKeliling() . " cm";
        echo "<br>Volume: " . $balok4->getVolume() . " cm <br>";
?>
