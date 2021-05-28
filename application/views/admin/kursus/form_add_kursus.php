<main class="main">
<div class="container-fluid">
  <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Data Kursus</h4>
                  <p class="card-description">
                    Tambahkan Data Kursus
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/course/add") ?>" method="post">
                    <div class="form-group">
                      <label for="InputKodeKursus">Kode Kursus</label>
                      <input type="text" name="kode_kursus" class="form-control" id="InputKodeKursus" placeholder="Kode Kursus" required>
                    </div>
                    <div class="form-group">
                      <label for="InputNamaKursus">Nama Kursus</label>
                      <input type="text" name="nama_kursus" class="form-control" id="InputNamaKursus" placeholder="Nama Kursus" required>
                    </div>
                    <div class="form-group">
                      <label for="InputWaktu">Alokasi Waktu</label>
                      <div class="col-md-4 input-group">
                      <input type="text" name="alokasi_waktu" class="form-control" id="InputWaktu" placeholder="Alokasi Waktu" required>
                      <div class="input-group-append">
                        <span class="input-group-text">jam</span>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="InputDeskripsiSingkat">Deskripsi Singkat</label>
                      <input type="text" name="deskripsi_singkat" class="form-control" id="InputDeskripsiSingkat" placeholder="Deskripsi Singkat" required>
                    </div>
                    <div class="form-group">
                        <label for="InputDeskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="InputDeskripsi" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputHarga">Harga per Bulan</label>
                        <div class="col-md-6 input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input type="text" name="harga_per_bulan" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                          </div>
                        </div>
                      </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("admin/kursus/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>