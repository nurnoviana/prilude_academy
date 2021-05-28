<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('home_admin/index') ?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Kursus</li>
        </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-header">
                  <div class="container">
                    <div class="row justify-content-between">
                    <h2 class="h2">Daftar Kursus</h2>
                    <button class="btn btn-icons btn-round btn-success" type="button" onclick="location.href='<?php echo site_url('admin/course/input');?>'">
                      <i class="fa fa-plus-square"></i></button>                    
                    </div>
                  </div>
              </div>
                <div class="card-body">
                    <div class="view">
                      <?php $this->load->view('admin/kursus/data_table', array('kursus'=>$kursus)); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</main>