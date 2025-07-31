<?= $this->include('layouts/dashboard_header') ?>
<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pelanggaran</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="dt-buttons btn-group flex-wrap">
            <a href="<?= base_url() ?>pelanggaran/tambah" class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Tambah</span></a>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <!-- <div class="fw-light">Search:</div> -->
          <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
        </div>
      </div>
    </div>
    <div id="jsGrid1"></div>
  </div>
  <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->include('layouts/dashboard_footer') ?>