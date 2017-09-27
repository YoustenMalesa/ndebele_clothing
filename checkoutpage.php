<?php
    require 'connect.php';
    require 'cart.php';
    require 'user_access.php';

    $user_exists = false;

    if(isset($_GET['user_exists'])){
        $status = $_GET['user_exists'];
        if($status == 'true') {
             $user_exists = true;
        }else {
             $user_exists = false;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ndebele eShopping</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Ndebele Clothing</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">eShop <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shoppingcart.php?page=shoppingcart&action=do&id=0"><span class="glyphicon glyphicon-home">Cart</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="row">
 -->
    <div class="pull-right">
              

                <br />
                <br />
        <form action="usersignup.php" method="post" onsubmit="return validateForm()" name="signup" id="signup">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Customer Details</legend>

                    <?php 
                            if($user_exists) {
                    ?>
                            <div > 
                                <h6 style="color:red;">Registration failed. A user with the specified email address already exists</h6>
                            </div>
                    <?php
                            }

                    ?>

                    <!-- Text input-->
                    <div class="form-group">    
                      <label class="col-md-4 control-label" for="fn"><span style="color: red;">*</span> First name</label>  
                      <div class="col-md-8">
                      <input id="fn" name="fn" type="text" placeholder="first name" class="form-control input-md" required="">
                         
                      </div>

                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="ln"><span style="color: red;">*</span> Last name</label>  
                      <div class="col-md-8">
                      <input id="ln" name="ln" type="text" placeholder="last name" class="form-control input-md" required="">
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email"><span style="color: red;">*</span> Email</label>  
                      <div class="col-md-8">
                      <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="confirm_email"><span style="color: red;">*</span> Confirm Email</label>  
                      <div class="col-md-8">
                      <input id="email" name="confirm_email" type="email" placeholder="email" class="form-control input-md" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password"><span style="color: red;">*</span> Password</label>  
                      <div class="col-md-8">
                      <input id="email" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="confirm_password"><span style="color: red;">*</span> Confirm Password</label>  
                      <div class="col-md-8">
                      <input id="email" name="confirm_password" type="password" placeholder="Confirm password" class="form-control input-md" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="phone"><span style="color: red;">*</span> Cell Number</label>  
                      <div class="col-md-8">
                      <input id="phone" name="phone" type="text" placeholder="+27840356932" value="+27" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="add1"><span style="color: red;">*</span> Address Line 1</label>  
                      <div class="col-md-8">
                      <input id="add1" name="add1" type="text" placeholder="2462 Soshanguve Block X" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="add2"><span style="color: red;">*</span> Address Line 2</label>  
                      <div class="col-md-8">
                      <input id="add2" name="add2" type="text" placeholder="Phillip street" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="city"><span style="color: red;">*</span> City</label>  
                      <div class="col-md-8">
                      <input id="city" name="city" type="text" placeholder="Pretoria" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="zip"><span style="color: red;">*</span> Zip Code</label>  
                      <div class="col-md-2">
                      <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group col-md-2">
                        <label for="province"><span style="color: red;">*</span> Province</label>
                        <select class="form-control " id="province" name="province">
                          <option>--Select--</option>
                          <option>Limpopo</option>
                          <option>Gauteng</option>
                          <option>Kwa-zulu Natal</option>
                          <option>North West</option>
                          <option>Northern Cape</option>
                          <option>Western Cape</option>
                          <option>Eastern Cape</option>
                          <option>Free State</option>
                          <option>Mpumalanga</option>
                        </select>
                    </div>
                
                    <?php 
                            if($user_exists) {
                    ?>
                            <div > 
                                <h6 style="color:red;">Registration failed. A user with the specified email address already exists</h6>
                            </div>
                    <?php
                            }

                    ?>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="submit"></label>
                      <div class="col-md-8">
                        <button id="submit" type="submit" class="btn btn-info">Sign Up</button>
                      </div>
                    </div>

                    </fieldset>
            </form>
        </div>
                <!-- /.row -->

           <!--  </div> -->
            <!-- /.col-lg-9 -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Portia Siluma 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function validateForm() {
             var vEmail           = document.forms["signup"]["email"].value;
             var vEmailConfirm    = document.forms["signup"]["confirm_email"].value;
             var vPassword        = document.forms["signup"]["password"].value;
             var vPasswordConfirm = document.forms["signup"]["confirm_password"].value;
             var vCellNumber      = document.forms["signup"]["phone"].value;
             var vProvince        = document.forms["signup"]["province"].value;

             if(vEmail.localeCompare(vEmailConfirm) == 0) {
                alert("Email addresses do not match.");
                return false;
             }

             if(vPassword.localeCompare(vPasswordConfirm) == 0)  {
                alert("Passwords do not match.");
                return false;
             }


             if(vCellNumber.length != 12) {
                alert("Cell number is incorrect. Make sure it is 9 digits following +27");
                return false;
             }

             if(vProvince.localeCompare("--Select--") == 0) {
                alert("Please select province.");
                return false;
             }

            return true;
        }
    </script>

</body>

</html>
