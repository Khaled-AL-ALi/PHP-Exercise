<?php
function sum_of_digits($nums) {
    $s = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $s += $nums[$i];
               }
      return $s;
}
echo sum_of_digits("12345")."\n";

?>