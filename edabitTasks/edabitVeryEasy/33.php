<?php
/*

###  String to Integer and Vice Versa #

toInt() : A function to convert a string to an integer.
toStr() : A function to convert an integer to a string.


toInt("77") ➞ 77
toInt("532") ➞ 532
toStr(77) ➞ "77"
toStr(532) ➞ "532"


*/

// ================= Solution =====================

function toInt($str) {
    return  intval($str);
}


function toStr($int) {
    return  strval($int);
}

echo toInt("77");
echo "<br>";
echo toStr(-77);


?>