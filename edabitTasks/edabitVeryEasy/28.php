<?php
/*

### Using the "&&" Operator  #

Make a function using the && operator.

andCompare(true, false) ➞ false
andCompare(true, true) ➞ true
andCompare(false, true) ➞ false
andCompare(false, false) ➞ false

*/

// ================= Solution =====================
function andCompare($a, $b) {
    if($a && $b){
        return true." true";
    } else{
        return false." false";
    }
}

echo andCompare(true, true);
?>