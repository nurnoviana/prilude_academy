<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Dashboard | Admin</title>
    <link href="<?php echo base_url('node_modules/DataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('node_modules/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
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
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/DataTables/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/pace-progress/pace.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js')?>"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url('node_modules/chart.js/dist/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')?>"></script>
    <script src="<?php echo base_url('src/js/main.js')?>"></script>
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
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('home_admin/index')?>">
          <h5>Prilude Academy</h5>
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="<?php echo base_url('src/img/avatars/7.jpg')?>" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="<?php echo base_url('myadmin/logout')?>">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <img class="rounded-circle mx-auto d-block" src="<?php echo base_url('src/img/avatars/7.jpg')?>" alt="profile image">
                <p class="text-center"><?php echo $this->session->nama_admin; ?></p>
                <p class="font-italic text-center">Admin</p>
              </div>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('home_admin/index') ?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-title">Kelola</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/course/index') ?>">
                <i class="nav-icon fa fa-book"></i> Kursus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/pengguna/index') ?>">
                <i class="nav-icon fa fa-drivers-license-o"></i> Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/kontrak_kursus/index') ?>">
                <i class="nav-icon fa fa-pencil-square-o"></i> Kontrak Kursus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/agenda/index') ?>">
                <i class="nav-icon fa fa-calendar"></i> Agenda Pertemuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/tagihan/index') ?>">
                <i class="nav-icon fa fa-money"></i> Tagihan Kursus</a>
            </li>
            <li class="nav-title">Laporan</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/laporan/index') ?>">
                <i class="nav-icon fa fa-warning"></i> Laporan
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>

      <?php 
      $this->load->view($page);
      ?>
    </div>
    <footer class="app-footer">
      <div>
        <a href="#">Prilude Academy</a>
        <span>&copy; 2019.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    
  </body>
</html>
