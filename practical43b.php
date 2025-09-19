<?php
if (isset($_POST['lang'])) {
    echo "Your favorite programming language is: " . $_POST['lang'];
} else {
    echo "Please select an option.";
}
?>