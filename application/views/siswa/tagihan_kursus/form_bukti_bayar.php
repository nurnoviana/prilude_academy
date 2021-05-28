<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title text-center">Isi Data Bukti Pembayaran</h4>
                </div>
                
                <form action="<?=base_url()?>siswa/tagihansiswa/insertdata" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                  <div class="container">
                    <?php
                    if (isset($errormsg)) {
                    ?>
                      
                      <div class="alert alert-danger" role="alert">
                      <p class="text-center">Input Data Gagal <?php echo $errormsg; ?></p>
                      </div>

                    <?php } ?>
                    </div>
                    <div class="form-group">
                      <label>Bank Asal</label>
                      <input type="text" name="bank_asal" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik Rekening</label>
                      <input type="text" name="nama_pemilik_rekening" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Transfer</label>
                      <input type="date" name="tanggal_transfer" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Upload Bukti Transfer : </label>
                        <span class="badge badge-warning">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
                        <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" id="image-upload" name="bukti_transfer" class="custom-file-input" required/>
                            <label class="custom-file-label" for="image-upload">Pilih Gambar...</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <label>Nomor Tagihan</label>
                      <input type="text" name="no_tagihan" class="form-control" value="<?=$tagihan->no_tagihan?>" readonly="readonly">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light" onclick="location.href='<?php echo site_url("siswa/tagihansiswa/index");?>'">Cancel</button>
                    </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>
