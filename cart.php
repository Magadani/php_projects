<?php
session_start();
// redirect user to the index page when they try to load profile page without login
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
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
        
        <!-- content area -->
	<p><br/></p>
	<p><br/></p>
        
        <div class="container-fluid">
            
            <!-- alert section for product removal and update -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="cart_msg">
                        <!--Cart Message--> 
                </div>
                <div class="col-md-2"></div>
            </div>
            <!--End of the alert section-->
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Cart Checkout</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2"><b>Action</b></div>
                                <div class="col-md-2"><b>Product Image</b></div>
                                <div class="col-md-2"><b>Product Name</b></div>
                                <div class="col-md-2"><b>Quantity</b></div>
                                <div class="col-md-2"><b>Product Price in R</b></div>
                                <div class="col-md-2"><b>Total Price in R</b></div>
                            </div>
                            
                            
                            <div id="cart_checkout"></div>
                            <!--
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                        <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
                                    </div>
                                
                                </div>
                                <div class="col-md-2"><img src="product_images/game3.jpg"></div>
                                <div class="col-md-2">Product Name</div>
                                <div class="col-md-2"><input type="text" class="form-control" value="1"></div>
                                <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled ></div>
                                <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled ></div>
                            </div>
                            -->
                            <!--
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <b>Total R500000</b>
                                </div> 
                            </div>-->
                        </div>
                        <div class="panel-footer"></div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </body>
</html>