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
        
        <style>
            table tr td{
                padding: 10px;
            }
        </style>
            

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
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            
                        </div>
                        <div class="panel panel-body">
                            <h1>Customer Order Details</h1><hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="product_images/game1.jpg" class="img-thumbnail" style="float: right;">
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <tr><td>Product Name </td><td><b>Batman:Black Gate</b></td></tr>
                                        <tr><td>Product Price </td><td><b>R300</b></td></tr>
                                        <tr><td>Quantity </td><td><b>3</b></td></tr>
                                        <tr><td>Payment </td><td><b>Completed</b></td></tr>
                                        <tr><td>Transaction ID </td><td><b>DJDKDJOEI378383</b></td></tr>
                                        
                                    </table>
                                </div>
                            </div>
                                
                            
                        </div>
                        <div class="panel panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
                
        </div><!-- /.container -->
        
    </body>
</html>