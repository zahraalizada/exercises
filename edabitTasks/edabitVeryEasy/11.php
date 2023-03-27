<?php
/*

###  Return the Remainder from Two Numbers #

There is a single operator in PHP, capable of providing the remainder of a division operation. Two numbers are passed as parameters. The first parameter divided by the second parameter will have a remainder, possibly zero. Return that value.

remainder(1, 3) ➞ 1
remainder(3, 4) ➞ 3
remainder(-9, 45) ➞ -9
remainder(5, 5) ➞ 0

*/

// ================= Solution =====================
function remainder($x, $y) {
    return $x % $y;
}
echo remainder(5, 5);

?>