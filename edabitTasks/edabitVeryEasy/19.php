<?php
/*

###  Return a String as an Integer #

Create a function that takes a string and returns it as an integer.

string_int("6") ➞ 6
string_int("1000") ➞ 1000
string_int("12") ➞ 12


All numbers will be whole.
All numbers will be positive.

*/

// ================= Solution =====================

function string_int($txt) {
    return intval(abs($txt));
}

echo string_int("-6");


?>