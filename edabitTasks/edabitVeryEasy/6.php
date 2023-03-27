<?php
/*

###  Return Something to Me! #

giveMeSomething("is better than nothing") ➞ "something is better than nothing"
giveMeSomething("Bob Jane") ➞ "something Bob Jane"
giveMeSomething("something") ➞ "something something"

*/

// ================= Solution =====================

function giveMeSomething($a) {
return "something ".$a;
}

echo giveMeSomething("is better than nothing");
?>