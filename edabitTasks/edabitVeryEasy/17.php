<?php
/*

###  Less Than 100? #

Given two numbers, return true if the sum of both numbers is less than 100. Otherwise return false.

lessThan(22, 15) ➞ true
// 22 + 15 = 37
lessThan(83, 34) ➞ false
// 83 + 34 = 117
lessThan100(3, 77) ➞ true
*/

// ================= Solution =====================

function lessThan($a, $b) {
    if($a+$b < 100){
        return true;
    } else{
        return false;
    }
}

echo lessThan(3, 77);


?>