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
                      if (!empty($agenda_pertemuan)) {
                        foreach ($agenda_pertemuan as $x) { ?>
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
                                  <div class="btn-group">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Action
                                </button>                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>admin/agenda/edit/<?php echo $x->id_agenda_pertemuan; ?>">Sunting</a>
                                    <a class="dropdown-item" href="<?php echo site_url() ?>admin/agenda/del/<?php echo $x->id_agenda_pertemuan; ?>">Hapus</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>                        
                      <?php 
                    }
                  } else {
                    echo "<div class=\"alert alert-secondary\" role=\"alert\">
                        <a href=\"#\" class=\"alert-link\">Data tidak ada</a>. Silakan input data terlebih dahulu.
                        </div>";
                  } ?>
                      </tbody>

</table>
</div>