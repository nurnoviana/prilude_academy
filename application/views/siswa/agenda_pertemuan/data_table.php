<div class="table-responsive">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>ID Agenda Pertemuan</th>
                          <th>Pertemuan ke</th>
                          <th>Judul Materi</th>
                          <th>Deskripsi Materi</th>
                          <th>Link Modul</th>
                          <th>Tanggal dibuat</th>
                          <th>Terakhir diubah</th>
                          <th>Kode Kursus</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      if(!empty($agenda_pertemuan)){
                        foreach($agenda_pertemuan as $x){ ?>
                              <tr>
                                <td><?php echo $x->id_agenda_pertemuan ?></td>
                                <td><?php echo $x->pertemuan_ke ?></td>
                                <td><?php echo $x->judul_materi ?></td>
                                <td><?php echo $x->deskripsi_materi ?></td>
                                <td><?php echo $x->link_modul ?></td>
                                <td><?php echo $x->tanggal_dibuat ?></td>
                                <td><?php echo $x->terakhir_diubah ?></td>
                                <td><?php echo $x->kode_kursus ?></td>
                                <td>
                                <a class="btn btn-primary" role="button" href="<?php echo $x->link_modul ?>"><i class="fa fa-download"></i> 
                                Download Materi</a>
                                </td>
                              </tr>

                      <?php }
                      } else {
                        echo "<div class=\"alert alert-secondary\" role=\"alert\">
                        <a href=\"#\" class=\"alert-link\">Data tidak ada</a>. Silakan input data terlebih dahulu.
                        </div>";
                      } ?>
                      </tbody>
                    </table>