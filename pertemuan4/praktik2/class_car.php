<?php
    class car {

    //property
       public $brand;
       public $color;

    //method
       function getbrand() {
        return $this->brand;

       }

    }

    //Object
       $multicon = new car();
       $tesla =  new car();

    //setter
       $multicon->brand = "Rubicon";
       $tesla->brand = "Tesla";

    //Echo
       echo $multicon->getbrand();
       echo '<br><br>';
       echo $tesla->getbrand();



?>