<?php
/*

###  Recursion: Sum #

Write a function that finds the sum of the first $n natural numbers. Make your function recursive.



sum(5) ➞ 15
// 1 + 2 + 3 + 4 + 5 = 15
sum(1) ➞ 1
sum(12) ➞ 78


Notes:
-Assume the input number is always positive.

*/

// ================= Solution =====================

function sum($n) {
    $sum = 0;
    for($i=0;$i<$n+1;$i++){
        $sum += $i;
    }
        echo $sum;
}

sum(5);

?>