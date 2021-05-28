<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data Kehadiran</h4>
                  <p class="card-description">
                    Sunting Data Kehadiran
                  </p>
                  <form class="forms-sample" action="<?php echo site_url()?>mentor/kehadiran/simpan/<?php echo $kehadiran->id_kehadiran ?>" method="post">
                    <div class="form-group">
                      <label>ID Kehadiran</label>
                      <input type="text" name="id_kehadiran" class="form-control col-sm-3" value="<?=$kehadiran->id_kehadiran?>" disabled>
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" class="form-control col-sm-4" value="<?=$kehadiran->tanggal?>" >
                    </div>
                    <div class="form-group">
                      <label>Status Kehadiran</label>
                      <select class="form-control form-control-lg" name="status_kehadiran" value="<?=$kehadiran->status_kehadiran?>" >
                      <option value="" disabled diselected> --Pilih-- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Absen"> Absen </option>
                      <option value="Izin"> Izin </option>
                      <option value="Sakit"> Sakit </option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label>Pertemuan Ke</label>
                    <select class="form-control form-control-lg" name="agenda_pertemuan" value="<?=$kehadiran->pertemuan_ke?>" >
                      <option value="" disabled diselected> --Pilih-- </option>
                      <?php 
                      foreach($agenda_pertemuan->result() as $x){
                        echo "<option value='".$x->id_agenda_pertemuan."'>".$x->pertemuan_ke."</option>";
                      }
                      echo "</select>";
                      ?>
                    </div>
                    <div class="form-group">
                    <label>ID Kursus Saya</label>
                    <select class="form-control form-control-lg" name="id_kursus_saya" value="<?=$kehadiran->id_kursus_saya?>" >
                      <option value="" disabled diselected> --Pilih-- </option>
                      <?php 
                      foreach($kursus_saya->result() as $x){
                        echo "<option value='".$x->id_kursus_saya."'>".$x->id_kursus_saya."</option>";
                      }
                      echo "</select>";
                      ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("mentor/kehadiran/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>