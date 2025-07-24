<?php

// matemetik operatorlar  || arifmetik operators
// belgilash operatorlar || assigment operators
// taqoslash operatorlari  || comparison operators 
// oshirish kamaytrish operatorlari ||  Increment/Decrement operators
// logika operatorlari || logical operators

$plastik_tolov =  true;
$naxt_tolov = false;

if($plastik_tolov xor $naxt_tolov){
    echo "tolov qabul qilindi";
}else{
    echo "ikkala yoki hech biri tanlammagan . faqat bittasini tanlaang";
}

?>