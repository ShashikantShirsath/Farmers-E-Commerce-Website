<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

?>

<DOCTYPE html>

    <head>


    </head>

    <body>

        <!-- AdminCommon Files -->

        <?php

        include('AdminCommon.php');

        ?>

        <!-- AdminCommon Files -->



        <!--  User details Insert Form -->

        <?php

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $name = $_POST['name'];
        //     $email = $_POST['email'];
        //     $mobile = $_POST['mobile'];
        //     $password = $_POST['password'];

        //     $Insert = mysqli_query($con, "INSERT INTO registration (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')");
        //     if ($Insert) {
        //         echo "<script>alert('User Added Successfully.');window.location.href='Dashboard.php';</script>";
        //     } else {
        //         echo "<script>alert('Insert not inserted.')</script>";
        //     }
        // }

        if (isset($_POST['Insert'])) {

            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
              echo '<script> alert("please fill all field !");window.location="InsertForm.php";  </script>';
          
            } else {
          
              $name = $_POST['name'];
              $email = $_POST['email'];
              $pass = ($_POST['password']);
              $mobile = $_POST['mobile'];
          
          
              $check = "SELECT * FROM registration WHERE email ='$email'";
              $result = mysqli_query($con, $check);
              $count = mysqli_num_rows($result);
          
              if ($count > 0) {
          
                echo '<script> alert("Sorry this email is already exist , please enter unique email!");window.location="Dashboard.php";  </script>';
          
              } else {
          
                $sql = "INSERT INTO registration(name,email,password,mobile) VALUES('$name','$email','$pass','$mobile')";
          
                if (mysqli_query($con, $sql)) {
          
                  echo '<script> alert("Register Successful , please login!");window.location="Dashboard.php";  </script>';
          
                } else {
          
                  echo '<script> alert("Error !"); </script>';
          
                }
          
              }
            }
          }

        ?>

        <form method="POST" id="UpdateForm" class="UpdateForm">
            <h4 style="padding:4% 0% 0% 30%;">User Details Insert Form</h4>
            <div class="userInsertForm"style="padding: 6% 25% 6% 25%;">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
                </div>
                <div class="mb-3">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" pattern="[0-9]{10}" tittle="1234567890" placeholder="Enter your mobile number" name="mobile"
                        required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password"
                        required>
                </div>

                <button type="submit" class="btn btn-success" name="Insert"style="width:45%;margin-left: 20%;">Add</button>
            <div>
        </form>


        </div>
        </div>
        </div>
        <!-- /#page-content-wrapper -->

        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");

            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>
    </body>

    </html>