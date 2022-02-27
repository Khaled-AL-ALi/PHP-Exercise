<?php
function GreateThen($num){
    $string;
    if($num>0 && $num<=10){$string= "less than 10";}
    else
    if($num>10 && $num<=20) {$string= "greater than 10";}
    else
    if($num>20 && $num<=30){$string= "greater than 20";}
    else
    if($num>30) {$string= "greater than 30";}
    echo $string;
}

GreateThen(8);

?>