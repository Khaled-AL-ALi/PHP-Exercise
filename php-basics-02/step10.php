<?php
function palindrome($n){
    if($n==strrev($n)){echo "this String is palindrome ";}
    else {echo "this String is not palindrome ";}
}
palindrome("madam")
?>