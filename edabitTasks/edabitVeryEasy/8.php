<?php
/*

###  Convert Hours into Seconds #

howManySeconds(2) ➞ 7200
howManySeconds(10) ➞ 36000
howManySeconds(24) ➞ 86400

*/

// ================= Solution =====================

function howManySeconds($hours) {
    return $hours * 3600;
}

echo howManySeconds(10);
?>