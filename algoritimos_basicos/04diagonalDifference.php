<?php
/*Dada uma matriz quadrada, calcule a diferença absoluta entre as somas de suas diagonais. */

$array = [
    [1,4,8],
    [2,3,9],
    [3,4,10]
];

function diagonalDifference($arr) {
    $axisOne = 0;
    $axisTwo = 0;
    $arrReverse = array_reverse($arr);
    for($i =0; $i < count($arr); $i++) {
        $axisOne += $arr[$i][$i];
    }
    for($i = 0; $i < count($arrReverse); $i++) {
        $axisTwo += $arrReverse[$i][$i];
    }
    if($axisOne > $axisTwo) {
        return $axisOne - $axisTwo;
    } else {
        return $axisTwo - $axisOne;
    }
    
}

diagonalDifference($array);