<?php
/*

###  Check if an Integer is Divisible By Five #

Create a function that returns true if an integer is evenly divisible by 5, and false otherwise.


divisibleByFive(5) ➞ true
divisibleByFive(-55) ➞ true
divisibleByFive(37) ➞ false

*/

// ================= Solution =====================

function divisibleByFive($n) {
    if($n%5 === 0){
        return true." true";
    } else{
        return false." false";
    }
}

echo divisibleByFive(25);

?>