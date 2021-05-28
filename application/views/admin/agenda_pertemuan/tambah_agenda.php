<main class="main">
<div class="content-wrapper">
    <div class="row justify-content-md-center">
            <div class="col-md-10 margin stretch-card ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Tambah Agenda Pertemuan</h4>
                  <p class="card-description">
                    Tambahkan Data Agenda Pertemuan
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/agenda/add") ?>" method="post">
                  <div class="form-group">
                    <label for="InputPertemuan">Pertemuan Ke</label>
                    <input type="text" name="pertemuan_ke" class="form-control" id="InputPertemuan" placeholder="Pertemuan ke" required>
                  </div>
                  <div class="form-group">
                      <label for="InputJudul">Judul Materi</label>
                      <input type="text" name="judul_materi" class="form-control" id="InputJudul" placeholder="Judul Materi" required>
                    </div>
                    <div class="form-group">
                      <label for="InputDeskripsi">Deskripsi Materi</label>
                      <input type="text" name="deskripsi_materi" class="form-control" id="InputDeskripsi" placeholder="Deskripsi Materi" required>
                    </div>
                    <div class="form-group">
                        <label for="InputModul">Link Modul</label>
                        <textarea name="link_modul" class="form-control" id="InputModul" rows="3" placeholder="Link Modul"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="InputKursus">Nama Kursus</label>
                    <select class="form-control form-control-md" name="kode_kursus" id="InputKursus" required>
                      <option value="" disabled diselected> --Pilih-- </option>
                        <?php 
                        foreach ($kursus->result() as $x) {
                          echo "<option value='" . $x->kode_kursus . "'>" . $x->nama_kursus . "</option>";
                        }
                        echo "</select>"
                        ?>                    
                      </div>
                      <button type="submit" name="submit" class="btn btn-success mr-2">Simpan</button>
                      <button class="btn btn-light" onclick="location.href='<?php echo site_url("admin/agenda/index"); ?>'">Batal</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</main>
