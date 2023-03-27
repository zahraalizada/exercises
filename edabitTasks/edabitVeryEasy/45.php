<?php
/*

### Find the Largest Number in an Array  #

Create a function that takes an array of numbers. Return the largest number in the array.

findLargestNum([4, 5, 1, 3]) ➞ 5
findLargestNum([300, 200, 600, 150]) ➞ 600
findLargestNum([1000, 1001, 857, 1]) ➞ 1001


Notes:
-Expect either a positive number or zero (there are no negative numbers).
*/

// ================= Solution =====================

function findLargestNum($arr) {
    return max($arr);
}

echo findLargestNum([4, 5, 1, 3]);
?>