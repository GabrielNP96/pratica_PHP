<?php

$candlesArr = [3, 2, 1, 3, 3];

function birthdayCakeCandles($candles){
    $max = max($candles);
    $cakeCandleCouter = 0;
    
    foreach($candles as $valor){
        if($valor == $max){
            $cakeCandleCouter++;
        }
    };

    return $cakeCandleCouter;
}

echo birthdayCakeCandles($candlesArr);