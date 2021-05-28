<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row justify-content-center">
                  <h3>Buat Tagihan</h3>
                  </div>
                  </div>
                  <div class="card-body">
                  <?php
                    if (isset($errormsg)) {
                    ?>
                      
                      <div class="alert alert-danger" role="alert">
                      <p class="text-center">Insert data gagal, <?php echo $errormsg; ?></p>
                      </div>

                    <?php } ?>

                    <form class="form-horizontal" action="<?php echo site_url('admin/tagihan/add') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nomor Tagihan</label>
                        <div class="col-md-1">
                          <input class="form-control" id="text-input" type="text" name="no_tagihan" placeholder="Nomor Tagihan" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Tanggal jatuh tempo</label>
                        <div class="col-md-9">
                          <input class="form-control" id="date-input" type="datetime-local" name="tanggal_jatuh_tempo" placeholder="date" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Tanggal Lunas</label>
                        <div class="col-md-9">
                          <input class="form-control" id="date-input" type="datetime-local" name="tanggal_lunas" placeholder="date">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Deskripsi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="textarea-input" name="deskripsi" rows="5" placeholder="Deskripsi.."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Jumlah Tagihan</label>
                        <div class="col-md-3 input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input class="form-control" id="all-bills" type="text" name="jumlah_tagihan" placeholder="Jumlah Tagihan" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Diskon</label>
                        <div class="col-md-2 input-group">
                          <input class="form-control" id="text-discount" type="text" name="diskon" placeholder="Diskon">
                          <div class="input-group-append">
                            <span class="input-group-text">%</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Status Pembayaran</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="id_status_pembayaran" required>
                          <?php 
                            echo "<option value='' >--Pilih--</option>";                          
                            foreach ($status_pembayaran->result() as $x) {
                            echo "<option value='" . $x->id_status_pembayaran . "' >" . $x->status_pembayaran . "</option>";
                          }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Nama Pengguna</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="no_pengguna" required>
                          <?php 
                            echo "<option value='' >--Pilih--</option>";                          
                          foreach ($pengguna->result() as $x) {
                            echo "<option value='" . $x->no_pengguna . "' >" . $x->nama_lengkap . "</option>";
                          }
                          ?> 
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Nama Kursus</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="kode_kursus" required>
                          <?php 
                            echo "<option value='' >--Pilih--</option>";                                                    
                          foreach ($kursus->result() as $x) {
                            echo "<option value='" . $x->kode_kursus . "' >" . $x->nama_kursus . "</option>";
                          }
                          ?> 
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Metode Pembayaran</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="id_metode_pembayaran" required>
                          <?php 
                            echo "<option value='' >--Pilih--</option>";                          
                            foreach ($metode_pembayaran->result() as $x) {
                            echo "<option value='" . $x->id_metode_pembayaran . "' >" . $x->nama_metode . "</option>";
                          }
                          ?> 
                          </select>
                        </div>
                      </div>
                  <div class="card-footer row justify-content-end">
                    <button class="btn btn-md btn-primary revers" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-md btn-secondary" type="button" onclick="location.href='<?php echo site_url("admin/tagihan/index");?>'">
                      <i class="fa fa-ban"></i> Cancel</button>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
</div>
</div>
</main>
