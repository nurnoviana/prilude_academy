<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title text-center">My Profile</h4>
                </div>
                <div class="card-body">
                    <div class="container d-flex justify-content-center mb-4">
                        <div class="user-wrapper">
                        <img class="mb-4" src="<?php echo base_url('src/img/user-md.png')?>">
                        <h5 class="text-center text-primary"><?php echo $this->session->nama_lengkap; ?></h5>
                        <p class="font-italic text-center">Pengajar</p>
                        </div>
                    </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                  <i class="fa fa-at"></i>
                  </span>
                </div>
                <input class="form-control" type="email" name="email" placeholder="Email" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Password" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-user-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-marker"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" disabled>
              </div>
              <p>Tanggal Lahir</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
                <input class="form-control" type="date" name="tanggal_lahir" disabled>
              </div>
              <div class="input-group mb-6">
                <div class="input-group-prepend">
                <span>
                  <p>Jenis Identitas</p>
                </span>
                <div class="col-md-8">
                    <select class="form-control col-md-6" name="jenis_identitas" disabled>
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
                <input class="form-control" type="text" name="no_identitas" placeholder="Nomor Identitas" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" disabled>
              </div>
              <div class="input-group mb-6">
                <div class="input-group-prepend">
                <span>
                  <p>Jenis Kelamin</p>
                </span>
                <div class="col-sm-8">
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
                <input class="form-control" type="text" name="desa" placeholder="Desa" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="kabupaten" placeholder="Kabupaten" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-map-o"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" disabled>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-male"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="jenis_pengguna" placeholder="Jenis Pengguna" disabled>
              </div>


                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>
