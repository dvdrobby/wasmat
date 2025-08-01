<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-6">
        <!-- /.col (left) -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Input Data Pelapor</h3>
          </div>
          <form class="card-body" enctype="text" action="" method="post">
            <!-- Date -->
            <div class="form-group">
              <label for="nama_pelapor">Nama Pelapor</label>
              <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Nama Pelapor">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Tuliskan keterangan disini..."></textarea>
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