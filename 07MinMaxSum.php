<?php

$arr = [11,45,2,77,8];

function miniMaxSum($arr) {
    $growingArr = $arr;
        sort($growingArr);
        array_pop($growingArr);
    $descendingArr = $arr;
        rsort($descendingArr);
        array_pop($descendingArr);
    
    $min = array_sum($growingArr);
    $max = array_sum($descendingArr);

    echo "{$min} {$max}";
    

}

miniMaxSum($arr);