<?php

// String
// Butun son
// Float (suzuvchi nuqta raqamlari - ikki marta ham deyiladi)
// Mantiqiy
// Massiv
// Ob'ekt
// NULL
// Resurs
$string = "javohir";
$ingater = 23;
$float = 34.5;
$boolean = true | false;
$newArray = [1, 2, 3  , "salom dunyo"];
// print_r($newArray);

class Car{
    public $model;
    public $color;

    public function __construct($model, $color){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return 'my car model ' . $this->model . ", " . "my car's rangi" . " ". $this->color;
    }   
}

$myCar = new Car('nexia' , "mokri");

echo $myCar -> message()

?>