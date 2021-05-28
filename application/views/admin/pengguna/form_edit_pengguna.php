<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="content-wrapper">

    <div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Sunting Data Pengguna</h4>
                  <p class="card-description">
                    Sunting Data Pengguna
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/pengguna/update") ?>" method="post">
                    <div class="form-group">
                      <label for="EditNomor">Nomor Pengguna</label>
                      <input type="text" name="no_pengguna" class="form-control" id="EditNomor" value="<?=$pengguna->no_pengguna?>" placeholder="Nomor Pengguna" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label for="EditEmail">Alamat Email</label>
                      <input type="email" name="email" class="form-control" id="EditEmail" value="<?=$pengguna->alamat_email?>" placeholder="Email" >
                    </div>
                    <div class="form-group">
                      <label for="EditFullname">Nama Lengkap</label>
                      <input type="text" name="fullname" class="form-control" id="EditFullname" value="<?=$pengguna->nama_lengkap?>" placeholder="Nama Lengkap" >
                    </div>
                    <div class="form-group">
                      <label for="EditBirthplace">Tempat Lahir</label>
                      <input type="text" name="birthplace" class="form-control" id="EditBirthplace" value="<?=$pengguna->tempat_lahir?>" placeholder="Tempat Lahir" >
                    </div>
                    <div class="form-group">
                      <label for="EditBirthdate">Tanggal Lahir</label>
                      <input type="date" name="birthdate" class="form-control" id="EditBirthdate" value="<?=$pengguna->tanggal_lahir?>" placeholder="dd/mm/yyyy" >
                    </div>
                    <div class="form-group">
                      <label for="EditIdentity">Jenis Identitas</label>
                      <select class="form-control form-control-md" name="jenis_identitas" id="EditIdentity" >
                      <?php 
                      if ($pengguna->jenis_identitas == "KTP") {
                                 ?>
                                    <option value="KTP" selected="selected"> KTP </option>
                                    <option value="Kartu Pelajar"> Kartu Pelajar </option>
                                <?php }else { ?>
                                    <option value="KTP"> KTP </option>
                                    <option value="Kartu Pelajar" selected="selected"> Kartu Pelajar </option>
                              <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="EditIdentityCode">Nomor Identitas</label>
                      <input type="text" name="identity_code" class="form-control" id="EditIdentityCode" value="<?=$pengguna->no_identitas?>" placeholder="Nomor Identitas" >
                    </div>
                    <div class="form-group">
                      <label for="EditAddress">Alamat</label>
                      <input type="text" name="address" class="form-control" id="EditAddress" value="<?=$pengguna->alamat?>" placeholder="Alamat" >
                    </div>
                    <div class="form-group">
                      <label for="EditGender">Jenis Kelamin</label>
                      <div class="row">
                        <div class="col-sm-5">
                      <?php 
                      if ($pengguna->jenis_kelamin == "L") { ?>
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" id="InputGender1" value="L" checked> 
                        <label class="custom-control-label" for="InputGender1">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" id="InputGender2" value="P"> 
                        <label class="custom-control-label" for="InputGender2">Perempuan</label>
                        </div>
                        <?php } else { ?>
                            <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" id="InputGender1" value="L" > 
                        <label class="custom-control-label" for="InputGender1">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" id="InputGender2" value="P" checked> 
                        <label class="custom-control-label" for="InputGender2">Perempuan</label>
                        </div>
                        <?php } ?>

                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="EditDesa">Desa</label>
                      <input type="text" name="desa" class="form-control" id="EditDesa" value="<?=$pengguna->desa?>" placeholder="Desa">
                    </div>
                    <div class="form-group">
                      <label for="EditKecamatan">Kecamatan</label>
                      <input type="text" name="kecamatan" class="form-control" id="EditKecamatan" value="<?=$pengguna->kecamatan?>" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                      <label for="EditKabupaten">Kabupaten</label>
                      <input type="text" name="kabupaten" class="form-control" id="EditKabupaten" value="<?=$pengguna->kabupaten?>" placeholder="Kabupaten">
                    </div>
                    <div class="form-group">
                      <label for="EditProvinsi">Provinsi</label>
                      <input type="text" name="provinsi" class="form-control" id="EditProvinsi" value="<?=$pengguna->provinsi?>" placeholder="Provinsi">
                    </div>
                    <div class="form-group">
                    <label for="EditJenis">Jenis Pengguna</label>
                    <select class="form-control form-control-md" name="jenis_pengguna" id="InputJenis">
                      <option value="" disabled>--Pilih--</option>
                      <?php 
                      foreach($jenis_pengguna->result() as $x){
                        echo "<option value='".$x->id_jenis_pengguna."'>".$x->jenis_pengguna."</option>";
                      }
                      ?>
                    </select>
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
</div>
</main>
<script>
$(()=>{
    $('#InputJenis').val('<?=$pengguna->id_jenis_pengguna?>');
})
</script>