<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Mavazi</title>
    <!--Fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?=base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css')?>">
    <!--Toastr css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    <!--css-->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/login.css')?>">
</head>
<body>
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="<?=base_url('assets/images/Product 2.jpg')?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="fw-bold py-3">Mavazi</h1>
                    <h4>Login to your account</h4>
                    
                    <form action="<?= base_url('auth/check');?>" method="POST" id="loginForm">
                        <?=csrf_field(); ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email" class="form-control my-3 p-3" value="<?= set_value('email')?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : ''?></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="Password" class="form-control my-3 p-3" id="new_password" value="<?= set_value('password')?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : ''?></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="login-btn" class="btn1 mt-3 mb-5">Log In</button>
                            </div>
                        </div>

                        <a href="#">Forgot Password?</a>
                        <p>Don't have an account? <a href="<?=site_url('auth/register');?>">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    


    <!--Jquery-->
    <script src="<?=base_url('assets/js/jquery-3.6.0.js')?>"></script>
    <!--Jquery validator-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <!--Toastr js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <!--Isotope js-->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!--Bootstrap js-->
    <script src="<?=base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js')?>"></script>
    <!--js-->
    <script src="<?=base_url('assets/js/script.js')?>"></script>
</body>
</html>