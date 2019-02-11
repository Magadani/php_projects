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

                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-green">
                            <h3 class="panel-title">About The Gaming Place</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row"  style="padding:5px; paragraph-spacing:2.5em;">
                                <p style="font-size: 1.25em;">
                                    You are welcome to The Gaming Place. The one-stop outlet for all gaming needs. Are you looking for gaming consoles, CDs, accessories like joysticks, memory cards? 
                                    Or you’re looking for that cheap fairly-used console, affordable enough for your unsatisfactory need? Do you need want to sell that old console or put up that game CD for sale and earn some little cash? 
                                    The Gaming Place is the right place for you our panel of sales rep will see to all your needs and fulfill your order as quickly as possible.
                                </p>
                                <p style="font-size: 1.25em;">
                                    The Gaming Place strives to be the only gaming outlet all over South Africa with our impeccable and selfless customer service, order fulfillment and return policy. We are dedicated to serving you the best. We’ll see to your gaming needs in the best possible way. 
                                    Try us today and experience service at its best.
                                </p>
                                <p style="font-size: 1.25em;">
                                    Our customers are happy with us and we are also happy seeing to their needs. 
                                    Please below to view our customer review and you too have a look at what they’re saying...
                                </p>
                                
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-heading-green">
                                        <h3 class="panel-title">Our Customer Reviews</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row"  style="padding:5px; paragraph-spacing:2.5em;">



                                            <div class="media">
                                                <div class="media-left" >
                                                    <a href="#">
                                                        <img class="media-object" src="product_images/wale.JPG" style="border-radius:10px;" alt="customer image" title="customer image" width="150" height="150">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Wale Amoo</h4>
                                                    "I got an almost new console so cheap. Now that's one a kind."
                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="product_images/amoo.JPG" style="border-radius:10px;" alt="customer image" title="customer image" width="150" height="150">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Ola Willis</h4>
                                                    "This is a good gaming site and I love everything about it. Really state of the art!"
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                       
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end of the row -->
        </div><!-- /.container -->

        <div class="row footer">
            <div class="container">
                <p><a href="index.php">The Gaming Place</a> &copy; Copyright 2017. All Rights Reserved.</p>
            </div>
        </div>

    </body>
</html>