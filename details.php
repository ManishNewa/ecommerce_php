<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ecommerce Website</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <!-- <link rel="stylesheet" type="text/css" href="/bootstrap/dist/css/bootstrap.min.css"> -->

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/shop.css">
    

  </head>
  <body>
    <!-- Top Starts -->
    <div id="top">
        <!-- Main Container starts -->
        <div class="container">
            <!-- Row Starts  -->
            <div class="row">
                <!-- Col md 6 Offer Starts -->
                <div class="col-md-6 offer"> 
                    <a href="javascript:;" class="btn btn-success btn-sm">Welcome : Guest</a>
                    <a href="javascript:;" class="text-light">
                        Shopping Cart Total Price: $100, Total Items 2
                    </a>
                </div>
                <!-- Col md 6 Ends -->                

                <!-- Col md 6 starts -->
                <div class="col-md-6"><!-- Menu Starts -->
                    <ul class="menu">
                        <li class="px-2">
                            <a href="customer_register.php">Register</a>
                        </li>                       
                        <li class="px-2 border-left">
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="px-2 border-left">
                            <a href="cart.php">Go to Cart</a>
                        </li>                       
                        <li class="px-2 border-left">
                            <a href="checkout.php">Login</a>
                        </li>
                    </ul>
                    <!-- Menu Ends -->                  
                </div>
                <!-- Col md 6 ends -->
            </div>
            <!-- Row Ends -->
        </div>  
        <!-- Main Container Ends -->
    </div>
    <!-- Top Ends -->

    <!-- Navigation starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand pr-3" href="#">
                <i class="fab fa-accusoft fa-2x d-none d-sm-block"></i>
                <i class="fab fa-accusoft d-block d-sm-none"></i>
            </a>

            <button class="navbar-toggler ml-auto mr-3" type="button" data-toggle="collapse" data-target="#search" aria-label="Toggle navigation">
                <i class="fa fa-search"></i>
            </button>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li> 
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Shop</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">My Account</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Shopping Cart</a>
                  </li>            
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Contact Us</a>
                  </li>  
                </ul>
                <a class="btn btn-info navbar-btn" href="cart.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <button class="btn navbar-btn btn-info ml-3 border-top-1" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">
                        Toggle Search
                    </span>
                    <i class="fa fa-search"></i>
                </button>
            </div>           
        </div>
    </nav>

    <div class="row border border-2 bg-light">
        <div class="col-md-3 ml-auto mr-5 my-1">            
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" method="GET" action="results.php">
                    <div class="input-group">
                        <input class="form-control" type="text" name="user_query" placeholder="Search" required="required">

                        <span class="input-group-btn">                        
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>              
            </div>
        </div>
        <div class="col-2">
            
        </div>        
    </div>
    <!-- Navigation Ends  -->


     <!-- Content Section Starts -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb Starts -->
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Product Details
                        </li>
                    </ul>
                    <!-- Breadcrumb Ends -->
                </div>

                <!-- Sidebar Section Starts -->
                <div class="col-md-3"> 
                    <?php include "includes/sidebar.php"; ?>
                </div>
                <!-- Sidebar Section Ends -->

                <!-- Product Details Section Starts -->
                <div class="col-md-9">
                    <div class="row pb-2" id="productMain">
                        <div class="col-md-6 bg-light">
                            <!-- Product Image Starts-->
                            <div id="mainImage">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="admin/product_images/3.jpg" class="img-responsive d-inline-block h-100 w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                          <img src="/admin/product_images/wireless-charger/1.jpg" class="img-responsive d-inline-block h-100 w-100" alt="...">
                                        </div>                                        
                                        <div class="carousel-item">
                                          <img src="/admin/product_images/wireless-charger/2.jpg" class="img-responsive d-inline-block h-100 w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                          <img src="/admin/product_images/wireless-charger/3.jpg" class="img-responsive d-inline-block h-100 w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Product Image Ends -->
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <!-- Box Section Starts -->
                                <div class="box col-12">
                                    <h2 class="text-center mb-3">Wireless Phone Charger</h2>
                                    <form action="details.php" method="POST" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="row mt-2">
                                                <label class="col-md-5 control-label">Product Quantity</label>
                                                <div class="col-md-7">
                                                    <select name="product_qty" class="form-control">
                                                        <option>Select Quantity</option>
                                                    <?php
                                                       for($i = 1 ; $i < 50 ; $i++){ 
                                                     ?>
                                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php
                                                        }
                                                     ?>
                                                    </select>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-5 control-label">Product Size</label>
                                                <div class="col-md-7">
                                                    <select name="product_size" class="form-control">
                                                        <option>Select Product Size</option>
                                                        <option value="xs">XS</option>
                                                        <option value="s">S</option>
                                                        <option value="m">M</option>
                                                        <option value="l">L</option>
                                                        <option value="xl">Xl</option>
                                                    </select>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <p class="price text-center">$50</p>
                                        <p class="text-center buttons">
                                            <button class="btn btn-info" type="submit">
                                                <i class="fa fa-shopping-cart"></i> Add to Cart
                                            </button>    
                                        </p>
                                    </form>
                                </div>
                                <!-- Box Section Ends -->
                                <div class="col-12">
                                    <div class="row" id="thumbs">
                                        <div class="col-4">
                                            <a href="javascript:;" class="thumb">
                                                <img src="/admin/product_images/wireless-charger/1.jpg" class="img-responsive w-100">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="javascript:;" class="thumb">
                                                <img src="/admin/product_images/wireless-charger/2.jpg" class="img-responsive w-100">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="javascript:;" class="thumb">
                                                <img src="/admin/product_images/wireless-charger/3.jpg" class="img-responsive w-100">
                                            </a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Details Section Ends -->

            </div>
        </div>
    </div>  


    <!-- Footer Starts -->    
    <?php 
        include("includes/footer.php") ;
    ?>
    <!-- Footer Ends -->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="admin/js/carousel.js"></script>

  </body>
</html>