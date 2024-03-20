<?php

    class Calculator {
        private $num1;
        private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function addition() {
        return $this->num1 + $this->num2;
    }

    public function subtraction() {
        return $this->num1 - $this->num2;
    }

    public function division() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error: Division by zero";
        }
    }

    public function multiplication() {
        return $this->num1 * $this->num2;
    }
}

    $calculator = new Calculator(10, 5);

        echo "--- Calculator --- <br>";

        echo "<br>Pertambahan: " . $calculator->addition() . " cm <br> ";
        echo "<br>Pengurangan: " . $calculator->subtraction() . " cm <br>";
        echo "<br>Pembagian: " . $calculator->division() . " cm <br>";
        echo "<br>Perkalian: " . $calculator->multiplication() . " cm <br>";
?>
