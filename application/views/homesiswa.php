    <?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prilude Academy</title>

    <link href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-image: linear-gradient(to right, #a5e1fdec , #ffffff);">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand text-info" href="<?php echo base_url('home_siswa/index')?>" style="font-family: 'Righteous', cursive; font-size: x-large;">Prilude
                        Academy</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="<?php echo base_url('home_siswa/index')?>">Home </span></a>
                    <a class="nav-item nav-link" href="<?php echo base_url('siswa/tagihansiswa/index')?>">Tagihan Kursus</a>
                    <a class="nav-item nav-link" href="<?php echo base_url('siswa/agendasiswa/index')?>">Agenda Pertemuan</a>
                </div>
                <ul class="nav navbar-nav navbar-right row">
                    <div class="dropdown show">
                    Hello, <?php echo $this->session->nama_lengkap; ?>
                        <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url('src/img/user.png')?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('home_siswa/show_profile') ?>"><i class="fa fa-user-circle"></i> My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('login/logout')?>"><i class="fa fa-sign-out"></i> Sign Out</a>
                        </div>
                    </div>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php 
      $this->load->view($page);
      ?>


    <footer class="container-fluid text-center fixed-bottom" style="background-color: #535450;">
        <a href="#" class="text-white">Prilude Academy</a>
        <span>&copy; 2019.</span>
    </footer>
</body>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js')?>"></script>
<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>

</html>