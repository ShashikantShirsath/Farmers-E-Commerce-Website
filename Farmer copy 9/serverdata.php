<!-- Student Registration Start -->
<?php
// if (!isset($_SESSION)) {
//   session_start();
 
// }

$con = mysqli_connect('localhost', 'root', '', 'farmer1');

if (isset($_POST['Register'])) {

  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
    echo '<script> alert("please fill all field !");window.location="Home1.php";  </script>';

  } else {

    $Sname = $_POST['name'];
    $Semail = $_POST['email'];
    $Spass = ($_POST['password']);
    $mobile = $_POST['mobile'];


    $check = "SELECT * FROM registration WHERE email ='$Semail'";
    $result = mysqli_query($con, $check);
    $count = mysqli_num_rows($result);

    if ($count > 0) {

      echo '<script> alert("Sorry this email is already exist , please enter unique email!");window.location="Home1.php";  </script>';

    } else {

      $sql = "INSERT INTO registration(name,email,password,mobile) VALUES('$Sname','$Semail','$Spass','$mobile')";

      if (mysqli_query($con, $sql)) {

        echo '<script> alert("Register Successful , please login!");window.location="Home1.php";  </script>';

      } else {

        echo '<script> alert("Error !"); </script>';

      }

    }
  }
}





// Check user logined or not

if (!isset($_SESSION)) {
  session_start();
 
}

// User login and Admin Login

session_start();

if (isset($_POST['Login'])) {     //($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $log = "SELECT * FROM  registration WHERE email='" . $email . "' AND password='" . $password . "' ";

  $result1 = mysqli_query($con, $log);

  $row = mysqli_fetch_array($result1);

  if ($row["usertype"] == "user") {

    $_SESSION["email"] = $email;

    echo "<script>
                    alert('user' + ' Login Successful.');
                    window.location.href='Home1.php';
                    </script>";
  } elseif ($row["usertype"] == "admin") {
    $_SESSION["email"] = $email;

    echo "<script>
                    alert('admin' + ' Login Successful.');
                    window.location.href='./AdminAccess/Dashboard.php';
                    </script>";
  } else {
    echo "<script>
                    alert('Incorrect username or password');
                    window.location.href='Home1.php';
                    </script>";
  }
}




//  Login Verifiaction start

// if(!isset($_SESSION['is_login']))
// {

//   if(isset($_POST['Login']))
//    {

//       if(empty($_POST['email']) || empty($_POST['password']))
//        {
//            echo'<script> alert("please fill the form!"); </script>';

//        }
//       else
//        {

//           $Semail=$_POST['email'];
//           $Spass=$_POST['password'];

//           $sel="SELECT * from  registration Where email='$Semail' and password='$Spass'";
//           $result=mysqli_query($con,$sel);
//           $row = mysqli_fetch_array($result);
//           $count = mysqli_num_rows($result);


//         if($count == 1) {
//            $_SESSION['is_login'] =  true;           
//             $_SESSION['email'] = $Semail;

//             echo "<script>
//               alert('$_SESSION[email]' + ' Login Successful.');
//               window.location.href='Home1.php';
//               </script>";

//           }
//         else
//          {
//           echo'<script> alert("Incorrect username or password!");window.location="Home1.php"; </script>';

//          }

//       }
//     }
//   }

?>