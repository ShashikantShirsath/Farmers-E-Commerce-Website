<!-- Header -->

<?php

include('C:\xampp\htdocs\Farmer\MainInclude\Headar.php');

?>

<!-- Header end -->


<?php

if(!isset($_SESSION['email']))
{
    echo "<script>alert('Please Login before direct accessing page !');
    window.location.href='Home1.php';
    </script>";
}



include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['userName'];
    $userMail = $_POST['userMail'];
    $userPhone = $_POST['userPhone'];
    $userDisc = $_POST['userDisc'];

    $Insert = mysqli_query($conn, "INSERT INTO contact (userName,userMail,userPhone,userDisc) VALUES ('$userName','$userMail','$userPhone','$userDisc')");
    if ($Insert) {
        echo "<script>alert('Form submited successfully.');window.location.href='Home1.php';</script>";
    } else {
        echo "<script>alert('Form is not submited successfully.')</script>";
    }
}

?>


<!-- Contact us  -->

<div class="container" id="contact">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-phone"> Phone</i>
                <h6>+91 9356689459</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-envelope"> Email</i>
                <h6>shashi010602@gmail.com</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-location-dot"> Address</i>
                <h6>At Post Shirpur Dist Dhule.</h6>
            </div>
        </div>
    </div>
    <form action="" method="POST">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Name" name="userName" required>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Email" name="userMail" required>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" pattern="[0-9]{10}" title="1234567890" class="form-control form-control" placeholder="Enter mobile number" required name="userPhone"
                    style="border-radius:.375rem; background-color:white; width:100%;border: var(--bs-border-width) solid var(--bs-border-color);">
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id="" rows="5" placeholder="Message / Issue" name="userDisc"
                    required></textarea>
            </div>
            <div class="messagebtn text-center"><button type="submit" name="Send">Message</button></div>
        </div>
    </form>
</div>

<!-- Contact us  -->




<!-- Footer -->

<?php

include 'C:\xampp\htdocs\Farmer\MainInclude\Footer.php';

?>

<!-- Footer end -->