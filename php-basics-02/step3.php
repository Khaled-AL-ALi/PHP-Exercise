<?php

function Swap($num1,$num2){
    $a=$num1;
    $num1=$num2;
    $num2=$a;
    echo "num1 is {$num1} , and num2 is {$num2}\n";
}
Swap(35,70)
?>