<!-- Header -->

<?php

include('C:\xampp\htdocs\Farmer\MainInclude\Headar.php');

?>

<!-- Header end -->


<?php 

    include('config.php');

    if($_SESSION['email']){
        $email = $_SESSION['email'];

    }else
    {
        echo "<script>location.href='profile.php'</script> "; 
    }

    $sql = "SELECT email , password FROM Registration WHERE email='$email'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $password = $row['password'];
        // $email = $row['email'];

    }

    if(isset($_REQUEST['UpdatePassword'])){
        if($_REQUEST['password'] == ""){
            echo "<script>alert('please fill all the fields')</script>";
        }
        else{
            $password = $_REQUEST['password'];
            $sql = "UPDATE registration SET password = '$password' WHERE email = '$email'";
            if($conn->query($sql) == TRUE){
                echo "<script>alert('Password Successfully Updated')</script>";
            }else
            {
                echo "<script>alert('Enable to Update.')</script>";
            }
        }
    }
?>


<div class="container-fluid" style="margin-top:10%;margin-bottom:10%;">
    <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5">
            <div class="sidebar-sticky">
                <ul class="nav flex-column"class="sidemenu">
                    <li class="nav-item">
                        <a class="nav-link" href="Profile.php"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ChangePassword.php"><i class="fas fa-key"></i> Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- start profile column -->
        <div class="col-sm-6">
            <form action="" method="POST" class="mx-5">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"name="email"id="email" class="form-control" value="<?php echo $email ?>" readonly  style="height:65%; border-radius:.375rem; 
                                                                     width:100%;border: var(--bs-border-width) solid var(--bs-border-color);">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>" style="height:65%; border-radius:.375rem; 
                                                                    background-color:white; width:100%;border: var(--bs-border-width) solid var(--bs-border-color);">
                </div>
                <button type="submit" class="btn btn-success"name="UpdatePassword"style="margin-top:1%">Update</button>
            </form>
        </div>
    </div>
</div>









<!-- Footer -->

<?php

include 'C:\xampp\htdocs\Farmer\MainInclude\Footer.php';

?>

<!-- Footer end -->