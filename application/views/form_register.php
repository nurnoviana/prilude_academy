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
    <title>Register | Prilude Academy</title>
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
  <body class="app flex-row align-items-center">
    <div class="container" style="margin-top: 20px;">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
          <div class="card-header p-4">
              <h1>Daftar</h1>
              <p class="text-muted">Buat Akun Baru</p>
          </div>
            <div class="card-body p-4">
              <form action="<?php echo site_url('login/simpan')?>" method="post">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                  <i class="fa fa-at"></i>
                  </span>
                </div>
                <input class="form-control" type="email" name="email" placeholder="Email" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Password" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-user-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-marker"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
              </div>
              <p>Tanggal Lahir</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
                <input class="form-control" type="date" name="tanggal_lahir" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span>
                  <p>Jenis Identitas</p>
                </span>
                <div class="col-md-8">
                    <select class="form-control col-md-7" name="jenis_identitas" required>
                      <option value="" disabled diselected> --Pilih-- </option>
                      <option value="KTP"> KTP </option>
                      <option value="Kartu Pelajar"> Kartu Pelajar </option>
                    </select>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-id-card-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="no_identitas" placeholder="Nomor Identitas" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span>
                  <p>Jenis Kelamin</p>
                </span>
                <div class="col-sm-5">
                  <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="jenis_kelamin" id="InputGender1" value="L" checked> 
                      <label class="custom-control-label" for="InputGender1">Laki-laki</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="jenis_kelamin" id="InputGender2" value="P"> 
                      <label class="custom-control-label" for="InputGender2">Perempuan</label>
                  </div>
                </div>
              </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="desa" placeholder="Desa">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="kabupaten" placeholder="Kabupaten">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="provinsi" placeholder="Provinsi">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span>
                <label>Jenis Pengguna</label>
                </span>
                <div class="col-md-8">
                  <select class="form-control form-control-md" name="jenis_pengguna" required>
                  <option value="" disabled diselected> --Pilih-- </option>
                  <?php 
                  foreach($jenis_pengguna->result() as $x){
                    echo "<option value='".$x->id_jenis_pengguna."'>".$x->jenis_pengguna."</option>";
                  }
                  echo "</select>";
                  ?>                
                </div>
              </div>
              </div>
              <button class="btn btn-block btn-success" type="submit" name="submit">Create Account</button>
              <button onclick="location.href='<?php echo base_url('login/index')?>'" class="btn btn-block btn-outline-secondary" type="button">Cancel</button>
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
