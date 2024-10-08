<?php


$conn = mysqli_connect('localhost','root','','farmer1');

if(mysqli_connect_error()){
    echo "<script>('cannot connect with database!')</script>";
    exit();
}

?>