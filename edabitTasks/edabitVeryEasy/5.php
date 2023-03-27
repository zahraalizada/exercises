<?php
/*

###  Maximum Edge of a Triangle #

nextEdge(8, 10) ➞ 17
nextEdge(5, 7) ➞ 11
nextEdge(9, 2) ➞ 10

*/

// ================= Solution =====================
function nextEdge($side1, $side2) {
    return ($side1 + $side2) -1;
}

echo nextEdge(8,10);

?>