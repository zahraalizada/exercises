<?php
/*

### Basic Variable Assignment  #

A student learning PHP was trying to make a function. His code should concatenate a passed string name with string "Edabit" and store it in a variable called result. He needs your help to fix this code.


nameString("Mubashir") ➞ "MubashirEdabit"
nameString("Matt") ➞ "MattEdabit"
nameString("PHP") ➞ "PHPEdabit"



*/

// ================= Solution =====================

function nameString($name){
    $b = "Edabit";
    $result = $name.$b;
    return $result;
}

echo nameString("Matt");

?>