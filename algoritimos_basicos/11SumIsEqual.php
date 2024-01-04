<?php

/*
    Faça um algoritmo que leia os valores de A, B, C,
    e em seguida imprima na tela a soma entre A e B é mostre se a soma é menor que C.
*/

function aBisEqualToC($a, $b, $c) {
    $sumAB = $a + $b;
    if($sumAB == $c) {
        return "A soma de $a + $b é realmente igual a $c";
    }

    return "A soma de $a + $b é $sumAB então não é igual a $c";
}

echo aBisEqualToC(7,9, 16);