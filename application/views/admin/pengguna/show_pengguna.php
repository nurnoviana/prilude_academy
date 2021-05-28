<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('home_admin/index')?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                  <div class="container row justify-content-between">
                  <h3>Table Pengguna</h3>
                    <button type="button" class="btn btn-success btn-fw" onclick="location.href='<?php echo site_url('admin/pengguna/input');?>'">
                    <i class="fa fa-plus"></i></button>
                  </div>
                  </div>
                  <div class="card-body">
                  <div id="view">
                    <?php $this->load->view('admin/pengguna/data_table', array('pengguna'=>$pengguna)); ?>
                  </div>
                  <div class="container">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
  </div>
</div>
</main>