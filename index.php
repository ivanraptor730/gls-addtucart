<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Addtucart</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Free-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">Addtucart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"
                            onclick="show_cart();">
                            <i class="fa fa-shopping-cart"></i> Cart <input type="text" id="cart_items" style="width:40px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <div id="alertmsg" class="alert alert-success my-2"></div>

            <div class="col-lg-12 mt-5">

                <div id="item_div" class="card-group">
                    <div class="card card-body items" style="width: 18rem;" id="item1">
                        <img src="assets/img/sm-g950.jpg">
                        <p class="card-title">Samsung Galaxy S8</p>
                        <p class="card-text font-weight-bold">PHP 9500</p>

                        <input type="hidden" id="item1_name" value="Samsung Galaxy S8">
                        <input type="hidden" id="item1_price" value="PHP 9500">

                        <input type="button" class="btn btn-success" value="Add to Cart" onclick="cart('item1')">
                    </div>

                    <div class="card card-body items" style="width: 18rem;" id="item2">
                        <img src="assets/img/sm-g935.jpg">
                        <p class="card-title">Samsung Galaxy S7 edge</p>
                        <p class="card-text font-weight-bold">PHP 7500</p>

                        <input type="hidden" id="item2_name" value="Samsung Galaxy S7 edge">
                        <input type="hidden" id="item2_price" value="PHP 7500">

                        <input type="button" class="btn btn-success" value="Add to Cart" onclick="cart('item2')">
                    </div>

                    <div class="card card-body items" style="width: 18rem;" id="item3">
                        <img src="assets/img/lg-f700.jpg">
                        <p class="card-title">LG G5</p>
                        <p class="card-text font-weight-bold">PHP 4500</p>

                        <input type="hidden" id="item3_name" value="LG G5">
                        <input type="hidden" id="item3_price" value="PHP 4500">

                        <input type="button" class="btn btn-success" value="Add to Cart" onclick="cart('item3')">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <!--data coming from cartfx.js-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Checkout</button>
                        <a href="clearcart.php" class="btn btn-danger">Clear Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Ajax-->
        <script src="assets/js/cartfx.js"></script>
</body>

</html>