<?php
class Car
{
    public $car;
    public $model;
    public function __construct($car, $model)
    {
        $this->car = $car;
        $this->model = $model;
    }
}

$myCar = new Car("oq", "malibu");
foreach ($myCar as $x => $y) {
    echo "$x : $y <br>";
}
?>