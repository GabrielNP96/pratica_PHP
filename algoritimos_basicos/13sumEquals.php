<?php
/*
    Faça um algoritmo que leia dois valores inteiros A e B, 
    se os valores de A e B forem iguais, deverá somar os dois valores, 
*/

function sumEquals($numA, $numB) {
    if($numA == $numB) {
        return $numA + $numB;
    }

    return "Números diferentes eu não vou somar os dois!!!";
}

echo sumEquals(4,4);