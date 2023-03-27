<?php
/*

### Array of Strings to Array of Numbers  #

Create a function that takes as a parameter an array of "stringified" numbers and returns an array of numbers.

["1", "3", "3.6"] ➞ [1, 3, 3.6]


toNumberArray(["9.4", "4.2"]) ➞ [9.4, 4.2]
toNumberArray(["91", "44"]) ➞ [91, 44]
toNumberArray(["9.5", "8.8"]) ➞ [9.5, 8.8]


*/

// ================= Solution =====================

function toNumberArray($arr) {
    foreach ($arr as $i){
        echo floatval($i)."<br/>";
    }
}

toNumberArray(["9.5", "8.8"]);

?>


