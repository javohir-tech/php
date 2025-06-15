<?php
function myFamily($name, ...$firstName)
{
    $txt = "";
    $len = count($firstName);
    for ($i = 0; $i < $len; $i++) {
        $txt .= $firstName[$i] . " $name " ."Hi <br>";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a ."";

?>