<?php
/*

###  Sum of Evenly Divisible Numbers from a Range #

Create a function that takes three arguments $a, $b, $c and returns the sum of the numbers that are evenly divided by c from the range $a, $b inclusive.


evenlyDivisible(1, 10, 20) ➞ 0
// No number between 1 and 10 can be evenly divided by 20.
evenlyDivisible(1, 10, 2) ➞ 30
// 2 + 4 + 6 + 8 + 10 = 30
evenlyDivisible(1, 10, 3) ➞ 18
// 3 + 6 + 9 = 18

*/

// ================= Solution =====================

function evenlyDivisible($a, $b, $c) {
    $sum = 0;
    for($i=$a; $i<=$b; $i++){
        if($i % $c == 0){
          $sum +=$i;
        }
    }
    echo $sum;
}

evenlyDivisible(1, 10, 3);


?>