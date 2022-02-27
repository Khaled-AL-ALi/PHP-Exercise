<?php
function calcSum($n){
    $sum=0;
    for($i=0;$i<=$n;$i++){
        $sum +=$i;
    }
    echo $sum;
}

calcSum(3)
?>