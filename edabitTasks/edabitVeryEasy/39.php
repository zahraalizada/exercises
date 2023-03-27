<?php
/*

###  Recreating the abs() Function #


The abs() function returns the absolute value of a number. This means it returns a number's positive value. You can think of it as the distance away from zero.

Create a function that recreates this functionality.



absolute(-5) ➞ 5
absolute(-3.14) ➞ 3.14
absolute(250) ➞ 250


Note:
-Tests will only include valid numbers.
-Note that positive numbers will stay positive!
-Don't use the abs() function (it will defeat the purpose of the challenge).


*/

// ================= Solution =====================

function absolute($n) {
    if($n<0){
        return $n * (-1);
    } else{
        return $n;
    }
}

echo  absolute(-3.14);


?>