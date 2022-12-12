<?php

function intToRoman($num) {
$array = 
['M' => 1000,'CM' => 900,'D' => 500,'CD' => 400,'C' => 100,'XC' => 90,'L' => 50,'XL' => 40,'X' => 10,'IX' => 9,'V' => 5,'IV' => 4,'I' => 1];
    $value = '';
    while ($num > 0) {
        foreach ($array as $romawi => $int) {
            if($num >= $int) {
                $num -= $int;
                $value .= $romawi;
                break;
            }
        }
    }
    echo $value;
}

echo intToRoman(58),"<br>", intToRoman(1994);
?>