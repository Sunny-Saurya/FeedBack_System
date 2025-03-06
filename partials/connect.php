<?php

$con = new mysqli('localhost','root','','feedback');
if(!$con){
    die(mysqli_connect_error($con));
}
?>