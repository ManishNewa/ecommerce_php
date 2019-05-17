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
                        <li class="breadcrumb-item active">
                            Shop
                        </li>
                    </ul>
                    <!-- Breadcrumb Ends -->
                </div>

                <!-- Sidebar Section Starts -->
                <div class="col-lg-3 col-md-5"> 
                    <?php include "includes/sidebar.php"; ?>
                </div>
                <!-- Sidebar Section Ends -->

                <div class="col-lg-9 col-md-7">
                    <!-- Shop Heading and Title -->
                    <div class="box">
                        <h1>Shop</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>

                    <!-- Products Row Section Starts-->
                    <div class="row">

                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-9 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/3.jpg" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Wireless Phone Chargers</a></h3>
                                    <p class="price">$15</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->
                        
                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-9 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/13.png" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Face Shield</a></h3>
                                    <p class="price">$5</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->
                        
                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-9 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/4.jpg" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Phone Lenses</a></h3>
                                    <p class="price">$5</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->
                        
                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-9 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/8.jpg" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Child Wrist Leash</a></h3>
                                    <p class="price">$15</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark  btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->
                        
                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-9 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/9.jpg" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Front Facing Baby Carrier</a></h3>
                                    <p class="price">$16</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->
                        
                        <!-- Product Container Starts-->
                        <div class="col-md-4 col-sm-6 center-responsive mb-3" id="p-container">
                            <!-- Product contents Starts -->
                            <div class="product">
                                <!-- Product Image Starts -->
                                <a href="details.php">
                                    <img src="admin/product_images/10.jpg" class="img-responsive w-100 border-bottom">
                                </a>
                                <!-- Product Image Ends -->
                                
                                <!-- Product Details Starts -->
                                <div class="text">
                                    <h3><a href="details.php">Car Phone Holder</a></h3>
                                    <p class="price">$6</p>
                                    <p class="buttons">
                                        <div class="row justify-content-center"> 

                                            <a href="details.php" class="btn btn-info btn-sm mr-1">View Details</a>    

                                            <a href="cart.php" class="btn btn-dark btn-sm">
                                                <i class="fa fa-shopping-cart"></i>Add to Cart
                                            </a>     

                                        </div> 
                                    </p>
                                </div>
                                <!-- Product Details Ends -->
                            </div>
                            <!-- Product content Ends -->
                        </div>
                        <!-- Product Container Ends -->

                    </div>
                    <!-- Products Row Section Ends -->

                    <!-- Pagination for Product Section -->
                   
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="javascript:;" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="javascript:;">Next</a>
                        </li>
                    </ul>
                    
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