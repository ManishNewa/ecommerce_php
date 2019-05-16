<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ecommerce Website</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
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
                        <li class="breadcrumb-item active">
                            Shop
                        </li>
                    </ul>
                    <!-- Breadcrumb Ends -->
                </div>

                <!-- Sidebar Section Starts -->
                <div class="col-md-3"> 
                    <?php include "includes/sidebar.php"; ?>
                </div>
                <!-- Sidebar Section Ends -->

                <div class="col-md-9">
                    <div class="box">
                        <h1>Shop</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section Ends -->

    <!-- Footer Starts -->
    
    <?php 
        include("includes/footer.php") ;
    ?>

    <!-- Footer ENds -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="admin/js/carousel.js"></script>

  </body>
</html>