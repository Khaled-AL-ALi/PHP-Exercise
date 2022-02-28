<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

    foreach($transactions as $value) {
        foreach($value as $k) {
            $id=$value['id'];
              $abs= $value['debit']*$value['credit']."\n";
              
        }
        echo "ID:$id => amount:$abs";
 }

?>