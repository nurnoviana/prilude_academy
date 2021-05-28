<main class="main">
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Sunting Agenda Pertemuan</h4>
                  <p class="card-description">
                    Tambahkan Data Agenda Pertemuan
                  </p>
                  <form class="forms-sample" action="<?php echo site_url("admin/agenda/update") ?>" method="post">
                    <div class="form-group">
                      <label for="InputIDAgenda">ID Agenda Pertemuan</label>
                      <input readonly="readonly" name="id_agenda" class="form-control" id="InputIDAgenda" value="<?=$agenda_pertemuan->id_agenda_pertemuan?>">
                    </div>
                    <div class="form-group">
                      <label for="InputPertemuan">Pertemuan Ke</label>
                      <input type="text" name="pertemuan_ke" class="form-control" id="InputPertemuan" value="<?=$agenda_pertemuan->pertemuan_ke ?>" >
                    </div>
                    <div class="form-group">
                      <label for="InputJudul">Judul Materi</label>
                      <input type="text" name="judul_materi" class="form-control" id="InputJudul" value="<?=$agenda_pertemuan->judul_materi ?>" >
                    </div>
                    <div class="form-group">
                      <label for="InputDeskripsi">Deskripsi Materi</label>
                      <input type="text" name="deskripsi_materi" class="form-control" id="InputDeskripsi" value="<?= $agenda_pertemuan->deskripsi_materi ?>" >
                    </div>
                    <div class="form-group">
                        <label for="link_modul">Link Modul</label>
                        <input name="link_modul" class="form-control" id="link_modul" value="<?= $agenda_pertemuan->link_modul ?>">
                    </div>
                    <div class="form-group">
                      <label for="NamaKursus">Nama Kursus</label>
                      <select class="form-control form-control-md" name="nama_kursus" id="NamaKursus" >
                      <?php 
                        foreach($kursus->result() as $x){
                            echo "<option value='".$x->kode_kursus."' selected>".$x->nama_kursus."</option>";
                        }
                        ?>                      
                        </select>
                    </div>             
                         <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                         <button class="btn btn-light" onclick="location.href='<?php echo site_url("admin/agenda/index"); ?>'">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
</div>
</main>
<script>
$(()=>{
    $('#NamaKursus').val('<?=$agenda_pertemuan->kode_kursus?>');
})
</script>
