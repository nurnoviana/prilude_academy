<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                <div class="container-fluid row justify-content-between">
                    <h2 class="h2">Tabel Agenda</h2>
                        <button type="button" class="btn btn-icons btn-rounded btn-success" onclick="location.href='<?php echo site_url('mentor/agenda/input');?>'">
                        <i class="fa fa-plus-square"></i></button>
                    </div>
                </div>
                <div class="card-body">

                  <div id="view">
                    <?php $this->load->view('pengajar/agenda_pertemuan/table', array('agenda_pertemuan'=>$agenda_pertemuan)); ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>