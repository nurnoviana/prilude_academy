<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data Kursus</h4>
                  <p class="card-description">
                    Edit Data Kursus
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/course/update") ?>" method="post">
                    <div class="form-group">
                      <label>Kode Kursus</label>
                      <input type="text" name="kode_kursus" class="form-control" value="<?=$kursus->kode_kursus ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label>Nama Kursus</label>
                      <input type="text" name="nama_kursus" class="form-control" value="<?=$kursus->nama_kursus ?>">
                    </div>
                    <div class="form-group">
                        <label>Alokasi Waktu</label>
                        <div class="col-md-3 input-group">
                          <input type="text" name="alokasi_waktu" class="form-control" value="<?=$kursus->alokasi_waktu?>">
                          <div class="input-group-append">
                            <span class="input-group-text">jam</span>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Deskripsi Singkat</label>
                      <input type="text" name="deskripsi_singkat" class="form-control" value="<?=$kursus->deskripsi_singkat?>" >
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input name="deskripsi" type="text" class="form-control" value="<?=$kursus->deskripsi?>">
                    </div>
                    <div class="form-group">
                        <label>Harga per Bulan</label>
                        <div class="col-md-6 input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input type="text" name="harga_per_bulan" class="form-control" value="<?=$kursus->harga_per_bulan?>" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                          </div>
                        </div>
                      </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("course/index");?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        </div>
    </div>
</div>
</main>