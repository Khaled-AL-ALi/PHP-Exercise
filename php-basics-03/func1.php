<?php
function func1($personal_details){
foreach ( $personal_details as $key => $value )
{
echo "$key=$value\n";
}
}
func1(array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => "39", "country" => "India"))
?>