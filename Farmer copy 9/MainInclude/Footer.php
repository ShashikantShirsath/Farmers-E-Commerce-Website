<!--Bootstrap css -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!--Bootstrap Javascript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!--Font Awesome -->
<link rel="stylesheet" href="font-6/css/all.css">

<!-- style css -->
<link rel="stylesheet" href="css\Main.css">



<!-- Registration Start -->


<div class="modal fade" id="StudRegModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                      aria-labelledby="StudRegModalLabel" aria-hidden="true">
                     <div class="modal-dialog  modal-dialog-centered">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="StudRegModalLabel">
                              <b>Registration</b>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background:none;border:none;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">
                           <form action="./serverdata.php" method="POST"style="margin-left:22%;">
                              <label>
                                  <i class="fas fa-user"></i>
                                  Username
                              </label>
                              <div>
                                  <input type="text" placeholder="Username"  name="name" />
                              </div>

                              <label>
                                  <i class="fa fa-envelope" aria-hidden="true" ></i>
                                  Email
                              </label>
                              <div>
                                  <input type="email" placeholder="Enter Email" name="email" required/>
                              </div>

                              <label>
                                  <i class="fas fa-phone"></i>
                                  Mobile No
                              </label>
                              <div>
                                  <input type="text" placeholder="Enter mobile number"name="mobile" pattern="[0-9]{10}" title="1234567890" id="mobileno" required/>
                              </div>

                              <!-- <script>
                                function validate()
                                {
                                    var mobiletxt = document.getElementById("mobileno").value;
                                    var mobileexp = /^\d{10}$/;
                                    if(mobiletxt.match(mobileexp))
                                    {
                                        return true;
                                    }else
                                    {
                                        alert("Invalid mobile number , Please enter valid mobile number");
                                        Return false;
                                    }
                                }
                              </script> -->

                              <label>
                                  <i class="fas fa-key"></i>
                                  Password
                              </label><small id="statusMgs3"></small>
                              <div>
                                  <input type="password" placeholder="Password" name="password" required />
                              </div>

                              <div>
                                  <button class="btn btn-warning" type="submit" name="Register"style="margin-top: 5%;margin-left:5%;">
                                      <!-- <i class="fas fa-lock"></i> -->
                                      Register
                                  </button>
                              </div>

                              <!-- <div class="foot">
                                  <a href="#" class="new-acc"  data-toggle="modal" data-target="#StudLoginModal">
                                  Already have a account ? 
                                          Login Now
                                  </a>
                              </div> -->
                           </form>
                           <div class="foot"style="margin-left:15%">
                                  <a href="#" class="new-acc"  data-toggle="modal">
                                  Already have a account , then  
                                          Login Now
                                  </a>
                              </div>
                        </div>
                      </div>
                    </div><br>
                 </div>
            

       
 <!-- Registration End -->



<!-- Login form start -->

            
            <div class="modal fade" id="StudLoginModal"   data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="StudLoginModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="StudLoginModalLabel">
                            <b>Login Form</b>
                          </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"style="background:none;border:none;">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       <div class="modal-body">
                          <form action="./serverdata.php" method="POST"style="margin-left:22%;">
                            <label>
                                <i class="fas fa-envelope"></i>
                                Email
                            </label>
                            <div>
                                <input type="email" placeholder="Username" name="email"required />
                            </div>

                            <label>
                                <i class="fas fa-key"></i>
                                Password
                            </label>
                            <div>
                                <input type="password" placeholder="Password" name="password" required/>
                            </div>

                            <div>
                                <button class="btn btn-warning" type="submit" name="Login"style="margin-top: 5%;">
                                    <i class="fas fa-lock"></i>
                                    Login
                                </button>
                            </div>

                            <!-- <div class="foot">
                                <a href="#" class="new-acc"  data-toggle="modal" data-target="#StudRegModal">
                                Not a member ? 
                                        Register Now
                                </a>
                            </div> -->
                            
                          </form>
                          <div class="foot"style="margin-left:15%">
                                <a href="#" class="new-acc"  data-toggle="modal">
                                If dont have an account , then  
                                        Register Now
                                </a>
                            </div>
                        </div>
                       </div>
                     </div><br>
                 </div>
            </div>
        
     
<!-- Login form start -->






<!-- -Admin login - -->
            


<!-- <div class="modal fade" id="AdminLoginModal"   data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="AdminLoginModal">
                            <b>Admin Login</b>
                          </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"style="background:none;border:none;">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       <div class="modal-body">
                          <form action="./AdminAccess/AdminSarver.php" method="POST"style="margin-left:22%;">
                            <label>
                                <i class="fas fa-envelope"></i>
                                Username
                            </label>
                            <div>
                                <input type="text" placeholder="Username" name="admin_name"required style="width: 240px;outline: none;border: 1px solid #fff;padding: 12px 20px;
                                     margin-bottom: 10px;border-radius: 20px;background: #e4e4e4;"/>
                            </div>

                            <label>
                                <i class="fas fa-key"></i>
                                Password
                            </label>
                            <div>
                                <input type="password" placeholder="Password" name="admin_password" required/>
                            </div>

                            <div>
                                <button class="btn btn-warning" type="submit" name="AdminLogin"style="margin-top: 5%;">
                                    <i class="fas fa-lock"></i>
                                    Login
                                </button>
                            </div>

                            
                            
                          </form>
                        
                        </div>
                       </div>
                     </div><br>
                 </div>
            </div> -->

<!-- -Admin login end - -->



<!-- Footer Section -->

<footer class=" text-dark pt-5 pb-1" id="End">

    <div class="container text-center text-md-left">

        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-dark"><b>FARMERS E-MARKET</b></h5>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Useful for Farmers</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Selling & Purchasing</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Good Quality of Product</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Fresh Product</a>
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-dark"><b>Products</b></h5>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> TheProviders</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Creativity</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> SourceFiles</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Bootstrap 5 alpha</a>
                </p>
            </div>
            <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-dark"><b>Userful links</b></h5>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Ypur Account</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Become an Affiliates</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Shipping Rates</a>
                </p>
                <p>
                    <a href="" class="text-dark" style="text-decoration:none;"> Help</a>
                </p>
            </div> -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-dark"><b>Contacts</b></h5>
                <p class="text-dark">
                    <i class="fa-solid fa-location-dot"></i> At Post Shirpur, Green House.
                </p>
                <p>
                    <i class="fa-sharp fa-regular fa-at"></i> <a href="mailto:shashi010602@gmail.com"
                        class="text-dark">shashi010602@gmail.com</a>
                </p>
                <p class="text-dark">
                    <i class="fa-solid fa-phone"></i> +91 9356689459
                </p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row align-irems-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-dark">Created by:
                    <a href="#" style="text-decoration:none">
                        <strong class="text-warning">Shirsath Shashikant Shirsath</strong>
                            <!-- <a class="nav-link active"  href="#"  data-toggle="modal" data-target="#AdminLoginModal">Admin Login</a> -->
                    </a>
                </p>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn floating btn-sm text-dark" style="font-size:23px;"><i
                                    class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn floating btn-sm text-dark" style="font-size:23px;"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn floating btn-sm text-dark" style="font-size:23px;"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn floating btn-sm text-dark" style="font-size:23px;"><i
                                    class="fa-brands fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
            <script type="text/javascript" scr="./js/owl.carousel.min.js" ></script>

</body>

</html>









