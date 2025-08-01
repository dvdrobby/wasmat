<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-6">
        <!-- /.col (left) -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Input Data Klasifikasi Pelanggaran</h3>
          </div>
          <form class="card-body" enctype="text" action="" method="post">
            <!-- Date -->
            <div class="form-group">
              <label for="nama_peringatan">Nama Jenis Pelanggaran</label>
              <input type="text" class="form-control" id="nama_peringatan" name="nama_peringatan" placeholder="Nama Surat Peringatan">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Tuliskan deskripsi disini..."></textarea>
            </div>
            <!-- /.card -->
            <button type="submit" class="btn btn-primary">Tambahkan</button>
          </form>
          <!-- /.col (right) -->
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->


<?= $this->include('layouts/dashboard_footer') ?>
<!-- jsGrid -->
<?= $this->include('layouts/javascript_loader') ?>
<?= $this->include('layouts/closing_tag') ?>