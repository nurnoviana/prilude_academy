<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    Edit <strong>Tagihan</strong></div>
                  <div class="card-body">
                    <form class="form-horizontal" action="<?php echo site_url('admin/tagihan/edit') ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nomor Tagihan</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="no_tagihan" value="<?=$tagihan->no_tagihan?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Tanggal jatuh tempo</label>
                        <div class="col-md-9">
                          <input class="form-control" id="date-input" type="datetime-local" name="tanggal_jatuh_tempo" value="<?=$tagihan->tanggal_jatuh_tempo?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Tanggal Lunas</label>
                        <div class="col-md-9">
                          <input class="form-control" id="date-input" type="datetime-local" name="tanggal_lunas" value="<?=$tagihan->tanggal_lunas?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Deskripsi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="textarea-input" name="deskripsi" rows="5" value="<?=$tagihan->deskripsi?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Jumlah Tagihan</label>
                        <div class="col-md-9">
                          <input class="form-control" id="all-bills" type="text" name="jumlah_tagihan" value="<?=$tagihan->jumlah_tagihan?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Diskon</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-discount" type="text" name="diskon" value="<?=$tagihan->diskon?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Status Pembayaran</label>
                        <div class="col-md-9">
                          <select class="form-control" id="StatusBayar" name="id_status_pembayaran" >
                            <?php 
                            foreach ($status_pembayaran->result() as $x) {
                            echo "<option value='" . $x->id_status_pembayaran . "' selected>" . $x->status_pembayaran . "</option>";
                            }
                            ?>                           
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Nama Pengguna</label>
                        <div class="col-md-9">
                          <select class="form-control" id="NamaPengguna" name="no_pengguna" >
                          <?php 
                            foreach ($pengguna->result() as $x) {
                            echo "<option value='" . $x->no_pengguna . "' selected>" . $x->nama_lengkap . "</option>";
                            }
                            ?>                           
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Nama Kursus</label>
                        <div class="col-md-9">
                          <select class="form-control" id="NamaKursus" name="kode_kursus" >
                            <?php 
                            foreach ($kursus->result() as $x) {
                            echo "<option value='" . $x->kode_kursus . "' selected>" . $x->nama_kursus . "</option>";
                            }
                            ?>                           
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Metode Pembayaran</label>
                        <div class="col-md-9">
                          <select class="form-control" id="MetodeBayar" name="id_metode_pembayaran" >
                          <?php 
                            foreach ($metode_pembayaran->result() as $x) {
                            echo "<option value='" . $x->id_metode_pembayaran . "' selected>" . $x->metode_pembayaran . "</option>";
                            }
                            ?>                           
                          </select>
                        </div>
                      </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary revers" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-secondary" type="button" onclick="location.href='<?php echo site_url("admin/tagihan/index");?>'">
                      <i class="fa fa-ban"></i> Cancel</button>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
</div>
</div>
</main>
<script>
$(()=>{
    $('#StatusBayar').val('<?=$tagihan->id_status_pembayaran?>');
})

$(()=>{
    $('#NamaPengguna').val('<?=$tagihan->no_pengguna?>');
})

$(()=>{
    $('#NamaKursus').val('<?=$tagihan->kode_kursus?>');
})

$(()=>{
    $('#MetodeBayar').val('<?=$tagihan->id_metode_pembayaran?>');
})
</script>
