<?php
/*

###  Are the Numbers Equal? #

Create a function that returns true when num1 is equal to num2; otherwise return false.
Pay attention to the data type as well.

is_same_num(4, 8) ➞ False
is_same_num(2, 2) ➞  True
is_same_num(2, "2") ➞ False


*/

// ================= Solution =====================

function is_same_num($num1, $num2) {
    if($num1 === $num2){
        return true;
    } else{
        return false;
    }
}

echo is_same_num(4, 4);
?>