<?php
$score = 0;

if ($_POST['q1'] == "a") $score++;
if ($_POST['q2'] == "a") $score++;
if ($_POST['q3'] == "a") $score++;

echo "Your score is: $score / 3";
?>