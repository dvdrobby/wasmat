<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <!-- /.col (left) -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Data Surat Peringatan</h3>
      </div>
      <form class="card-body" enctype="multipart/form-data" action="">
        <!-- Date -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_peringatan">Nama Surat Peringatan</label>
              <input type="text" class="form-control" id="nama_peringatan" name="nama_peringatan" placeholder="Nama Surat Peringatan">
            </div>

          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="reservationdate">Rentang Hari</label>
              <input type="number" class="form-control" id="range" name="range" placeholder="Jumlah hari" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="kota">Deskripsi</label>
              <textarea type="text" class="form-control" id="kota" name="kota" placeholder="Tuliskan deskripsi disini..."></textarea>
            </div>
          </div>
        </div>
        <!-- /.card -->
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </form>
      <!-- /.col (right) -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->


<?= $this->include('layouts/dashboard_footer') ?>
<!-- jsGrid -->
<?= $this->include('layouts/javascript_loader') ?>
<?= $this->include('layouts/closing_tag') ?>