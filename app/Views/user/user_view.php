<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Data Pelanggaran</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="dt-buttons flex-wrap">
            <a href="<?= base_url() ?>auth/register" class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Tambah</span></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
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
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>

              <td><span class="badge bg-danger">55%</span></td>
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
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->

<!-- Footer -->
<?= $this->include('layouts/dashboard_footer') ?>

<?= $this->include('layouts/closing_tag') ?>