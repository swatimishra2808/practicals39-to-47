<?php
if(isset($_GET['marks'])){
    $marks=$_GET['marks'];
    if($marks>=40){
        echo "PASS(Marks=$marks)";
    }else{
        echo "FAIL (Marks=$marks)";
 }
}else{
        echo "Please enter marks.";
}

?>