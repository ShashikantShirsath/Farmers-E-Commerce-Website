<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $Delete = mysqli_query($con, "DELETE from registration WHERE id='$id' ");

        if($Delete){
            echo "<script>alert('User Deleted Successfully.');window.location.href='Dashboard.php';</script>";
        }
        else
        {
            echo "<script>alert('User not Deleted successfully.')</script>";
        }
    }
?>