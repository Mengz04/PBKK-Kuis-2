<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Store Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page" style="background-image: url(<?php echo base_url(); ?>assets/gambar/login-bg.jpg)">
      <div class="container d-flex align-items-center justify-content-center">
        <div class="form-holder has-shadow">
          
            <!-- Form Panel    -->
            <div class="col-lg-12 page-trans">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php
                        $notification = $this->session->flashdata('message');
                        if($notification != NULL)
                        {
                          echo '
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              '.$notification.'
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                          ';
                        } 
                    ?>
                  <form method="post" class="form-validate" action="<?php echo base_url('index.php/admin/proses_login') ?>">

                  <div class="d-flex flex-column  align-items-center mb-4" style="gap: 10px;">
                        <h2 class="text-center text-white">Welcome</h2>
                        <div class="mb-2" style="height: 50px; width: 50px; border-radius: 5px; background-image: url(<?php echo base_url(); ?>assets/gambar/smooth.png); background-size: cover;"></div>
                        <h2 class="text-center text-white">Smooth Brains</h2>
                  </div>

                    <div class="form-group">
                      <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-5">
                      
                      <input type="submit" name="submit" class="btn btn-primary mb-3" value="Login" style = "padding:10px 20px; border-radius: 15px; width: 100%; background-color: orange; border: black;">

                      <a href="<?php echo base_url('index.php/admin/register') ?>" class="text-decoration-none fw-bold mr-3" style="color : orange;">Register New Account</a>
                    </div>

                    
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                </div>
              </div>
            </div>
          
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>assets/js/front.js"></script>
  </body>
</html>