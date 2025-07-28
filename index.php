<?php

// matemetik operatorlar  || arifmetik operators
// belgilash operatorlar || assigment operators
// taqoslash operatorlari  || comparison operators 
// oshirish kamaytrish operatorlari ||  Increment/Decrement operators
// logika operatorlari || logical operators
// string operatorlari || string operators
// massiv operatorlari || array operators
// + ikkita massivni qo'shadi 
// == ikkita massivni bir hil kalit-qiymatlari borligini tekshiradi tartip muhim emas 
// === ikkita masivni kalit-qiymati va data type bir hil bo'lishi kerak , tartip muhim 


// $x = array( "a" => "21" , "b" => "salom");
// $y = array("a" => 21, "b" => "salom");
// // $y = array("c" => "brown" , "d"=>"yellow");


// // print_r($x+$y)

// var_dump($x === $y)

$rang = 'sabzi rang';

switch ($rang) {
    case "yashil":
        echo "rang yashilga teng";
        break;
    case "sariq":
    case "sabzi rang":
        echo "rang olov rang";
        break;
    default:
        echo "bizda bur rang yo'q";

}

?>