<?php

include "db.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Gaming Place</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/jquery2.js"></script>
        <script src="main.js"></script>
        <script src="js/bootstrap.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="product_images/header.png" width="100" height="35" style="margin-top:-5px; border-radius:3px;"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>


                        <li><a href="#" id ="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                            <!-- coding for the drop down using the jquery 2.2.2 -->
                            <ul class="dropdown-menu" style="width:400px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-3">SL.NO</div>
                                            <div class="col-md-3">Product Image</div>
                                            <div class="col-md-3">Product Name</div>
                                            <div class="col-md-3">Price in R.</div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div id="cart_product">
                                            <!--<div class="row">
                                                <div class="col-md-3">SL.NO</div>
                                                <div class="col-md-3">Product Image</div>
                                                <div class="col-md-3">Product Name</div>
                                                <div class="col-md-3">Price in R.</div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 The Gaming Place.</p></div>
                            </ul>
                        </li>

                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi, " . $_SESSION["name"]; ?></a>
                            <ul class="dropdown-menu" style="width:300px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <li><a href="cart.php" style="text-decoration: none; color: blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" style="text-decoration: none; color: blue;">Change Password</a></li>
                                        <li class="divider"></li>
                                        <li><a href="logout.php" style="text-decoration: none; color: blue;">Logout</a></li>
                                    </div>
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 The Gaming Place.</p></div>
                            </ul>
                        </li>

                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="panel panel-default panel-list">
                        <div class="panel-heading panel-heading-dark">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-search"> Search</span></h3>
                        </div>

                        <ul class="list-group">
                            <li style="list-style-type:none; margin-top:5px; margin-left:5px;"><input type="text" class="form-control" id="search"></li>
                            <li style="list-style-type:none; margin: 5px 10px 5px 120px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
                        </ul>
                    </div>

                    <div id="get_category"></div>

                    <div id="get_brand"></div>


                </div>

                <div class="col-md-8">

                    <!-- Alert display here -->
                    <div class="row">
                        <div class="col-md-12" id="product_msg">

                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-green">
                            <h3 class="panel-title">Latest Releases</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div id="get_product"></div>


                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end of the row -->
            
            <!-- Beginning of pagination-->
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <ul class="pagination" id="pageno">
                            <li><a href="#">1</a></li>
                            
                        </ul>
                        
                    </center>
                </div> 
            </div>
            <!-- end of pagination-->
        </div><!-- /.container -->

        <div class="row footer">
            <div class="container">
                <p><a href="index.php">The Gaming Place</a> &copy; Copyright 2017. All Rights Reserved.</p>
            </div>
        </div>

    </body>
</html>