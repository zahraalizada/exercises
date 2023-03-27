<?php
/*

###  Divides Evenly #

Given two integers, $a and $b, return true if $a can be divided evenly by $b. Return false otherwise.

dividesEvenly(98, 7) ➞ true
// 98/7 = 14

dividesEvenly(85, 4) ➞ false
// 85/4 = 21.25


Notes
-$a will always be greater than or equal to $b.

*/

// ================= Solution =====================

function dividesEvenly($a, $b) {
    if(($a/$b)%2===0) {
        return true." true";
    } else{
        return false." false";
    }
}


echo  dividesEvenly(85, 4);
?>