<?php
/*

###  Western Showdown #

Wild Roger is participating in a Western Showdown, meaning he has to draw (pull out and shoot) his gun faster than his opponent in a gun standoff.

Given two strings,$p1 and $p2, return which person drew their gun the fastest. If both are drawn at the same time, return "tie".

--------------------------------------
showdown(
  "   Bang!        ",
  "        Bang!   "
) ➞ "p1"

// p1 draws his gun sooner than p2

showdown(
  "               Bang! ",
  "             Bang!   "
) ➞ "p2"

showdown(
  "     Bang!   ",
  "     Bang!   "
) ➞ "tie"
--------------------------------------

Notes:
-Both strings are the same length.



*/

// ================= Solution =====================

function showdown($p1,$p2) {

   $val1 = strpos($p1,"Bang!");

   $val2 = strpos($p2,"Bang!");
   if($val1 < $val2){
       echo "p1";
   }elseif($val2 < $val1){
       echo "p2";
   } else{
       echo "tie";
   }
}

showdown(
    "     Bang!   ",
    "     Bang!   "
)


?>