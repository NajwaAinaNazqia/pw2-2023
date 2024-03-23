<?php

    class flowers {
        protected $name;
        protected $color; 
        protected function __construct($name, $color,)
        {
            $this->name = $name;
            $this->color = $color;
            
        }    

        protected function getinfo() {
            echo "Nama Bunga : " . $this ->name . "<br>";
            echo "Warna Bunga : " . $this ->color ."<br>";
        }

    }

    class Lavender extends flowers {
        public $fragrance;
        public $season;

        public function __construct($name, $color, $fragrance, $season)
        {
            parent::__construct($name, $color);
            $this->fragrance = $fragrance;
            $this->season = $season;
        }

        public function getinfo() 
        {
            parent::getinfo();
            echo "Aroma : " . $this -> fragrance . "<br>";
            echo "Musim : ". $this -> season ."<br>";
        }

    }

    class Lily extends flowers {
        public $othername;
        public $season;

        public function __construct($name, $color, $othername, $season)
    {
        parent::__construct($name, $color);
        $this->othername = $othername;
        $this->season = $season;
    }

    public function getinfo () {
        parent::getinfo();
        echo "Nama Lain : " . $this->othername . "<br>";
        echo "Musim : ". $this -> season ."<br>";
    }
}

class Tulip extends flowers {
    public $meaning;
    public $season;

    public function __construct($name, $color, $meaning, $season)
{
    parent::__construct($name, $color);
    $this->meaning = $meaning;
    $this->season = $season;
}

public function getinfo () {
    parent::getinfo();
    echo "Makna : " . $this->meaning . "<br>";
    echo "Musim : ". $this -> season ."<br>";
}
}




?>