<?php

/*Alice e Bob criaram, cada um, um problema para o HackerRank. Um revisor avalia os dois desafios,
  atribuindo pontos numa escala de 1 a 100 para três categorias: clareza do problema,
  originalidade e dificuldade.
  A classificação para o desafio de Alice é o trigêmeo a = (a[0], a[1], a[2]),
  e a classificação para o desafio de Bob é o trigêmeo b = (b[0], b[1], b [2]).
  A tarefa é encontrar seus pontos de comparação,
  comparando a[0] com b[0], a[1] com b[1] e a[2] com b[2]. Se a[i] > b[i], então Alice recebe 1 ponto.
  Se a[i] <b[i], então Bob recebe 1 ponto. Se a[i] = b[i], então nenhuma pessoa recebe ponto.
  Os pontos de comparação são o total de pontos que uma pessoa ganhou.
  Dados a e b, determine seus respectivos pontos de comparação. */

$arr1 = [0,3,4];
$arr2 = [0,4,5];
function compareTriplets($a,$b){
    $newArr = [$a,$b];
    $num1 = 0;
    $num2 = 0;
    
    for($i = 0; $i < 3; $i++){
        if($newArr[0][$i] > $newArr[1][$i]){
            $num1++;
        }else if($newArr[0][$i] < $newArr[1][$i]) {
            $num2++;
        }else {
            $num1 += 0;
            $num2 += 0; 
        }
    }
    $answerArr = [$num1, $num2];
    return $answerArr;
}

compareTriplets($arr1,$arr2);