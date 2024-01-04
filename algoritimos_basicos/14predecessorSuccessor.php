<?php
/*
    Faça um algoritmo que receba um número inteiro 
    e imprima na tela o seu antecessor e o seu sucessor.
*/

$userNum = readline("Digite um número inteiro: ");
if(is_numeric($userNum) == true) {
    $userNum = intval($userNum);
} else {
    echo "Digite apenas números!" . PHP_EOL;
}


function predecessorSucessor($num) {
    if(is_int($num) == true) {
        $predecessor = $num - 1;
        $sucessor = $num + 1;
        echo "O antecessor de $num é $predecessor. \nO sucessor de $num é $sucessor." . PHP_EOL;
    } else {
        echo "Só funciono com números inteiros." . PHP_EOL;
    }
}

predecessorSucessor($userNum);
