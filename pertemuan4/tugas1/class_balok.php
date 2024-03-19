<?php

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;

        public function __construct($p, $l, $t) {
            $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }

        public function getLuas() {
            $luas_permukaan = 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
            return $luas_permukaan;
        }

        public function getKeliling() {
            $keliling = 4 * ($this->panjang + $this->lebar + $this->tinggi);
            return $keliling;
        }

        public function getVolume() {
            $volume = $this->panjang * $this->lebar * $this->tinggi;
            return $volume;
        }
    }

?>