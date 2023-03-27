<?php
/*

###  Smaller String Number #

Create a function that returns the smaller number.

smallerNum("21", "44") ➞ "21"
smallerNum("1500", "1") ➞ "1"
smallerNum("5", "5") ➞ "5"


Notes
- Numbers will be represented as strings, and your output should also be a string.
- If both numbers tie, return either number.
- Numbers will be positive.
- Bonus: See if you can do this without converting to integers.

*/

// ================= Solution =====================

function smallerNum($n1, $n2) {
    return min(abs($n1), abs($n2));
}

echo smallerNum("21", "44");
?>