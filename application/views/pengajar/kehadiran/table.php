<div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>ID Kehadiran</th>
                          <th>Tanggal</th>
                          <th>Status Kehadiran</th>
                          <th>ID Agenda Pertemuan</th>
                          <th>ID Kursus Saya</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      if(!empty($kehadiran)){
                        $no = 1;
                        foreach($kehadiran as $x){ ?>
                              <tr>
                                <td><?php echo $x->id_kehadiran ?></td>
                                <td><?php echo $x->tanggal ?></td>
                                <td><?php echo $x->status_kehadiran ?></td>
                                <td><?php echo $x->id_agenda_pertemuan ?></td>
                                <td><?php echo $x->id_kursus_saya ?></td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo site_url()?>mentor/kehadiran/edit/<?php echo $x->id_kehadiran;?>">Sunting</a>
                                    <a class="dropdown-item" href="<?php echo site_url()?>mentor/kehadiran/del/<?php echo $x->id_kehadiran;?>">Hapus</a>
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
