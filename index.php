<?php
$sonlar = [1, 2, 3];

foreach ($sonlar as &$son) {
    $son = $son * 2;
}
;
print_r($sonlar);
?>