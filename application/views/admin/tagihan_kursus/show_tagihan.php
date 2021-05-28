<main class="main">
<ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('home_admin/index') ?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Agenda Pertemuan</li>
        </ol>
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="col-lg-12">
                <div class="card">
                <ul class="nav nav-tabs row justify-content-center" id="tab-tagihan" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#tagihan-semua" data-toggle="tab" role="tab" aria-controls="tagihan-semua" aria-selected="true">Tagihan Kursus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tagihan-belum" data-toggle="tab" role="tab" aria-controls="tagihan-belum" aria-selected="false">Tagihan Belum Dibayar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tagihan-tempo" data-toggle="tab" role="tab" aria-controls="tagihan-tempo" aria-selected="false">Tagihan Jatuh Tempo</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="tagihan-semua" class="tab-pane fade show active" id="tabpanel" aria-labelledby="tagihan-semua">
                    <div class="card-header">
                        <div class="container">
                          <div class="row justify-content-between">
                            <span><h2>Tagihan Kursus</h2></span>
                            <button type="button" class="btn btn-icons btn-rounded btn-success" onclick="location.href='<?php echo site_url('admin/tagihan/input'); ?>'">
                            <i class="fa fa-plus-square"></i></button> 
                          </div>
                        </div>
                    </div>
                      <div class="card-body">
                      <?php $this->load->view('admin/tagihan_kursus/data_table', array('tagihan'=>$tagihan)); ?>
                      </div>
                  </div>
                  <div id="tagihan-belum" class="tab-pane fade" id="tabpanel" aria-labelledby="tagihan-belum">
                    <div class="card-header">
                      <div class="container">
                        <div class="row justify-content-between">
                          <span><h2>Tagihan Belum Dibayar</h2></span>
                          <button type="button" class="btn btn-icons btn-rounded btn-success" onclick="location.href='<?php echo site_url('admin/tagihan/input'); ?>'">
                          <i class="fa fa-plus-square"></i></button> 
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                    <?php $this->load->view('admin/tagihan_kursus/data_table_belum', array('tagihan'=>$tagihan)); ?>
                    </div>
                  </div>
                  <div id="tagihan-tempo" class="tab-pane fade" id="tabpanel" aria-labelledby="tagihan-tempo">
                    <div class="card-header">
                      <div class="container">
                        <div class="row justify-content-between">
                          <span><h2>Tagihan Jatuh Tempo</h2></span>
                          <button type="button" class="btn btn-icons btn-rounded btn-success" onclick="location.href='<?php echo site_url('admin/tagihan/input'); ?>'">
                          <i class="fa fa-plus-square"></i></button> 
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                    <?php $this->load->view('admin/tagihan_kursus/data_table_tempo', array('tagihan'=>$tagihan)); ?>
                    </div>
                  </div>

                </div>

                </div>
              </div>
</div>
</div>
</main>
