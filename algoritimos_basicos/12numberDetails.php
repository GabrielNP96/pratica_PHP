<?php

/*
    Faça um algoritmo para receber um número qualquer
    e imprimir na tela se o número é par ou ímpar, positivo ou negativo, inteiro ou decimal.
*/

function numberDetails($number) {
    $details = " ";
    //verifica se é par ou impar
    if ($number /2 == 0 or is_int($number / 2)) {
        $details = "$number é um número par.\n";
    } else {
        $details = "$number é um número impar\n";
    }

    // verififica se é negativo pu positivo
    if($number > 0) {
        $details .= "$number é um número positivo.\n";
    } elseif($number < 0) {
        $details .=  "$number é número negativo.\n";
    } else {
        $details .= "$number é zero portanto é neutro.\n";
    }

    //verifica se é inteiro ou decimal.
    if(is_int($number)) {
        $details .= "$number é um número inteiro";
    } else {
        $details .= "$number é um número decimal";
    }

    return $details;
}

echo numberDetails(4.9);