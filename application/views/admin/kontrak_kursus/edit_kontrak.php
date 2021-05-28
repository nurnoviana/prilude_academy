<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data Kontrak Kursus</h4>
                  <p class="card-description">
                    Edit Data Kontrak Kursus
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/kontrak_kursus/update") ?>" method="post">
                  <div class="form-group">
                      <label for="InputID">ID Kursus Saya</label>
                      <input type="text" name="id_kursus_saya" class="form-control" id="InputID" value="<?=$kursus_saya->id_kursus_saya ?>">
                    </div>
                    <div class="form-group">
                      <label for="InputTanggalMulai">Tanggal Mulai Kursus</label>
                      <input type="date" name="tanggal_mulai" class="form-control" id="InputTanggalMulai" value="<?=$kursus_saya->tanggal_mulai ?>">
                    </div>
                    <div class="form-group">
                      <label for="InputTanggalSelesai">Tanggal Selesai Kursus</label>
                      <input type="date" name="tanggal_selesai" class="form-control" id="InputTanggalSelesai" value="<?=$kursus_saya->tangal_selesai ?>">
                    </div>
                    <div class="form-group">
                      <label for="InputNama">Nama Pengguna</label>
                      <select class="form-control form-control-md" name="nama_pengguna" id="InputNama">
                        <?php 
                        foreach($pengguna->result() as $x){
                            echo "<option value='".$x->no_pengguna."' selected>".$x->nama_lengkap."</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputKodeKursus">Nama Kursus</label>
                        <select class="form-control form-control-md" name="kode_kursus" id="InputKodeKursus" >
                        <?php 
                        foreach($kursus->result() as $x){
                            echo "<option value='".$x->kode_kursus."' selected>".$x->nama_kursus."</option>";
                        }
                        ?>
                        </select>                    

                    </div>
                    <div class="form-group">
                    <label for="InputJenis">Jenis Pengguna</label>
                    <select class="form-control form-control-md" name="jenis_pengguna" id="InputJenis" >
                      <?php 
                      foreach($jenis_pengguna->result() as $x){
                        echo "<option value='".$x->id_jenis_pengguna."' selected>".$x->jenis_pengguna."</option>";
                      }
                      ?>
                      </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("admin/kontrak_kursus/index");?>'">Cancel</button>
                  </form>
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
    $('#InputNama').val('<?=$kursus_saya->no_pengguna?>');
})
</script>
<script>
$(()=>{
    $('#InputKodeKursus').val('<?=$kursus_saya->kode_kursus?>');
})
</script>
<script>
$(()=>{
    $('#InputJenis').val('<?=$kursus_saya->id_jenis_pengguna?>');
})
</script>