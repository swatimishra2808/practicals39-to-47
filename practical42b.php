<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+': echo "Result: " . ($a + $b); break;
        case '-': echo "Result: " . ($a - $b); break;
        case '*': echo "Result: " . ($a * $b); break;
        case '/': echo "Result: " . ($a / $b); break;
        default: echo "Invalid operation!";
    }
}
?>
