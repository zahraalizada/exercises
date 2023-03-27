<?php
/*

###  Sum of Cubes #

Create a function that takes a positive integer $n, and returns the sum of all the cubed values from 1 to $n.
For example, if $n is 3:

sumCubes(3) ➞ 36
1 ** 3 + 2 ** 3 + 3 ** 3 = 36


sumCubes(7) ➞ 784
sumCubes(8) ➞ 1296
sumCubes(9) ➞ 2025


*/

// ================= Solution =====================

function sumCubes($n) {
    $sum = 0;
    for($i=1; $i < $n+1; $i++){
        $sum += $i ** 3;
    }
    echo $sum;

}
sumCubes(7);



?>