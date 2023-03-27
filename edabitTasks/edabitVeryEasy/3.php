<?php
/*

### Convert Minutes into Seconds  #

convert(5) ➞ 300
convert(3) ➞ 180
convert(2) ➞ 120

*/

// ================= Solution =====================
function convert($minutes) {
    return $minutes * 60;
}
echo convert(5);

?>