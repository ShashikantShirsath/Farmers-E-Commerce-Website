<!-- Delete Orders -->

<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $Delete = mysqli_query($con, "DELETE from orders WHERE id='$id' ");

        if($Delete){
            echo "<script>alert('Order Deleted Successfully.');window.location.href='AdminOrder.php';</script>";
        }
        else
        {
            echo "<script>alert('Order not Deleted successfully.')</script>";
        }
    }
?>
