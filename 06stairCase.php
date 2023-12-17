<?php
/*Its base and height are both equal to . It is drawn using # symbols and spaces. The last line is not preceded by any spaces.

Write a program that prints a staircase of size .

 */

function staircase($n) {
    $star = "#";
    $space = " ";
    for($i = 0; $i < $n; $i++) {
       echo str_repeat($space, $n - $i - 1) . str_repeat($star, $i + 1) . PHP_EOL;
        }
    }
staircase(6);