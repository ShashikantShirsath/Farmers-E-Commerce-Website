<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farmer</title>
    <meta charset="UTF-8">
    <meta name="description" content="IE-edge">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap css -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!--Bootstrap Javascript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!--Font Awesome -->
    <link rel="stylesheet" href="../font-6/css/all.css">

    <!-- style css -->
    <link rel="stylesheet" href="../css/Main.css">
</head>

<body>

    <!-- top navbar -->
    <div class="top-navbar" style="padding: 0% 0% 0.5% 0% !important;">
        <p>WELCOME TO OUR MARKET</p>

        <!-- Login Section -->
        <div class="icons" id="LoginSection">

            <?php

            session_start();

            if (isset($_SESSION['email'])) {

                echo $_SESSION['email'];

            }
            // elseif (isset($_SESSION['adminLoginId'])) {
            //     echo "<strong>HELLO MR.</strong> ";
            //     echo $_SESSION['adminLoginId'];
            // }
            ?>

        </div>
    </div>
    <!-- top navbar -->


    <!-- Menu bar -->

    <section class="Main" id="Main">
        <section id="header">
            <nav class="navbar navbar-expand-lg bg-white Fixed-top"> <!-- Fixed-top Property leaved -->
                <div class="container">

                    <p class="navbar-brand" style="color:hsl(153, 86%, 92%);"><img src="./Images/ELogo.png"
                            class="img-fluid" style="hover:green;height:45px;" />&nbsp;
                        E-Market</p>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-align-justify navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">

                        
                            <!-- Active link code -->

                            <script type="text/javascript">
                                $(document).on('click', 'ul li', function(){
                                    $(this).addClass('active').siblings().removeClass('active')
                                })
                            </script>

                            <!-- Active link code -->


                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Home1.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                    

                            <?php
                            if (isset($_SESSION['email'])) {

                                echo '
                                    <li class="nav-item  custom-nav-item">
                                    <a class="nav-link active " href="profile.php">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item  custom-nav-item">
                                    <a class="nav-link active "  href="logout.php">Logout </a>
                                    </li>
                                ';

                            } else {
                                echo '<li class="nav-item  custom-nav-item">
                               <a class="nav-link active "  href="#"  data-toggle="modal" data-target="#StudLoginModal">Login</a>
                              </li>
                              <li class="nav-item  custom-nav-item">
                               <a class="nav-link active"  href="#"  data-toggle="modal" data-target="#StudRegModal">Signup</a>
                              </li>';

                            }
                            ?>

                            
                            <li>
                                <form class="d-flex" id="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>