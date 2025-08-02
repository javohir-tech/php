<?php

//     Indexed arrays - Arrays with a numeric index  || indexlarti raqamlardan iborat array
// Associative arrays - Arrays with named keys || indexlari kalit so'zlardan iborat array
// Multidimensional arrays - Arrays containing one or more arrays || array ichida array bolsa

//indexed Arrays
$indexedArr = [12, "salom", true, 1.2];

// foreach(indexedArr as $item){
//     echo $item ."<br>";
// }

//Associative Arrays

$AssArr = ["javohir" => 21, "ulug'bek" => 23];

// foreach ($AssArr as $key => $value) {
//     echo "$key : $value <br>";
// }

// Multidimensional Array;

$MultiArr = [
   "odamlar" => ["javohir" => 21 , "Ulug'bek" => 23],
   "new" => [13 , "hello" , true , 1.2]
];

echo $MultiArr["new"][1]

?>