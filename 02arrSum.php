<?php
//soma todos os números de um array
$array = [4,4,2];

function arraySum($arr){
    $sum = 0;
    foreach($arr as $valor){
        $sum += $valor;
    }
    echo $sum;
    return $sum;
}

arraySum($array);