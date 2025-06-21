<?php

// $cars = array("volvo", "ferrari", "chevrolet");

// var_dump($cars);
// echo($cars[0])
// array_push($cars,"bmw");
// foreach ($cars as $x) {
//     echo $x . '<br>';
// }

// $person = array("name" => "Javohir", "age" => 21, "adress" => "Toshkent");
// // var_dump($person)
// // echo $person['name']
// foreach ($person as $key => $value) {
//     echo $key. " : " . $value . "<br>";
// }

// $cars = [];
// $cars[0] = "volvo";
// var_dump($cars);

// $myCar = [];
// $myCar["brand"] = "Chevrolet";
// var_dump($myCar);

// $myArr = [];
// $myArr[0] = "apples";
// $myArr[1] = "bananas";
// $myArr["fruit"] = "cherries";
// var_dump($myArr)

// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// echo $cars['model'];
// echo $cars['model'];
// echo $cars['model'];

// function myFunction(){
//     echo "Salom Dunyo";
// }

// // $myArr = ["volvo" , 15 , myFunction()];
// // $myArr  = array("volvo" , 15 , "myFunction");
// $myArr = array('car' => 'volvo' , 'age'=>15 , 'message' =>myFunction());

// $myArr['message']

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

foreach ($car as $x => $y) {
    echo "$x :  $y <br>";
}


?>