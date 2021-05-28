<div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>ID Agenda Pertemuan</th>
                          <th>Pertemuan Ke</th>
                          <th>Judul Materi</th>
                          <th>Deskripsi Materi</th>
                          <th>Link Modul</th>
                          <th>Tanggal Dibuat</th>
                          <th>Terakhir Diubah</th>
                          <th>Kode Kursus</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      $no = 1;
                      if(!empty($agenda_pertemuan)){
                        foreach($agenda_pertemuan as $x){ ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x->id_agenda_pertemuan ?></td>
                                <td><?php echo $x->pertemuan_ke ?></td>
                                <td><?php echo $x->judul_materi ?></td>
                                <td><?php echo $x->deskripsi_materi ?></td>
                                <td><?php echo $x->link_modul ?></td>
                                <td><?php echo $x->tanggal_dibuat ?></td>
                                <td><?php echo $x->terakhir_diubah ?></td>
                                <td><?php echo $x->kode_kursus ?></td>
                                <td>
                                  <div class="btn-group">
                                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                      Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo site_url()?>mentor/agenda/edit/<?php echo $x->id_agenda_pertemuan;?>">Sunting</a>
                                    <a class="dropdown-item" href="<?php echo site_url()?>mentor/agenda/del/<?php echo $x->id_agenda_pertemuan;?>">Hapus</a>
                                    </div>
                                  </div>
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
                  </div>
