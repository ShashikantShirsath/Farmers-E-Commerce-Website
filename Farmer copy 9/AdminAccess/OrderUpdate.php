<?php

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $pincode = $_POST['pincode'];
  


    $UpdateData = mysqli_query($con, " UPDATE orders set name='$name', email='$email', 'address='$address'', mobile='$mobile', pincode='$pincode' WHERE id='$id'");
    if ($UpdateData) {
        echo "<script>alert('Update successfully.');window.location.href='AdminOrder.php';</script>";
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
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter your Address" name="address"
                            required value="<?php echo $row['address'] ?> ">
                    </div>
                    <div class="mb-3">
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile"
                            required value="<?php echo $row['mobile'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Pincode</label>
                        <input type="number" class="form-control" placeholder="Enter yoor pincode" name="pincode"
                            required value="<?php echo $row['pincode'] ?> ">
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