<?php
/*

###  Return the First Element in an Array #

getFirstValue([1, 2, 3]) ➞ 1
getFirstValue([80, 5, 100]) ➞ 80
getFirstValue([-500, 0, 50]) ➞ -500

*/

// ================= Solution =====================
$myArray = [80, 5, 100];

function getFirstValue($array) {
return $array[0];
}

echo getFirstValue($myArray);
?>