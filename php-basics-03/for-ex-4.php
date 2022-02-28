<?php
$n=6;
$k=0;
for($j=0;$j<2;$j++){
    echo str_repeat("*",$n);
   $k++;
   if($k>1){break;}
   
for( $i=1;$i<=$n;$i++){ 
    print_r( str_pad('*',$i,' ',STR_PAD_LEFT)."\n");

}
}
?>
