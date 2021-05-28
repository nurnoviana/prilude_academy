<div class="table-responsive">
       <table class="table table-responsive-sm table-bordered">
                      <thead>
                        <tr>
                        <th>No.</th>
                          <th>No Tagihan</th>
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
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    $no = 1;
                    date_default_timezone_set('Asia/Jakarta'); 
                    $date1 = date("Y-m-d h:i:sA");
                      if( ! empty($tagihan)){
                        foreach ($tagihan as $x) { 
                            if($x->id_status_pembayaran == 1 && $date1 >= $x->tanggal_jatuh_tempo){ ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x->no_tagihan ?></td>
                            <td><?php echo $x->tanggal_dibuat ?></td>
                            <td><?php echo $x->tanggal_jatuh_tempo ?></td>
                            <td><?php echo $x->tanggal_lunas ?></td>
                            <td><?php echo $x->deskripsi ?></td>
                            <td>Rp<?php echo $x->jumlah_tagihan ?></td>
                            <td><?php echo $x->diskon ?>%</td>
                            <td>Rp<?php echo $x->tagihan_setelah_diskon ?></td>
                            <td><?php echo $x->id_status_pembayaran ?></td>
                            <td><?php echo $x->no_pengguna?></td>
                            <td><?php echo $x->kode_kursus?></td>
                            <td><?php echo $x->id_metode_pembayaran?></td>
                            </tr>
                            <?php }
                             }
                  } else {
                    echo "<div class=\"alert alert-secondary\" role=\"alert\">
                    <a href=\"#\" class=\"alert-link\">Data tidak ada</a>. Silakan input data terlebih dahulu.
                    </div>";
                  }                                      
                    ?>
                    </tbody>
       </table>
</div>