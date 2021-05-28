
<main class="main">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url('home_admin/index')?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Kursus</li>
          <!-- Breadcrumb Menu-->
        </ol>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
              <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row">
                    <h2>Table Kursus</h2>
                    </div>
                </div>
                <div class="card-body">
                <div class="container">
                  <div class="d-flex flex-row-reverse">
                    <button type="button" class="btn btn-primary btn-fw" onclick="add_kursus()">
                    <i class="fa fa-file"></i> Tambahkan</button>
                    <button class="btn btn-secondary" onclick="reload_table()">
                    <i class="fa fa-rotate-right"></i> Reload</button>
                  </div>                      
                </div>
                  <div class="card-body">
                  <div class="table-responsive">
                  <table id="table" class="table table-responsive-md table-bordered table-striped table-md">
                                        <thead>
                                          <tr>
                                            <th>Kode Kursus</th>
                                            <th>Nama Kursus</th>
                                            <th>Alokasi Waktu</th>
                                            <th>Deskripsi Singkat</th>
                                            <th>Deskripsi</th>
                                            <th>Harga Per Bulan</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                      <tbody>
                                      </tbody>
                                        <tfoot>
                                          <tr>
                                            <th>Kode Kursus</th>
                                            <th>Nama Kursus</th>
                                            <th>Alokasi Waktu</th>
                                            <th>Deskripsi Singkat</th>
                                            <th>Deskripsi</th>
                                            <th>Harga Per Bulan</th>
                                            <th>Actions</th>
                                          </tr>
                                        </tfoot>
                      </table>
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

<script type="text/javascript">
 
var save_method; //for save method string
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        "ajax": {
            "url": "<?php echo site_url('admin/kursus/ajax_list') ?>",
            "type": "POST"
        },
 
        "columnDefs": [
        { 
            "targets": [ -1 ],
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });
 
});
 
 
 
function add_kursus()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Kursus'); // Set Title to Bootstrap modal title
}
 
function edit_kursus(kode_kursus)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('admin/kursus/ajax_edit/')?>/" + kode_kursus,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="kode_kursus"]').val(data.kode_kursus);
            $('[name="nama_kursus"]').val(data.nama_kursus);
            $('[name="alokasi_waktu"]').val(data.alokasi_waktu);
            $('[name="deskripsi_singkat"]').val(data.deskripsi_singkat);
            $('[name="deskripsi"]').val(data.deskripsi);
            $('[name="harga_per_bulan"]').val(data.harga_per_bulan);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Kursus'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('admin/kursus/ajax_add')?>";
    } else {
        url = "<?php echo site_url('admin/kursus/ajax_update')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function delete_kursus(kode_kursus)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('admin/kursus/ajax_delete')?>",
            type: "POST",
            dataType: "JSON",
            data:{
                kode_kursus:kode_kursus
            },
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
 
</script>
 
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close align-content-end" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kursus</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-7">Kode Kursus</label>
                            <div class="col-md-9">
                                <input name="kode_kursus" placeholder="Kode Kursus" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-7">Nama Kursus</label>
                            <div class="col-md-9">
                                <input name="nama_kursus" placeholder="Nama Kursus" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-7">Alokasi Waktu</label>
                            <div class="col-md-5 input-group">
                                <input name="alokasi_waktu" placeholder="Alokasi Waktu" class="form-control" type="text">
                                <div class="input-group-append">
                                <span class="input-group-text">jam</span>
                                </div>
                                <span class="help-block">2 digit</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-7">Deskripsi Singkat</label>
                            <div class="col-md-9">
                                <input name="deskripsi_singkat" placeholder="Deskripsi Singkat" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-7">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea name="deskripsi" placeholder="Deskripsi" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                      <div class="form-group">
                          <label for="InputHarga">Harga per Bulan</label>
                          <div class="col-md-6 input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" name="harga_per_bulan" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                              <span class="input-group-text">,00</span>
                            </div>
                          </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->