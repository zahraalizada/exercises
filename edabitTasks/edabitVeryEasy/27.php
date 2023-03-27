<?php
/*

### Multiple of 100  #

divisible(1) ➞ false
divisible(1000) ➞ true
divisible(100) ➞ true


*/

// ================= Solution =====================

function divisible($num) {
    if($num%100 === 0){
        return true." true";
    } else{
        return false." false";
    }
}

echo divisible(1000);
?>