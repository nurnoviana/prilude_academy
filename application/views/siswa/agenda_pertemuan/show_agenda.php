<main class="main">
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 50px;">
    <div class="animated fadeIn">
<div class="content-wrapper">
          <div class="row justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-header">
                <div class="container">
                  <h2 class="h2 text-center">Agenda Pertemuan Siswa</h2>
                </div>              
              </div>
                  <div class="card-body">


                  <div id="view">
                      <?php $this->load->view('siswa/agenda_pertemuan/data_table', array('agenda_pertemuan'=>$agenda_pertemuan)); ?>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>