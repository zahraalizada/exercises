<?php
/*

### Is the Number Less than or Equal to Zero?  #

lessThanOrEqualToZero(5) ➞ false
lessThanOrEqualToZero(0) ➞ true
lessThanOrEqualToZero(-2) ➞ true

*/

// ================= Solution =====================
function lessThanOrEqualToZero($num) {
    if($num <= 0){
        return  "true";
    }else{
        return "false";
    }
}

echo lessThanOrEqualToZero(0);

?>