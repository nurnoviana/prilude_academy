<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
<div class="container-fluid" style="margin-top: 30px;">
    <div class="animated fadeIn">
        <div class="content-wrapper">
            <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center">Form Tambah Data Pengguna</h3>
                  <p class="card-description text-center">
                    Tambahkan Data Pengguna
                  </p>
              </div>
                <div class="card-body">
                  <form class="forms-sample" action="<?php echo site_url("admin/pengguna/add") ?>" method="post">
                    <div class="form-group">
                      <label for="InputEmail">Alamat Email</label>
                      <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="InputPassword">Kata Sandi</label>
                      <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Kata Sandi" required>
                    </div>
                    <div class="form-group">
                      <label for="InputFullname">Nama Lengkap</label>
                      <input type="text" name="fullname" class="form-control" id="InputFullname" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                      <label for="InputBirthplace">Tempat Lahir</label>
                      <input type="text" name="birthplace" class="form-control" id="InputBirthplace" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                      <label for="InputBirthdate">Tanggal Lahir</label>
                      <input type="date" name="birthdate" class="form-control" id="InputBirthdate" placeholder="dd/mm/yyyy" required>
                    </div>
                    <div class="form-group">
                      <label for="InputIdentity">Jenis Identitas</label>
                      <select class="form-control form-control-md" name="jenis_identitas" id="InputIdentity" required>
                      <option value="" disabled diselected> --Pilih-- </option>
                      <option value="KTP"> KTP </option>
                      <option value="Kartu Pelajar"> Kartu Pelajar </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="InputIdentityCode">Nomor Identitas</label>
                      <input type="text" name="identity_code" class="form-control" id="InputIdentityCode" placeholder="Nomor Identitas" required>
                    </div>
                    <div class="form-group">
                      <label for="InputAddress">Alamat</label>
                      <input type="text" name="address" class="form-control" id="InputAddress" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                      <label for="InputGender">Jenis Kelamin</label>
                      <div class="col-sm-5">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="gender" id="InputGender1" value="L" checked> 
                              <label class="custom-control-label" for="InputGender1">Laki-laki</label>
                          </div>
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="gender" id="InputGender2" value="P"> 
                              <label class="custom-control-label" for="InputGender2">Perempuan</label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="InputDesa">Desa</label>
                      <input type="text" name="desa" class="form-control" id="InputDesa" placeholder="Desa">
                    </div>
                    <div class="form-group">
                      <label for="InputKecamatan">Kecamatan</label>
                      <input type="text" name="kecamatan" class="form-control" id="InputKecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                      <label for="InputKabupaten">Kabupaten</label>
                      <input type="text" name="kabupaten" class="form-control" id="InputKabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="form-group">
                      <label for="InputProvinsi">Provinsi</label>
                      <input type="text" name="provinsi" class="form-control" id="InputProvinsi" placeholder="Provinsi">
                    </div>
                    <div class="form-group">
                    <label for="InputJenis">Jenis Pengguna</label>
                    <select class="form-control form-control-md" name="jenis_pengguna" id="InputJenis">
                      <option value="" disabled diselected> --Pilih-- </option>
                      <?php 
                      foreach($jenis_pengguna->result() as $x){
                        echo "<option value='".$x->id_jenis_pengguna."'>".$x->jenis_pengguna."</option>";
                      }
                      echo "</select>"
                      ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("admin/pengguna/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>