<?php
/*

###  Find the Amount of Potatoes #

Create a function to return the amount of potatoes there are in a string.


potatoes("potato") ➞ 1
potatoes("potatopotato") ➞ 2
potatoes("potatoapple") ➞ 1

*/

// ================= Solution =====================

function potatoes($str) {
    $pattern = "/potato/i";
    preg_match_all($pattern, $str, $result);
    return count($result[0]);
}


echo potatoes("potato");



?>