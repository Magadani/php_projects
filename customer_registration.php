<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
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
                    <ul class="nav navbar-nav" style="top:15">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-comment"></span> About Us</a></li>
                        <li><a href="contact_us.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                        <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
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
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 The Gaming Place.</p></div>
                            </ul>
                        </li>
                        
                        <form class="navbar-form navbar-right">
                            
                            <div class="form-group">
                                <input type="email" name="username" required="required" class="form-control" placeholder="Enter email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" required="required" class="form-control" placeholder="Enter password" id="password">
                            </div>
                                <button name="submit" type="submit" class="btn btn-success" id="login">Login</button>
                        </form>

                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <!--The message from the form will display here.. -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="signup_msg">
                    <!-- Alert here -->
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading panel-heading-green">
                    <h3 class="panel-title">Customer Registration Form</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding:5px;">
                        <form method="post">
                            <div class="form-group">
                                <label for="f_name">First Name*</label>
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your first name"/>
                            </div>
                            <div class="form-group">
                                <label for="l_name">Last Name*</label>
                                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter your last name"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"/>
                            </div>
                            <div class="form-group">
                                <label for="repassword">Confirm Password*</label>
                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Enter password again"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Phone Number*</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="0801234567"/>
                            </div>
                            <div class="form-group">
                                <label for="address1">Address One*</label>
                                <input type="text" class="form-control" id="address1" name="address1" placeholder="213 Troye Street Sunnyside Pretoria"/>
                            </div>
                            <div class="form-group">
                                <label for="address2">Address Two*</label>
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="213 Troye Street Sunnyside Pretoria"/>
                            </div>
                            <input type="button" value="Register" id="signup_button" name="signup_button" class="btn btn-success btn-lg">

                        </form>

                    </div>
                </div>
            </div>

        </div><!-- /.container -->
        
        <div class="row footer">
            <div class="container">
                <p><a href="index.php">The Gaming Place</a> &copy; Copyright 2017. All Rights Reserved.</p>
            </div>
        </div>

    </body>
</html>