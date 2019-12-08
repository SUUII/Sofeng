<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/fontastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/custom.css">
</head>

<body>
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">

                <!-- End banner Area -->
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-3">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/login-img.jpg" alt="">
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6" style="background-color: #0c2957;">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <center>
                                    <form method="post" class="form-validate pb-2" action="<?php echo site_url('admin/login_admin/auth'); ?>">
                                        <h2 class="form-signin-heading" style="color: white;">Login Admin</h2>
                                        <div class="form-group">
                                            <input id="username" type="text" name="username" required placeholder="ID Admin / Nim" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" required placeholder="Password" class="input-material">
                                        </div>
                                        <?php if ($this->session->flashdata('msg')) { ?>
                                            <div class="text-danger">
                                                <?php echo $this->session->flashdata('msg'); ?>
                                            </div>
                                        <?php } ?>
                                        <button class="btn" type="submit" style="background-color: #ff7f27; color: white;">Login</button>
                                    </form>
                                </center>
                                <a href="<?= base_url() ?>home" class="float-right" style="font-size: 18px; color: white;">Home</a><br>
                                <a href="<?= base_url() ?>login" class="float-right" style="font-size: 18px; color: white;">Login User</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3" style="background-color: #0c2957;">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript files-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url() ?>/assets/js/front.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?php echo base_url() ?>/assets/js/easing.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.tabs.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/mail-script.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>
</body>

</html>