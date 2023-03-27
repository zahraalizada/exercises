<?php
/*

### Area of a Triangle  #

triArea(3, 2) ➞ 3
triArea(7, 4) ➞ 14
triArea(10, 10) ➞ 50

*/

// ================= Solution =====================

function triArea($base, $height) {
    return ($base * $height) / 2;
}

echo triArea(7,4);

?>