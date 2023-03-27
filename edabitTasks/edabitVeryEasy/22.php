<?php
/*

###  Broken Bridge #

Create a function which validates whether a bridge is safe to walk on (i.e. has no gaps in it to fall through).

isSafeBridge("####") ➞ true
isSafeBridge("## ####") ➞ false
isSafeBridge("#") ➞ true

Notes
-You can expect the bridge's ends connecting it to its surrounding.

*/

// ================= Solution =====================
function isSafeBridge($str) {

       if(strrpos($str," ")){
           return true." true";
       } else{
           return false." false";
       }

}

echo isSafeBridge("aaa aaa");
?>