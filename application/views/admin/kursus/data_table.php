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
                          <th>Kode Kursus</th>
                          <th>Nama Kursus</th>
                          <th>Alokasi Waktu</th>
                          <th>Deskripsi Singkat</th>
                          <th>Deskripsi</th>
                          <th>Harga per-Bulan</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tableKursus">

                      <?php 
                      if(!empty($kursus)){
                        $no = 1;
                        foreach($kursus as $x){ ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x->kode_kursus ?></td>
                                <td><?php echo $x->nama_kursus ?></td>
                                <td><?php echo $x->alokasi_waktu ?></td>
                                <td><?php echo $x->deskripsi_singkat ?></td>
                                <td><?php echo $x->deskripsi ?></td>
                                <td><?php echo $x->harga_per_bulan ?></td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo site_url()?>admin/course/edit/<?php echo $x->kode_kursus;?>">Sunting</a>
                                    <a class="dropdown-item" href="<?php echo site_url()?>admin/course/del/<?php echo $x->kode_kursus;?>">Hapus</a>
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
    $("#tableKursus tr").filter(function(){
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


