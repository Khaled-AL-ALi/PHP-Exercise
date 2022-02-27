<?php
function isPrime($nb){
$n = 0;

for($i = 2; $i < $nb; $i++) {
  if($nb % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){echo " $nb is a prime number.";} 
else {echo " $nb is not a prime number.";}

}
isPrime(4)
?>