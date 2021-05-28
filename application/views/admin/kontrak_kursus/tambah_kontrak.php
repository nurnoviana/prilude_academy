<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Data Kontrak Kursus</h4>
                  <p class="card-description">
                    Tambahkan Data Kontrak Kursus
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/kontrak_kursus/add") ?>" method="post">
                    <div class="form-group">
                      <label for="InputID">ID Kursus Saya</label>
                      <input type="text" name="id_kursus_saya" class="form-control" id="InputID" placeholder="ID Kursus Saya" required>
                    </div>
                    <div class="form-group">
                      <label for="InputTanggalMulai">Tanggal Mulai Kursus</label>
                      <input type="date" name="tanggal_mulai" class="form-control" id="InputTanggalMulai" required>
                    </div>
                    <div class="form-group">
                      <label for="InputTanggalSelesai">Tanggal Selesai Kursus</label>
                      <input type="date" name="tanggal_selesai" class="form-control" id="InputTanggalSelesai" required>
                    </div>
                    <div class="form-group">
                      <label for="InputNama">Nama Pengguna</label>
                      <select class="form-control form-control-md" name="nama_pengguna" id="InputNama" required>
                      <option value='' disabled>--Pilih--</option>
                        <?php 
                        foreach($pengguna->result() as $x){
                            echo "<option value='".$x->no_pengguna."'>".$x->nama_lengkap."</option>";
                        }
                        echo "</select>"
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="InputKodeKursus">Nama Kursus</label>
                        <select class="form-control form-control-md" name="kode_kursus" id="InputKodeKursus" required>
                        <option value='' disabled>--Pilih--</option>
                        <?php 
                        foreach($kursus->result() as $x){
                            echo "<option value='".$x->kode_kursus."'>".$x->nama_kursus."</option>";
                        }
                        echo "</select>"
                        ?>                    

                    </div>
                    <div class="form-group">
                    <label for="InputJenis">Jenis Pengguna</label>
                    <select class="form-control form-control-md" name="jenis_pengguna" id="InputJenis" required>
                      <option value='' disabled>--Pilih--</option>
                      <?php 
                      foreach($jenis_pengguna->result() as $x){
                        echo "<option value='".$x->id_jenis_pengguna."'>".$x->jenis_pengguna."</option>";
                      }
                      echo "</select>"
                      ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("kontrak/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>
