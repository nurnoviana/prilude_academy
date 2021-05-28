<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row justify-content-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Form Tambah Agenda Pertemuan</h4>
                  <p class="card-description">
                    Tambahkan Data Agenda Pertemuan
                  </p>
                </div>
                <div class="card-body">
                  <form class="forms-sample" action="<?php echo site_url("mentor/agenda/update") ?>" method="post">
                    <div class="form-group">
                      <label>ID Agenda Pertemuan</label>
                      <input type="text" readonly="readonly" name="id_agenda_pertemuan" class="form-control col-sm-4" value="<?=$agenda_pertemuan->id_agenda_pertemuan?>" >
                    </div>
                    <div class="form-group">
                      <label>Pertemuan ke-</label>
                      <input type="text" name="pertemuan_ke" class="form-control col-sm-4" value="<?=$agenda_pertemuan->pertemuan_ke?>" >
                    </div>
                    <div class="form-group">
                      <label>Judul Materi</label>
                      <input type="text" name="judul_materi" class="form-control col-sm-4" value="<?=$agenda_pertemuan->judul_materi?>" >
                    </div>
                    <div class="form-group">
                      <label>Deskripsi Materi</label>
                      <input type="text" name="deskripsi_materi" class="form-control col-sm-4" value="<?=$agenda_pertemuan->deskripsi_materi?>">
                    </div>
                    <div class="form-group">
                      <label>Link Modul</label>
                      <input type="text" name="link_modul" class="form-control col-sm-4" value="<?=$agenda_pertemuan->link_modul?>">
                    </div>
                    <div class="form-group">
                    <label>Nama Kursus</label>
                    <select class="form-control form-control-md col-sm-4" name="kode_kursus" value="<?=$kursus->nama_kursus?>" >
                      <option value="" disabled diselected> --Pilih-- </option>
                      <?php 
                      foreach($kursus->result() as $x){
                        echo "<option value='".$x->kode_kursus."'>".$x->nama_kursus."</option>";
                      }
                      echo "</select>";
                      ?>
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