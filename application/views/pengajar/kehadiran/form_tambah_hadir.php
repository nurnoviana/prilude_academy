<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title text-center">Form Tambah Kehadiran</h4>
                  <p class="card-description text-center">
                    Tambahkan Data Kehadiran
                  </p>
                </div>
                <div class="card-body">
                  <form class="forms-sample" action="<?php echo site_url("mentor/kehadiran/add") ?>" method="post">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" class="form-control col-sm-4" required>
                    </div>
                    <div class="form-group">
                      <label>Status Kehadiran</label>
                      <select class="form-control form-control-md" name="status_kehadiran" required>
                      <option value="" disabled> --Pilih-- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Absen"> Absen </option>
                      <option value="Izin"> Izin </option>
                      <option value="Sakit"> Sakit </option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label>Pertemuan Ke</label>
                    <select class="form-control form-control-md" name="agenda_pertemuan" required>
                      <option value="" disabled> --Pilih-- </option>
                      <?php 
                      foreach($agenda_pertemuan->result() as $x){
                        echo "<option value='".$x->id_agenda_pertemuan."'>".$x->pertemuan_ke."</option>";
                      }
                      echo "</select>";
                      ?>
                    </div>
                    <div class="form-group">
                    <label>ID Kursus Saya</label>
                    <select class="form-control form-control-md" name="id_kursus_saya" required>
                      <?php 
                      echo "<option>--Pilih--</option>";
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