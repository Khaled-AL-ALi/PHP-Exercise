<?php  
 
function IsArmstrong($n){
$sum=0;  
$i=$n;

while($i!=0)  
{  
$x=$i%10;  
$sum+=$x*$x*$x;  
$i=$i/10;  
}
 
if($n==$sum)  {  echo "$n is an Armstrong Number.";  }  
else  {  echo "$n is not an Armstrong Number.";  } 

}

IsArmstrong(153)
?> 