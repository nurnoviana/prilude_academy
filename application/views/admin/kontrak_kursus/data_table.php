<form>
<div class="form-row d-flex flex-row">
  <div class="col-auto">
      <label class="sr-only" for="searchData">search</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-search"></i></div>        
        </div>
        <input type="text" class="form-control" id="searchData" placeholder="Search">
      </div>
  </div>
</div>
</form>
<div class="table-responsive">
<table class="table table-responsive-sm table-bordered table-striped table-sm">
<thead>
                        <tr>
                        <th>No.</th>
                          <th>ID Kontrak Kursus</th>
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Selesai</th>
                          <th>Nomor Pengguna</th>
                          <th>Kode Kursus</th>
                          <th>Jenis Pengguna</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tableKontrak">

                      <?php 
                      if(!empty($kursus_saya)){
                        $no = 1;
                        foreach($kursus_saya as $x){ ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x->id_kursus_saya ?></td>
                                <td><?php echo $x->tanggal_mulai ?></td>
                                <td><?php echo $x->tangal_selesai ?></td>
                                <td><?php echo $x->no_pengguna ?></td>
                                <td><?php echo $x->kode_kursus ?></td>
                                <td><?php echo $x->id_jenis_pengguna ?></td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo site_url()?>admin/kontrak_kursus/edit/<?php echo $x->id_kursus_saya;?>">Sunting</a>
                                    <a class="dropdown-item" href="<?php echo site_url()?>admin/kontrak_kursus/del/<?php echo $x->id_kursus_saya;?>">Hapus</a>
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
<script>

$(document).ready(function(){
  $("#searchData").on("keyup", function(){
    var value = $(this).val().toLowerCase();
    $("#tableKontrak tr").filter(function(){
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
