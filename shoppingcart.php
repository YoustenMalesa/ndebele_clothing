<?php
    require 'cart.php';
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">eShop</h1>
                <div class="list-group">
                    <a href="shoes.php" class="list-group-item">Shoes</a>
                    <a href="index.php" class="list-group-item">Clothes</a>
                    <a href="accessories.php" class="list-group-item">Accessories</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid img-size" src="img/carousel_1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid img-size" src="img/carousel_2.jpg"  width ="900px" height="350px" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid img-size" src="img/c3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <?php 

                            $cart = NULL;
                            if(isset($_SESSION['cart'])) {
                                 $cart = unserialize(serialize($_SESSION['cart']));
                                 if(count($cart) >= 1) { 
                ?>

                <div class="row">
                    <table class="table">
                         <thead>
                            <tr>
                              <th>#</th>
                              <th>Item Name</th>
                              <th>Item Price</th>
                              <th>Item Quantity</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody> 
                        
                        <?php    
                            $total = 0;
                            for($x=0; $x < count($cart); $x++) {
                                $total += ($cart[$x]->price * $cart[$x]->quantity);
                        ?>
                                    <tr>
                                      <td><?php echo ($x + 1) ?></td>
                                      <td><?php echo $cart[$x]->name ?></td>
                                      <td>R<?php echo ($cart[$x]->price * $cart[$x]->quantity) ?></td>
                                      <td><?php echo $cart[$x]->quantity ?></td>
                                      <td><a href="cart.php?page=shoppingcart&id=0&action=remove&name=<?php echo $cart[$x]->name ?>" class="btn btn-danger">Remove</a></td>
                                    </tr>
                        <?php 
            
                            }
                           
                        ?>

                        <h5>Total Cost: R <?php echo $total?></h5>
                        <br />
                        <br />
                         </tbody>
                    </table>
                </div>
                <!-- /.row -->

                <center>
                    <a href="cart.php?page=login&action=checkout&id=0" class="btn btn-info btn-block">Checkout Items</a>
                </center>
                <?php } else { ?>

                    <br />
                    <br />
                    <center>
                        <h4 >OOPS! The cart is empty.</h4>
                    </center>
                    


                <?php  }}  ?>
                <br />
                <br />

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

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

</body>

</html>
