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

function sumMyNumbers(...$x)
{
    $n = 0;
    $len = count($x);

    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }

    return $n;
}

$res = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $res

    ?>