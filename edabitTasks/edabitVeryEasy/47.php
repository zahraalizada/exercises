<?php
/*

###  Stuttering Function #

Write a function that stutters a word as if someone is struggling to read it. The first two letters are repeated twice with an ellipsis ... and space after each, and then the word is pronounced with a question mark ?.



stutter("incredible") ➞ "in... in... incredible?"
stutter("enthusiastic") ➞ "en... en... enthusiastic?"
stutter("outstanding") ➞ "ou... ou... outstanding?"


Notes:
-Assume all input is in lower case and at least two characters long.

*/

// ================= Solution =====================
function stutter($word) {
    return str_repeat(substr($word,0,2)."... ",2).$word."?";
}

echo stutter("incredible");

?>