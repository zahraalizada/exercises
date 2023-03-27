<?php
/*

### Fix the Expression  #
Fix the code in the Code tab so the function returns true if and only if x is equal to 7. Try to debug code and pass all the tests.

isSeven(4) ➞ false
isSeven(9) ➞ false
isSeven(7) ➞ true

Notes
-The bug can be hard to find, so look closely!

*/

// ================= Solution =====================
function isSeven($x){
    return ($x === 7) ? true." true" : false." false";
}


echo isSeven(7);
?>