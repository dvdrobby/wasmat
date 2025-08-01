<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <!-- /.col (left) -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Data Pelanggaran di DAS Bengawan Solo</h3>
      </div>
      <form class="card-body" enctype="multipart/form-data" action="">
        <!-- Date -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_pelanggaran">Nama Pelanggaran</label>
              <input type="text" class="form-control" id="nama_pelanggaran" name="nama_pelanggaran" placeholder="Nama Pelanggaran">
            </div>

          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="reservationdate">Tanggal Surat</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="kota">Kota</label>
              <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>SP</label>
              <select disabled class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                <option selected="selected">SP 1</option>
                <option>SP 2</option>
                <option>SP 3</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="tindak_lanjut">Tindak Lanjut</label>
              <input disabled type="text" class="form-control" id="tindak_lanjut" name="tindak_lanjut" placeholder="Tindak Lanjut">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputFile">Unggah Dokumen Pendukung</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <!-- <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div> -->
              </div>
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