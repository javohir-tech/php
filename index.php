<?php declare(strict_types=1);

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

function myFunction(int $a, int $b) : int
{
return $a+$b;
}

$res = myFunction(5 ,   10);
echo $res;
?>