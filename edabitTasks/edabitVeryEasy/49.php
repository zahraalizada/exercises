<?php
/*

###  To the Power of _____ #

Create a function that takes a base number and an exponent number and returns the calculation.


calculateExponent(5, 5) ➞ 3125
calculateExponent(10, 10) ➞ 10000000000
calculateExponent(3, 3) ➞ 27


Notes:
-All test inputs will be positive integers.
*/

// ================= Solution =====================

function calculateExponent($num, $exp) {
    return pow($num, $exp);
}


echo calculateExponent(3, 3);
?>