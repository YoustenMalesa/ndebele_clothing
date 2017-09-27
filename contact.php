
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
                        <a class="nav-link" href="index.php">eShop <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">


        <div class="row">

                <div class="row">
                    
                        
                        <div class="col-lg-10">

                        <p>Email: <strong><a href="mailto:info@batshwaribamollo.co.za">info@ndebelebeauty.co.za</a></strong></p>

                        <p>Address: <strong>59A Kelvin Street<br />
                        Lynwood Glen, Pretoria 0081</strong></p>
                        </div>

                        <div class="clearfix"></div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="box">
                        <div class="col-lg-12">
                        <hr />
                        <h2 class="intro-text text-center">Contact <strong>form</strong></h2>

                        <hr />
                        <p>Whether it&#39;s a query, suggestion, business proposal, you would like clarity on our services, we would love to hear from you. Please fill in the bellow form and we will get back to you as soon as possible.</p>

                        <form name="sendMessage" role="conactForm">
                        <div class="row">
                        <div class="form-group col-lg-4"><label>Name</label> <input class="form-control" data-validation-required-message="Please enter your name." id="name" required="" type="text" /></div>

                        <div class="form-group col-lg-4"><label>Email Address</label> <input class="form-control" data-validation-required-message="Please enter your email address." id="email" required="" type="email" /></div>

                        <div class="form-group col-lg-4"><label>Phone Number</label> <input class="form-control" data-validation-required-message="Please enter your phone number." id="phone" maxlength="16" ng-model="phone" phone-input="" required="" type="tel" /></div>

                        <div class="clearfix"></div>

                        <div class="form-group col-lg-12"><label>Message</label><textarea class="form-control" data-validation-required-message="Please enter your phone number." id="message" required="" rows="6"></textarea></div>

                        <div class="form-group col-lg-12"><input name="save" type="hidden" value="contact" />
                            <a class="btn btn-info"  onclick="launch_send_mail()">Send</a>
                        </div>
                        </div>
                        </form>
                </div>
                <!-- /.row -->

                 <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="mail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                        
                            <!-- Begin # Login Form -->
                            <form id="login-form" action="#" method="POST">
                                <div class="modal-body">
                                    <div id="div-login-msg">
                                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-login-msg">Thank you for contacting us, one of our consultants will get in touch shortly.</span>
                                    </div>
                                    <br />
                                    <br />
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-block">OK</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End # Login Form -->
                            
                        </div>
                        <!-- End # DIV Form -->
                        
                    </div>
                </div>
            </div>

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
    <script type="text/javascript">
        $('#mail-modal').modal({ show: false});
        function launch_send_mail() {
            var name = $('input[id="name"]').val();
            var email = $('input[id="email"]').val();
            var cell = $('input[id="phone"]').val();
            var message = $('input[id="message"]').val();

            if(email.indexOf("@") < 0) {
                alert('Email address must contain a domain.');
                return;
            }

            if(cell.length != 10) {
                alert('Cell number must be 10 digits long');
                return;
            }

            if(name != "" && email != "" && cell != "" && message != "") {
                 $('#mail-modal').modal("show");
            }else {
                alert('Please provide all the information.');
            }
           
        }
    </script>
</body>

</html>
