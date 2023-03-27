<?php
/*

###  Find the Perimeter of a Rectangle #

Create a function that takes $length and $width and finds the perimeter of a rectangle.


findPerimeter(6, 7) ➞ 26
findPerimeter(20, 10) ➞ 60
findPerimeter(2, 9) ➞ 22
*/

// ================= Solution =====================

function findPerimeter($length, $width) {
    return ($length + $width) * 2;
}

echo findPerimeter(2, 9);
?>