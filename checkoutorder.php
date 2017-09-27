<?php
    require 'cart.php';
    $name = $_GET['name'];
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
                        <a class="nav-link" href="index.php">eShop</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome, <?php echo $name ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br />
    <br />
    <div class="container"> 
            <br />
        <form method="post" action="pay.php">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Payment Information
                        </h4>
                    </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="card_name"><span style="color: red;">*</span> Name on Card</label>  
                    <div class="col-md-4">
                      <input id="ln" name="card_name" type="text" placeholder="Name on Card" class="form-control input-md" required="">
                    </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="card_no"><span style="color: red;">*</span> Card Number</label>  
                    <div class="col-md-4">
                      <input id="ln" name="card_no" type="text" placeholder="Card Number" class="form-control input-md" required="">
                    </div>
            </div>
            <img src="img/cc.png" style="width: 300px; height: 30px; margin-left: 5%"> <br /> <br />
            <label class="col-md-4 control-label" for="card_no">Expiry Date</label>  
            <div class="form-inline">
                 <div class="form-group">
                    <label class="col-md-6 control-label" for="month"><span style="color: red;">*</span> MM</label>  
                    <div class="col-sm-2">
                      <input id="ln" name="month" type="text" placeholder="MM" class="form-control input-md" required="" size="2">
                    </div>
                 </div>

                 <div class="form-group">
                    <label class="col-md-4 control-label" for="year"><span style="color: red;">*</span> YY</label>  
                    <div class="col-sm-2">
                      <input id="ln" name="year" type="text" placeholder="YYYY" class="form-control input-md" required="" size="2">
                    </div>
                 </div>

                 <div class="form-group">
                    <label class="col-md-4 control-label" for="year"><span style="color: red;">*</span> CSV</label>  
                    <div class="col-sm-2">
                      <input id="ln" name="year" type="text" placeholder="CSV" class="form-control input-md" required="" size="2">
                    </div>
                 </div>
            </div>

            <br />
            <div class="col-md-4">
                <button class="btn btn-success btn-block" type="submit">Pay Now</button>
            </div>
            <br />
        </form>
            <div class="col-md-4">
                 <a href="pay.php" class="btn btn-info btn-block">Pay Cash On Delivery</a>
            </div>
            

            <div class="col-md-6" style="text-align: left;"><br/>
                By submiting this order you are agreeing to our universal
                    billing agreement, and terms of service.
                    If you have any questions about our products or services please contact us
                    before placing this order. For safety reasons, we do not keep credit card information on record.
            </div>

            
    </div>

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

</body>

</html>
