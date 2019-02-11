<?php
include 'db.php';
session_start();

if(isset($_GET["id"])){
	
	$pro_id = preg_replace('#[^0-9]#i', '', $_GET['id']);

	$sql = "SELECT * FROM products WHERE product_id= '$pro_id' LIMIT 1";
    $run_query = mysqli_query($con,$sql);
    
    if (mysqli_num_rows($run_query) > 0){
	while($row = mysqli_fetch_array($run_query)){
			$product_image = $row["product_image"];
			$product_cat = $row["product_cat"];
            $product_title = $row["product_title"];
            $product_price = $row["product_price"];
            $product_desc = $row["product_desc"];
            $product_keywords = $row["product_keywords"];
            
        }
    } else {
        echo 'product not exist in database';
        exit();
    } 
	
	
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $product_title; ?></title>
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
                    </ul>  
                    
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
                            <h3 class="panel-title"><?php echo $product_title; ?> </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                             
							 <div style="padding:20px;">
                                    <h3><?php echo $product_title; ?></h3>
                                    <p><img src="product_images/<?php echo $product_image; ?>" width="300" height="400" title="<?php echo $product_title; ?>" ></p>
                                    <p><b>Product Price: </b><?php echo "R".$product_price; ?></p>
                                    <p><b>Product Description: </b><?php echo $product_desc; ?></p>
                                    <p><b>Product Keywords: </b><?php echo $product_keywords; ?></p>
                                    
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