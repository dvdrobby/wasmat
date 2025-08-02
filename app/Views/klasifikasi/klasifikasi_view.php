<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-5">
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
      <div class="col-md-7">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Klasifikasi Pelanggaran</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Jenis Pelanggaran</th>
                  <th>Deskripsi</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-danger">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-warning">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-primary">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-success">90%</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->
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