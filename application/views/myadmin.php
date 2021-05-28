<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Prilude Academy | Login</title>
    <!-- Icons-->
    <link href="<?php echo base_url('node_modules/@coreui/icons/css/coreui-icons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('node_modules/flag-icon-css/css/flag-icon.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('node_modules/simple-line-icons/css/simple-line-icons.css')?>" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('src/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('src/vendors/pace-progress/css/pace.min.css')?>" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center bg-gray-700">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card-header bg-info">
          <h2 class="text-default text-center">Prilude Academy Administrator</h2>
          </div>
          <div class="card-group">
            <div class="card p-3">
              <div class="card-body">
                <h3 class="text-primary">Login</h3>
                <p class="text-muted">Sign In to your account</p>
                <form action="<?php echo site_url('myadmin/proses');?>" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit" name="submit">Login</button>
                  </div>
                </div>
                <?php
                    if (isset($errormsg)) {
                    ?>
                <div class="row">
                  <div class="container">
                  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    Login gagal, <strong><?php echo $errormsg; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  </div>                
                </div>
                <?php } ?>
              </div>
              </form>
            </div>                   
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/pace-progress/pace.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js')?>"></script>
  </body>
</html>
