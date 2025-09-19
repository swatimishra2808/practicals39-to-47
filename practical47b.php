<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if (empty($user) || empty($email) || empty($pass)) {
        echo "Error: All fields are required!";
    } else {
        echo "Registration Successful!<br>";
        echo "Username: $user <br>";
        echo "Email: $email <br>";
        // Don't echo password for security reasons
    }
}
?>


