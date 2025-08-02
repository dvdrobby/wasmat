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
          <div class="dt-buttons btn-group flex-wrap">
            <a href="<?= base_url() ?>pelanggaran/tambah" class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Tambah</span></a>
            <button class="btn btn-primary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <!-- <div class="fw-light">Search:</div> -->
          <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama Pelanggaran</th>
              <th>Kota</th>
              <th>SP</th>
              <th>PPNS</th>
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

<script>
  $(function() {
    $("#jsGrid1").jsGrid({
      height: "100%",
      width: "100%",

      sorting: true,
      paging: true,

      data: db.clients,

      fields: [{
          name: "name",
          title: "Nama Pelanggaran",
          type: "text",
          width: 150
        },
        {
          name: "kota",
          title: "Kota",
          type: "text",
          width: 100
        },
        {
          name: "sp",
          title: "SP",
          type: "number",
          width: 30
        },
        {
          name: "ppns",
          title: "PPNS",
          type: "text",
          width: 100
        },
        {
          name: "action",
          type: "checkbox",
          title: "Tindakan",
          width: 50
        }
      ]
    });
  });
</script>
<?= $this->include('layouts/closing_tag') ?>