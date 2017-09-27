<?php
    require 'connect.php';
    $accessories_query = mysqli_query($connect, 'select * from tbl_accessories');
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome, Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminops_clothes.php">Clothes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminops_shoes.php">Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br />
     <h1>Accessories Admin Panel</h1>
     <br />
     <br />

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <br />
            <br />

                <div class="row">
                    <table class="table">
                         <thead>
                            <tr>
                              <th>#</th>
                              <th>Item Name</th>
                              <th>Item Description</th>
                              <th>Item Price</th>
                              <th>Item Image</th>
                              <th>Operations</th>
                            </tr>
                          </thead>
                          <tbody> 
                            <?php while($product = mysqli_fetch_object($accessories_query)) {
                            ?>
                                <tr>
                                    <td><?php echo $product->id ?></td>
                                    <td><?php echo $product->name ?></td>
                                    <td><?php echo $product->description ?></td>
                                    <td>R<?php echo $product->price ?></td>
                                    <td><?php echo $product->image ?></td>
                                    <td>
                                        <a class="btn btn-info" onclick="launch_edit_modal('<?php echo $product->id ?>','<?php echo $product->name ?>','<?php echo $product->description ?>','<?php echo $product->price ?>')">Edit</a>
                                        <a class="btn btn-danger" href="adminops.php?action=del&cat=accessories&id=<?php echo $product->id ?>">Del</a>
                                    </td>
                                </tr>
                            <?php 
                    
                                }
                            ?>
                          </tbody>
                    </table>

                    <a class="btn btn-success" onclick="launch_add_modal()">Add Item</a>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

        <!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="edit-item-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form method="POST" action="adminops_edit.php">
                        <!-- Begin # Login Form -->
                            <div class="modal-body">
                                <div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Edit Item</span>
                                </div>
                                <br />
                                <br />
                                <input id="item_name" name="item_name" class="form-control" type="text" placeholder="Item Name" required>
                                <br />
                                <input id="item_desc" name="item_desc" class="form-control" type="text" placeholder="Item Description" required>
                                <br />
                                <input id="item_price" name="item_price" class="form-control" type="text" placeholder="Item Price" required>
                                <input id="cat" name="cat" type="hidden" value="accessories">
                                <input id="id" name="id" type="hidden" value="">
                                
                            </div>
                            <div class="modal-footer">
                                <div>
                                    <button class="btn btn-info" type="submit">Apply</a>
                                </div>
                            </div>
                        </form>
                        <!-- End # Login Form -->
                    </div>
                    <!-- End # DIV Form -->
                    
                </div>
            </div>
        </div>
        <!--End login modal-->

         <!-- BEGIN #MODAL ADD ITEM -->
        <div class="modal fade" id="add-item-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                            <form method="POST" action="adminops_add.php" enctype="multipart/form-data">
                            <!-- Begin # Login Form -->
                                <div class="modal-body">
                                    <div id="div-login-msg">
                                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-login-msg">Add Item</span>
                                    </div>
                                    <br />
                                    <br />
                                    <label for="item_name">Item Name</label>
                                    <input id="item_name" name="item_name" class="form-control" type="text" placeholder="Item Name" required>
                                    <label for="item_desc">Item Description</label>
                                    <input id="item_desc" name="item_desc" class="form-control" type="text" placeholder="Item Description" required>
                                    <label for="item_price">Item Price</label>
                                    <input id="item_price" name="item_price" class="form-control" type="text" placeholder="Item Price" required>
                                    <label for="item_img">Item Image</label> <br />
                                    <input id="item_img" name="item_img" type="file" >
                                    <input id="cat" name="cat" type="hidden" value="clothes">
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button class="btn btn-info" type="submit">Add</a>
                                    </div>
                                </div>
                            </form>
                            <!-- End # Login Form -->
                        </div>
                        <!-- End # DIV Form -->
                        
                    </div>
                </div>
        </div>
        <!--End ADD ITEM MODAL-->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Portia Siluma 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $('#edit-item-modal').modal({ show: false});
    $('#add-item-modal').modal({ show: false});
        function launch_edit_modal(id, name, description, price) {
            $('input[name="item_name"]').val(name).change();
            $('input[name="item_desc"]').val(description).change();
            $('input[name="item_price"]').val(price).change(); 
            $('input[name="id"]').val(id).change(); 

             $('#edit-item-modal').modal("show");
        }

        function launch_add_modal() {
            $('#add-item-modal').modal("show");
        }
    </script>

</body>

</html>
