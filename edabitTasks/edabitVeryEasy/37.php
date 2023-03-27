<?php
/*

### Two Makes Ten  #

Create a function that takes two arguments. Both arguments are integers, a and b. Return Found if one of them is 10 or if their sum is 10. Otherwise, return Not found.


makesTen(9, 10) ➞ "Found"
makesTen(9, 9) ➞ "Not found"
makesTen(1, 9) ➞ "Found"

*/

// ================= Solution =====================

function makesTen($a, $b) {


    if($a!==$b){
        if($a+$b===10 || $a===10 || $b===10){
            return "Found";
        } else{
            return "Not found";
        }
    } else{
        return "Not found";
    }


}


echo makesTen(1, 9) ;

?>