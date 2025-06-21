<?php

// $cars = array("volvo", "ferrari", "chevrolet");

// var_dump($cars);
// echo($cars[0])
// array_push($cars,"bmw");
// foreach ($cars as $x) {
//     echo $x . '<br>';
// }

$person = array("name" => "Javohir", "age" => 21, "adress" => "Toshkent");
// var_dump($person)
// echo $person['name']
foreach ($person as $key => $value) {
    echo $key. " : " . $value . "<br>";
}

?>