<main class="main">
<ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('home_admin/index') ?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <div class="container">
                        <span><h2>Laporan Pembayaran</h2></span>
                    </div>
                </div>
                    <div class="card-body">
                    <div class="container">
                      <div class="row justify-content-center">
                        <h4>Laporan pendapatan saat ini : 
                        <span class="badge badge-success">
                        <strong>
                        <?php 
                          $this->db->select('SUM(tagihan_setelah_diskon) as total');
                          $this->db->from('tagihan');
                          $this->db->where('id_status_pembayaran', 2);
                          echo "Rp"; echo $this->db->get()->row()->total;
                          ?> 
                        </strong>                            
                        </span> 
                      </h4>
                      </div>
                    </div>
                    <div class="container row">
                    <h3 class="text-primary">Bukti Pembayaran</h3>
                    </div>
                <div class="table-responsive">
                    <table class="table table-responsive-sm table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>ID Bukti Bayar</th>
                          <th>Bank Asal</th>
                          <th>Nama Pemilik Rekening</th>
                          <th>Tanggal Transfer</th>
                          <th>Bukti Transfer</th>
                          <th>No Tagihan</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    $no = 1;
                      if( ! empty($bukti_bayar)){
                        foreach ($bukti_bayar as $x) { ?>
                            <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $x->id_bukti_bayar ?></td>
                            <td><?php echo $x->bank_asal ?></td>
                            <td><?php echo $x->nama_pemilik_rekening ?></td>
                            <td><?php echo $x->tanggal_transfer ?></td>
                            <td><img src="<?php echo base_url('src/img/'.$x->bukti_transfer); ?>" width="100" height="100" /></td>
                            <td><?php echo $x->no_tagihan ?></td>
                            <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Actions
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url()?>admin/tagihan/konfirmasi/<?php echo $x->no_tagihan;?>">Konfirmasi Pembayaran</a>
                                <a class="dropdown-item" href="<?php echo site_url()?>admin/laporan/detail/<?php echo $x->id_bukti_bayar;?>">Lihat Detail</a>
                              </div>
                            </div>
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