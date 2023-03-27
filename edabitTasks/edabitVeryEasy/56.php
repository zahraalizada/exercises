<?php
/*

### Reverse and Capitalize  #

Create a function that takes a string of lowercase characters and returns that string reversed and in upper case.


reverseCapitalize("abc") ➞ "CBA"
reverseCapitalize("hellothere") ➞ "EREHTOLLEH"
reverseCapitalize("input") ➞ "TUPNI"


*/

// ================= Solution =====================

function reverseCapitalize($str) {
    echo strtoupper(strrev($str));
}

reverseCapitalize("input");

?>