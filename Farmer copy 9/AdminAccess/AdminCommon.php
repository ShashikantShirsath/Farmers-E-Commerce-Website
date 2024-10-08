<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

// if(!isset($_SESSION["email"]))
// {
//     echo "<script>alert('Hello'+$_SESSION[email]);</script>";
//     // header("location:../Home1.php");
// }
?>



<DOCTYPE html>
    <html>

    <head>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>

        <!--Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- style css -->
        <link rel="stylesheet" href="./Admin.css">

    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div style="background:#90ee90" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase"><i
                        class="fas fa-user-secret me-2">E-Market</i>

                </div>
                <div class="list-group list-group-flush my-3">
                    <a href="Dashboard.php"
                        class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fas fa-tachometer-alt me-2"></i>Home</a>
                    <a href="AddProduct.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-project-diagram me-2"></i>Products</a>
                    <a href="AdminOrder.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-project-diagram me-2"></i>Orders</a>
                    <a href="../logout.php"
                        class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>Logout</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i>

                                    <!-- Admin Username Display In Below Coding -->

                                    <?php
                                    session_start();

                                    if (isset($_SESSION['email'])) {
                                        echo $_SESSION['email'];
                                    }
                                    ?>

                                    <!-- Admin Username Display Coding End Here.-->

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="margin-left:42%">
                                    <li><a class="dropdown-item" href="#" name="Profile"onclick="alert('Under Development');">Profile</a></li>
                                    <li><a class="dropdown-item" href="#" name="Setting"onclick="alert('Under Development');">Settings</a></li>
                                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>

                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div
                                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <?php

                                    $User_query = "SELECT * FROM product";
                                    $User_query_run = mysqli_query($con, $User_query);

                                    if ($User_total = mysqli_num_rows($User_query_run)) {
                                        echo '<h3 class="fs-2">' . $User_total . '</h3>';
                                    } else {
                                        echo '<h3 class="fs-2">No Data Found!</h3>';
                                    }

                                    ?>
                                    <p class="fs-5">Products</p>
                                </div>
                                <i
                                    class="fa-solid fa-bag-shopping fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <?php

                                    // include '../serverdata.php';
                                    
                                    $User_query = "SELECT * FROM registration";
                                    $User_query_run = mysqli_query($con, $User_query);

                                    if ($User_total = mysqli_num_rows($User_query_run)) {
                                        echo '<h3 class="fs-2">' . $User_total . '</h3>';
                                    } else {
                                        echo '<h3 class="fs-2">No Data Found!</h3>';
                                    }
                                    ?>
                                    <!-- <h3 class="fs-2">4920</h3> -->
                                    <p class="fs-5">Users</p>
                                </div>
                                <i class="fa-solid fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">3899</h3>
                                    <p class="fs-5">Delivery</p>
                                </div>
                                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">%25</h3>
                                    <p class="fs-5">Increase</p>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    </div>