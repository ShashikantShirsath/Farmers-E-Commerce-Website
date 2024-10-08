<?php

session_start();
session_destroy();

// echo "<script>location.href='../Home1.php';</script>";
header('location:Home1.php');
?>