<?php

$ism = "javohir";
$age = 21;

// echo $ism . " " . $age;
function myFunction(){
    $a  = "salom";
    return function() use ($a){
        return $a;
    };
};

$nestedFunction =  myFunction();

echo $nestedFunction();

// echo  myFunction()

?>