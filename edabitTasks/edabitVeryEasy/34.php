<?php
/*

###  Concatenate First and Last Name into One String #

Given two strings, firstName and lastName, return a single string in the format "last, first".


concatName("First", "Last") ➞ "Last, First"
concatName("John", "Doe") ➞ "Doe, John"
concatName("Mary", "Jane") ➞ "Jane, Mary"

*/

// ================= Solution =====================

function concatName($firstName, $lastName) {
    return "$lastName, $firstName";
}

echo concatName("Mary", "Jane");

?>