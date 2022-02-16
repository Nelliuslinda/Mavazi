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
	<link rel="stylesheet" href="<?=base_url('assets/css/casual.css')?>">
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
    

    <br>
    <br>
    <br>
    <br>
    <br>
	<section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h4>Cat's collection</h4>
					</div>
				</div>
			</div>
			<div class="row property_gallery">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product_item">
						<div class="product_item_pic">
							<img src="<?=base_url('assets/images/cat_1.jfif')?>" alt="">
							<div class="label">New</div>
							<ul class="product_hover">
								<li><a href="#"><i class="fas fa-arrows-alt"></i></a></li>
								<li><a href="#"><i class="fas fa-heart"></i></a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product_item_text">
							<h6><a href="#">Pullneck sweater</a></h6>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="product_price">KES 2000</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product_item">
						<div class="product_item_pic">
							<img src="<?=base_url('assets/images/cat_2.jfif');?>" alt="">
							<div class="label">New</div>
							<ul class="product_hover">
								<li><a href="#"><i class="fas fa-arrows-alt"></i></a></li>
								<li><a href="#"><i class="fas fa-heart"></i></a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product_item_text">
							<h6><a href="#">Jacket</a></h6>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="product_price">KES 2000</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product_item">
						<div class="product_item_pic">
							<img src="<?=base_url('assets/images/cat_3.jpg');?>" alt="">
							<div class="label">New</div>
							<ul class="product_hover">
								<li><a href="#"><i class="fas fa-arrows-alt"></i></a></li>
								<li><a href="#"><i class="fas fa-heart"></i></a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product_item_text">
							<h6><a href="#">Polo Tshirt</a></h6>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="product_price">KES 1800</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product_item">
						<div class="product_item_pic">
							<img src="<?=base_url('assets/images/cat_4.jpeg');?>" alt="">
							<div class="label">New</div>
							<ul class="product_hover">
								<li><a href="#"><i class="fas fa-arrows-alt"></i></a></li>
								<li><a href="#"><i class="fas fa-heart"></i></a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product_item_text">
							<h6><a href="#">Overshirt</a></h6>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="product_price">KES 2000</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
        
    
				
			
			</div>

    
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
                            <a href="" class="text-white text-decoration-none text-muted"><i class="fas fa-chevron-right me-1"></i>Home</a>
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