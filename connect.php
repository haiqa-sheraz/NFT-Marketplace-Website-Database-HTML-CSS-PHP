<?php
$con= mysqli_connect('localhost','root','','test');
if($con){
    echo " Connection Successful";
}
else{
    die(mysqli_error("Error" + $con));
}
?>