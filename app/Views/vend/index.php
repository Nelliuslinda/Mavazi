<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mavazi</title>
    <!--Fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?=base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css')?>">
    <!--css-->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
</head>
<body>
    <!--Navbar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between-align-items-center order-lg-0" href="index.php">
                <img src="<?=base_url('assets/images/MAVAZI.png')?>" alt="logo">
                <span class="text-uppercase fw-lighter ms-2">Mavazi</span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-user"></i>
                </button>

                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>

                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle = "" data-bs-target="navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-upppercase text-dark" href="<?=site_url('vend/index');?>">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Men
                    </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=site_url('vend/mencasual');?>">Casual</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/menformal');?>">Formal</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/mensports');?>">Sports</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Women
                    </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=site_url('vend/womencasual');?>">Casual</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/womenformal');?>">Formal</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/womensports');?>">Sports</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Children
                    </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=site_url('vend/childcasual');?>">Casual</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/childformal');?>">Formal</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/childsports');?>">Sports</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pets
                    </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=site_url('vend/dogs');?>">Dogs</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/cats');?>">Cats</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('vend/other');?>">Others</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-upppercase text-dark" href="<?=site_url('auth/register');?>">Sign up</a>
                    </li>

                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-upppercase text-dark" href="<?=site_url('auth/login');?>">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar end-->

    <!--Header start-->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">Best Collection</h2>
                <h1 class="text-uppercase py-2 fw-bolds text-white">New Arrivals</h1>
                <a href="#" class="btn mt-3 text-uppercase">Shop Now</a>
            </div>

            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-white">Best Prices & Offers</h2>
                <h1 class="text-uppercase py-2 fw-bolds text-white">New Arrivals</h1>
                <a href="#" class="btn mt-3 text-uppercase">Buy Now</a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </header>
    <!--Header end-->

    <!--Collection start-->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".men">Men</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".women">Women</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".pets">Pets</button>
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 women">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/womenformal.jpg');?>" class="w-100" alt="">
                           
                        </div>
                        <div class="text-center">
                            
                            <p class="text-capitalize my-1">Women's Formal Wear</p>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 women">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/women-casual.jpg');?>" class="w-100" alt="">
                           
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">Women's Casual Wear</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 women">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/women-activewear.jpg')?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">Women's Activewear</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 women">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/women-casual2.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">Women's Casual Wear</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 men">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/men-formal4.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                            
                            <p class="text-capitalize my-1">Men Formal</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 men">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/stow-kelly-bxkV36s3EnU-unsplash.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                            <p class="text-capitalize my-1">Men Casual</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 men">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/men-activewear.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                            
                            <p class="text-capitalize my-1">Men Activewear</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 men">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/men-causual4.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">Men Casual</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 pets">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/karsten-winegeart-cre553Zfmtg-unsplash.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                         
                            <p class="text-capitalize my-1">Dogs</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 pets">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/jack-dong-yJozLVBxNA0-unsplash.jpg')?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">Cats</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 pets">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/karsten-winegeart-QcwLDcfLXkk-unsplash.jpg')?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                          
                            <p class="text-capitalize my-1">Others</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 pets">
                        <div class="collection-img">
                            <img src="<?=base_url('assets/images/karsten-winegeart-BJaqPaH6AGQ-unsplash.jpg');?>" class="w-100" alt="">
                            <!-- <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span> -->
                        </div>
                        <div class="text-center">
                          
                            <p class="text-capitalize my-1">Dogs</p>
                            <!-- <span class="fw-bold"> Ksh 1500.00</span> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--Collection end-->

    <!--Special start-->
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Autumn Special Collection</h2>
            </div>

            <div class="special-list row g-0">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="<?=base_url('assets/images/autumn1.jpg')?>" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">Men's Casual Autumn Wear</p>
                        <!-- <span class="fw-bold d-block">Ksh 3000.00</span> -->
                        <a href="#" class="btn btn-primary mt-3">See more</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="<?=base_url('assets/images/autumn2.jpg');?>" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">Women's Casual Autumn Wear</p>
                        <!-- <span class="fw-bold d-block">Ksh 3000.00</span> -->
                        <a href="#" class="btn btn-primary mt-3">See more</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="<?=base_url('assets/images/autumn3.jpg');?>" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">Men's Official Autumn Wear</p>
                        <!-- <span class="fw-bold d-block">Ksh 3000.00</span> -->
                        <a href="#" class="btn btn-primary mt-3">See more</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="<?=base_url('assets/images/autumn4.jpg');?>" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">Women's Official Autumn Wear</p>
                        <a href="#" class="btn btn-primary mt-3">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Special end-->

    <!--Blogs & Offers start-->
    <section id="offers" class="py-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class="offers-content">
                    <span class="text-white">Get a discount of upto 40%</span>
                    <h2 class="mt-2 mb-4 text-white">October Fest Sale!</h2>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs and Offers end-->

    <!--About start-->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Uniquely and Proudly Made in Kenya</p>
                    <p>As Mavazi we strive for the best quality for all our clothes which are tailormade to fit all your unique tastes.
                        
                    </p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="<?=base_url('assets/images/pexels-cottonbro-6069771.jpg');?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--About end-->

    <!--Footer start-->
    <footer class="py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white" href="index.html">Mavazi</a>
                    <p class="text-white text-muted mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fa-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="<?=site_url('vend/index')?>" class="text-white text-decoration-none text-muted"><i class="fas fa-chevron-right me-1"></i>Home</a>
                        </li>

                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none text-muted"><i class="fas fa-chevron-right me-1"></i>Collection</a>
                        </li>

                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none text-muted"><i class="fas fa-chevron-right me-1"></i>Specials</a>
                        </li>

                        <li class="my-3">
                            <a href="" class="text-white text-decoration-none text-muted"><i class="fas fa-chevron-right me-1"></i>About Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Connect</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="fw-light">
                            Mavazi Store, Grd Floor, The Junction, NRB-Kenya
                        </span>
                    </div>

                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                            support@mavazi.com
                        </span>
                    </div>

                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            +254 710 010 000
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Follow Us</h5>
                    <div class="d-flex">
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-snapchat"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end-->


    <!--Jquery-->
    <script src="<?=base_url('assets/js/jquery-3.6.0.js');?>"></script>
    <!--Isotope js-->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!--Bootstrap js-->
    <script src="<?=base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js');?>"></script>
    <!--js-->
    <script src="<?=base_url('assets/js/script.js');?>"></script>
</body>
</html>