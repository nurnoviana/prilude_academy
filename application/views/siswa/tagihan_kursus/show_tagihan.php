<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
<div class="container-fluid" style="margin-top: 80px;">
    <div class="animated fadeIn">
<div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Tagihan Saya</h2>
                </div>
                    <div class="card-body">

                    <div class="table-responsive">
       <table class="table table-responsive-sm table-bordered">
                      <thead>
                        <tr>
                          <th>No Tagihan</th>
                          <th>Status</th>
                          <th>Tanggal Dibuat</th>
                          <th>Tanggal Jatuh Tempo</th>
                          <th>Tanggal Lunas</th>
                          <th>Deskripsi</th>
                          <th>Jumlah Tagihan</th>
                          <th>Diskon</th>
                          <th>Tagihan Setelah Diskon</th>
                          <th>ID Status Pembayaran</th>
                          <th>No Pengguna</th>
                          <th>Kode Kursus</th>
                          <th>ID Metode Pembayaran</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                      date_default_timezone_set('Asia/Jakarta'); 
                      $date1 = date("Y-m-d h:i:sA");  
                      if( ! empty($tagihan)){
                        foreach ($tagihan as $x) { ?>
                            <tr>
                            <td><?php echo $x->no_tagihan ?></td>
                            <td>
                            <?php if($x->id_status_pembayaran == 1 && $date1 >= $x->tanggal_jatuh_tempo){
                              ?><span class="badge badge-warning">Tagihan Belum Dibayar</span>
                                <span class="badge badge-danger">Tagihan Jatuh Tempo</span> 
                              <?php
                            } elseif($x->id_status_pembayaran == 1 && $date1 < $x->tanggal_jatuh_tempo) { ?>
                            <span class="badge badge-warning">Tagihan Belum Dibayar</span> 
                            <?php } else { ?>
                            <span class="badge badge-success">Tagihan Lunas</span> 
                            <?php }
                            ?>
                            </td>
                            <td><?php echo $x->tanggal_dibuat ?></td>
                            <td><?php echo $x->tanggal_jatuh_tempo ?></td>
                            <td><?php echo $x->tanggal_lunas ?></td>
                            <td><?php echo $x->deskripsi ?></td>
                            <td><?php echo $x->jumlah_tagihan ?></td>
                            <td><?php echo $x->diskon ?></td>
                            <td><?php echo $x->tagihan_setelah_diskon ?></td>
                            <td><?php echo $x->id_status_pembayaran ?></td>
                            <td><?php echo $x->no_pengguna?></td>
                            <td><?php echo $x->kode_kursus?></td>
                            <td><?php echo $x->id_metode_pembayaran?></td>
                            <td>
                            <?php
                            if($x->id_status_pembayaran == 1 && $date1 < $x->tanggal_jatuh_tempo){
                              ?><a role="button" class="btn btn-success" href="<?php echo site_url()?>siswa/tagihansiswa/input/<?php echo $x->no_tagihan;?>"><i class="fa fa-upload"></i>Upload Bukti Pembayaran</button>
                            <?php } elseif($x->id_status_pembayaran == 1 && $date1 >= $x->tanggal_jatuh_tempo) { ?>
                              <a role="button" class="btn btn-success" href="<?php echo site_url()?>siswa/tagihansiswa/input/<?php echo $x->no_tagihan;?>"><i class="fa fa-upload"></i>Upload Bukti Pembayaran</button>
                            <?php } else {?>
                              <button type="button" class="btn btn-secondary" disabled><i class="fa fa-upload"></i>Upload Bukti Pembayaran</button>                            
                              <?php }
                            ?>
                            </td>
                            </tr>
                        <?php }
                  } else {
                    echo "<div class=\"alert alert-secondary\" role=\"alert\">
                    <a href=\"#\" class=\"alert-link\">Data tidak ada</a>. Silakan input data terlebih dahulu.
                    </div>";
                  }                                      
                    ?>
                    </tbody>
                </table>
                </div>

                  </div>
                </div>
              </div>
</div>
</div>
</main>