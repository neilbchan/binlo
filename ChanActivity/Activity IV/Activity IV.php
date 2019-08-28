<?php 

$score = 84;

echo '<h1 style="color:green"> Your score is: ' .$score.'</h1>'.'<h1 style="color: red">'.

    ($score <= 74 ? "Failed":
    ($score <= 84 ? "Good":
    ($score <= 90 ? "Satisfactory":
    ($score <= 95 ? "Very Good":
    ($score <= 100 ? "Excellent":"Not in Range"))))); '</h1>';


?>