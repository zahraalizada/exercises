<?php
/*

### Is the String Empty?  #


isEmpty("") ➞ true
isEmpty(" ") ➞ false
isEmpty("a") ➞ false



*/

// ================= Solution =====================

function isEmpty($str) {

    if( strlen($str) === 0){
        return "true";
    } else{
        return "false";
    }

}

echo isEmpty("a");
?>