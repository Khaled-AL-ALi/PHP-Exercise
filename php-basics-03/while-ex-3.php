<?php

function countWord($word,$txt){
    $i=0;
    $nb=0;
    $arr=explode(" ", $txt);
    $len= count($arr);
   
    while($i<=$len){
       if($arr[$i]==$word) {$nb +=1;}
       $i++;
    }
echo $nb;
}
countWord("the","the bisi bobi the cow the")
?>