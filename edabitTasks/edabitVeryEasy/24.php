<?php
/*

### Number of Stickers  #

Given a Rubik's Cube with a side length of n, return the number of individual stickers that are needed to cover the whole cube.

The Rubik's cube of side length 1 has 6 stickers.
The Rubik's cube of side length 2 has 24 stickers.
The Rubik's cube of side length 3 has 54 stickers.


howManyStickers(1) ➞ 6
howManyStickers(2) ➞ 24
howManyStickers(3) ➞ 54

Notes
-Keep in mind there are 6 faces to keep track of.
-Expect only positive whole numbers.
*/

// ================= Solution =====================

function howManyStickers($n) {
    return $n*$n *6;
}

echo howManyStickers(1);
?>