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

function myFamily($lastName, ...$firstName)
{
    $txt = "";
    $len = count($firstName);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt. "Hi , $firstName[$i] $lastName .<br>";
    }

    return $txt;
}

$res =  myFamily("Suvonov" , "Javohir" , "Ulug'bek" , "Zavqiddin" , "Iskandar");
echo $res


?>