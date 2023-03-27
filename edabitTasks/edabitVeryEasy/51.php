<?php
/*

### Reverse an Array  #

Write a function to reverse an array.


reverse([1, 2, 3, 4]) ➞ [4, 3, 2, 1]
reverse([9, 9, 2, 3, 4]) ➞ [4, 3, 2, 9, 9]
reverse([]) ➞ []

*/

// ================= Solution =====================

function myreverse($arr) {
    $newarr = [];
    array_reverse($arr);

    foreach ($arr as $i){
        $newarr[] = $i;
    }
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";


}

 echo myreverse([9, 9, 2, 3, 4]);






?>