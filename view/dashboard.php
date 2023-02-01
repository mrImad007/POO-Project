<?php
include('../Controller/show.control.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="SineMKT fornitures">
        <meta name="keywords" content="forniture, table, sopha, bed, decoration ,chair">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/logo.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

		<link rel="stylesheet" href="assets/css/dashboard.css">

        <style>
			.navbar-nav{
				margin-left: 200px;
			}
		</style>

        <title>Dash-Board</title>
    </head>
<body>
      <!-- top-area Start -->
      <div class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">            
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search">
                                <a href="#"><span class="lnr lnr-magnifier"></span></a>
                            </li><!--/.search-->
                            <li class="nav-setting">
                                <a href="../Controller/logout.control.php" title="log out"><span class="lnr lnr-cog"></span></a>
                            </li><!--/.search-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <span class="lnr lnr-cart"></span>
                                    <span class="badge badge-bg-1">2</span>
                                </a>
                                <ul class="dropdown-menu cart-list s-cate">
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">arm <br> chair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">single <br> armchair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">wooden arn <br> chair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="total">
                                        <span>Total: $0.00</span>
                                        <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                    </li>
                                </ul>
                            </li><!--/.dropdown-->
                        </ul>
                    </div><!--/.attr-nav-->
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">Immo<span >Lux</span>.</a>
                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="menu active"><a href="index.php" style="color:#616060 ;">home</a></li>
                            <li class="menu"><a href="kArrival.php">new arrival</a></li>
                            <li class="menu"><a href="kFeatures.php">features</a></li>
                            <li class="menu"><a href="cont.php">contact</a></li>
							<li class="menu"><a href="../Controller/redirection.control.php" style="color: #e99c2e ;">Dashboard</a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><br><br><!--/nav-->
            <!-- End Navigation -->
						<a href="../view/addProduct.php" style="display: flex; align-items: center;" class="theBtn">
							<button class="addBtn">Add +</button>
						</a><br><br>
                    <div class="new-container">
					<?php foreach($products as $product):?>
						<div class="products">
							
							<img class="new-image" class="forms" src="<?php echo $product['image']?>" alt="pic"><br><br>
							<div class="new-name" class="forms"><?php echo $product['name']?></div><br><br>
							<div class="new-price" class="forms"><?php echo $product['price']?></div><br><br>

							<form action="../Controller/delete.control.php" method="post">
							<input type="hidden" name="productId" value="<?php echo $product['id']?>">
            				<button type="submit" class="addBtn">delete</button>
							</form>

						<form action="../view/update.form.php" method="post">
							<input type="hidden" name="productId" value="<?php echo $product['id']?>">
							<button type="submit" class="addBtn">update</button>
						</form>

						</div><br><br>
						<?php endforeach;?>
					</div>



</body>
</html>