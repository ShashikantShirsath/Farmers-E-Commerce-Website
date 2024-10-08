<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $UpdateData = mysqli_query($con, " UPDATE registration set name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'");
    if ($UpdateData) {
        echo "<script>alert('Update successfully.');window.location.href='Dashboard.php';</script>";
    } else {
        echo "<script>alert('Update is not successfully.')</script>";
    }
}

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

        <form method="POST" id="UpdateForm" class="UpdateForm">


            <?php

            $id = $_GET['id'];
            $query = mysqli_query($con, "SELECT * FROM registration WHERE id = '$id' ");
            while ($row = mysqli_fetch_array($query)) {



                ?>
                <h4 style="padding:4% 0% 0% 30%;">User Details Update Form</h4>
                <div class="userInsertForm" style="padding: 6% 25% 6% 25%;">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" required
                            value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" required
                            value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter your mobile number" pattern="[0-9]{10}"tittle="1234567890"name="mobile"
                            required value="<?php echo $row['mobile'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" name="password"
                            required value="<?php echo $row['password'] ?> ">
                    </div>
                <?php } ?>

                <button type="submit" class="btn btn-success" name="Update" style="width:45%;margin-left:20%;">Update</button>
                </div>
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