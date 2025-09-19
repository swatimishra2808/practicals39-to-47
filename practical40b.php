<?php
if(isset($_POST['username'])){
    $name=$_POST['username'];
    echo "Welcome,$name!";
}else{
    "Please enter your name.";
}
?>