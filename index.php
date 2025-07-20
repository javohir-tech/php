<?php

/* 
string
*/

$string = "Javohir"; // matn
$integer =  21 ; // butun son
$float = 62.5; // butun bo'lmagan son
$boolean =  true ; // true || false
$arr =  ["javohir" , 21 , 64.5 , false];
$n = null;

class MyCar {
    public $car;
    public $color ;

    public function __construct($car , $color){
        $this->car =  $car;
        $this->color =  $color;
    }

    public function message(){
        return $this->car . " color is " . $this->color;
    }
}

$message =  new MyCar("nexia" ,  "mokri");
echo $message->message()

?>