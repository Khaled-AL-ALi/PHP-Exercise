<?php
$n=5;
$i=0;
$j=0;
for($i=0;$i<$n;$i++){
    echo "*\n";
   
    for($j=0;$j<=$i;$j++){
        echo "*";  
    }
}
for($k=$n;$k>=0;$k--){
    echo "*\n";
   
    for($l=$k;$l>=0;$l--){
        echo "*";  
    }
}

?>