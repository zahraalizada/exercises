<?php
/*

###  Return Negative  #

Create a function that takes a number as an argument and returns negative of that number. Return negative numbers without any change.

returnNegative(4) ➞ -4
returnNegative(15) ➞ -15
returnNegative(-4) ➞ -4
returnNegative(0) ➞ 0

*/

// ================= Solution =====================

function returnNegative($n) {

    if($n<=0){
        return $n;
    } else{
        return "-$n";
    }
}

echo returnNegative(0);




?>