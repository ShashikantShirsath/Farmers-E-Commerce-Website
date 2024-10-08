<?php

include('config.php');

if (isset($_REQUEST['Order'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];

    $Insert = mysqli_query($conn, "INSERT INTO orders (name,email,mobile,address,pincode) VALUES ('$name','$email','$mobile','$address','$pincode')");
    if ($Insert) {
        echo "<script>alert('Order completed successfully. you get order within 3,4 business working days');window.location.href='Home1.php';</script>";
    } else {
        echo "<script>alert('Order not completed successfully.')</script>";
    }
}

?>

<?php

include('config.php');

session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login before buying product. '); window.location.href='Home1.php'; </script>";
} else {
    
?>

    <!DOCTYPE html>

    <head>
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css\order.css">
    </head>

    <body>

        <div class="container">

            <form action=""method="POST">

                <div class="row">

                    <div class="col">

                        <h3 class="title">billing address</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" name="name" placeholder="enter you name"required>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" name="email" placeholder="example@example.com"required>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" name="address" placeholder="address"required>
                        </div>
                        <div class="inputBox">
                            <span>Mobile Number :</span>
                            <input type="text" name="mobile" pattern="[0-9]{10}" tittle="1234567890" placeholder="9356 6896 68"required>
                        </div>
                        <div class="flex">

                            <div class="inputBox">
                                <span>pincode code :</span>
                                <input type="text" name="pincode"placeholder="123 456" tittle="123 456" required>
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" value="Order Now" class="submit-btn" name="Order">

            </form>

        </div>

        </div>
        </div>
        </div>

    </body>

    </html>

    <?php
}
?>