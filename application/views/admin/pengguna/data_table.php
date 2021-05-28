<div class="container">
  <h6 class="row">Select Number of Rows</h6>
  <div class="form-group">
    <select name="state" id="maxRows" class="form-control" style="width:150px;">
      <option value="5000">Show All</option>
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="50">50</option>
      <option value="75">75</option>
      <option value="100">100</option>
    </select>
  </div>
</div>
<div class="table-responsive">

  <table class="table table-responsive-sm table-bordered table-striped table-sm" id="mytable">
    <thead>
      <tr>
        <th>No. Pengguna</th>
        <th>Status Pengguna</th>
        <th>Email</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Identitas</th>
        <th>Nomor Identitas</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>Provinsi</th>
        <th>ID Jenis Pengguna</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($pengguna)) {
        foreach ($pengguna as $x) { ?>
          <tr>
            <td><?php echo $x->no_pengguna ?></td>
            <td>
              <?php if ($x->is_active == 0) {
                    ?><span class="badge badge-warning">Pengguna Belum Aktif</span>
              <?php
                  } elseif ($x->is_active == 1) { ?>
                <span class="badge badge-success">Pengguna Aktif</span>
              <?php } ?>
            </td>
            <td><?php echo $x->alamat_email ?></td>
            <td><?php echo $x->nama_lengkap ?></td>
            <td><?php echo $x->tempat_lahir ?></td>
            <td><?php echo $x->tanggal_lahir ?></td>
            <td><?php echo $x->jenis_identitas ?></td>
            <td><?php echo $x->no_identitas ?></td>
            <td><?php echo $x->alamat ?></td>
            <td><?php echo $x->jenis_kelamin ?></td>
            <td><?php echo $x->desa ?></td>
            <td><?php echo $x->kecamatan ?></td>
            <td><?php echo $x->kabupaten ?></td>
            <td><?php echo $x->provinsi ?></td>
            <td><?php echo $x->id_jenis_pengguna ?></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo site_url() ?>admin/pengguna/activity/<?php echo $x->no_pengguna; ?>">Aktifkan Pengguna</a>
                  <a class="dropdown-item" href="<?php echo site_url() ?>admin/pengguna/inactivity/<?php echo $x->no_pengguna; ?>">Nonaktifkan Pengguna</a>
                  <a class="dropdown-item" href="<?php echo site_url() ?>admin/pengguna/edit/<?php echo $x->no_pengguna; ?>">Sunting</a>
                  <a class="dropdown-item" href="<?php echo site_url() ?>admin/pengguna/del/<?php echo $x->no_pengguna; ?>">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
      <?php }
      } else {
        echo "<div class=\"alert alert-secondary\" role=\"alert\">
                        <a href=\"#\" class=\"alert-link\">Data tidak ada</a>. Silakan input data terlebih dahulu.
                        </div>";
      }
      ?>
    </tbody>
  </table>

</div>
<div class="pagination-container">
  <nav>
    <ul class="pagination"></ul>
  </nav>
</div>

<script>
  var table = '#mytable';
  $('maxRows').on('change', function() {
    $('.pagination').html('')
    var trnum = 0
    var maxRows = parseInt($(this).val())
    var totalRows = $(table + ' tbody tr').length
    $(table + ' tr:gt(0)').each(function() {
      trnum++
      if (trnum > maxRows) {
        $(this).hide()
      }
      if (trnum <= maxRows) {
        $(this).show()
      }
    })
    if (totalRows > maxRows) {
      var pagenum = Math.ceil(totalRows / maxRows)
      for (var i = 1; i <= pagenum;) {
        $('.pagination').append('<li data-page="' + i + '">\<span>' + i++ + '<span class="sr-only">(current)</span></span>\</li>').show()
      }
    }
    $('.pagination li:first-child').addClass('active')
    $('.pagination li').on('click', function() {
      var pageNum = $(this).attr('data-page')
      var trIndex = 0;
      $('.pagination li').removeClass('active')
      $(this).addClass('active')
      $(table + ' tr:gt(0)').each(function() {
        trIndex++
        if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
          $(this).hide()
        } else {
          $(this).show()
        }
      })
    })
  })
  $(function() {
    $('table tr:eq(0)').prepend('<th>No</th>')
    var no = 0;
    $('table tr:gt(0)').each(function() {
      no++
      $(this).prepend('<td>' + no + '</td>')
    })
  })
</script>