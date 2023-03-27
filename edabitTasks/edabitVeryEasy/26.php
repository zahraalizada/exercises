<?php
/*

### Frames Per Second  #

Create a function that returns the number of frames shown in a given number of minutes for a certain FPS.

frames(1, 1) ➞ 60
frames(10, 1) ➞ 600
frames(10, 25) ➞ 15000


Notes
-FPS stands for "frames per second" and it's the number of frames a computer screen shows every second.

*/

// ================= Solution =====================
function frames($minutes, $fps) {
    return $minutes*$fps*60;
}


echo frames(10, 25);
?>