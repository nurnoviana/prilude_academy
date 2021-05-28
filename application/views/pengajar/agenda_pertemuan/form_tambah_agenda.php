<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Form Tambah Agenda Pertemuan</h4>
                  <p class="card-description">
                    Tambahkan Data Agenda Pertemuan
                  </p>
                </div>
                <div class="card-body">
                  <form class="forms-sample" action="<?php echo site_url("mentor/agenda/add") ?>" method="post">
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">ID Agenda Pertemuan</label>
                      <div class="col-md-2">
                      <input type="text" name="id_agenda_pertemuan" class="form-control " required>                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">Pertemuan ke-</label>
                      <div class="col-md-2">
                      <input type="text" name="pertemuan_ke" class="form-control " required>                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">Judul Materi</label>
                      <div class="col-md-10">
                      <input type="text" name="judul_materi" class="form-control " required>                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">Deskripsi Materi</label>
                      <div class="col-md-10">
                      <input type="text" name="deskripsi_materi" class="form-control ">                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">Link Modul</label>
                      <div class="col-md-10">
                      <input type="text" name="link_modul" class="form-control ">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama Kursus</label>
                      <div class="col-md-10">
                      <select class="form-control form-control-md " name="kode_kursus" required>
                        <option value="" disabled diselected> --Pilih-- </option>
                        <?php 
                        foreach($kursus->result() as $x){
                          echo "<option value='".$x->kode_kursus."'>".$x->nama_kursus."</option>";
                        }
                        echo "</select>";
                        ?>
                      </div>
                    </div>


                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("mentor/agenda/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>