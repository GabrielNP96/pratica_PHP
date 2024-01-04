<?php
/*Dado um array de inteiros,
 calcule as proporções de seus elementos que são positivos, negativos e zero.
 Imprima o valor decimal de cada fração em uma nova linha com 6 casas após a vírgula.*/

 $array = [-1,-1,0,1,1];
 function plusMinus($arr) {
    $positive = 0;
    $negative = 0;
    $zero = 0;
    foreach($arr as $value) {
        if($value < 0) {
            $negative++; 

        }else if($value > 0) {
            $positive++;

        }else {
            $zero++;
        }
    }

    function divide($num1,$arr) {
        $number = floatval($num1);
        $number = $number / count($arr);
        $number = number_format($number, 6);
        return $number;
    }

    echo $positive = divide($positive,$arr) .PHP_EOL;
    echo $negative = divide($negative,$arr) .PHP_EOL;
    echo $zero = divide($zero,$arr) .PHP_EOL;
 }

 plusMinus($array);