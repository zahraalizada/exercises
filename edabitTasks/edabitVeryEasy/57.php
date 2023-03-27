<?php
/*

###  A Simple Task #

Mubashir needs your help in a simple task.
Create a function that takes a number $n and return its decimal part.


decimalPart(1.2) ➞ 0.2
decimalPart(-3.73) ➞ 0.73
decimalPart(10) ➞ 0

*/

// ================= Solution =====================


//noqteden sonraki reqemleri gotur

function decimalPart($n) {
  echo abs($n) -  floor(abs($n));
}

decimalPart(-3.73);


?>