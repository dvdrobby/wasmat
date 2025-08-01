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
      <div id="jsGrid1"></div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->

<!-- Footer -->
<?= $this->include('layouts/dashboard_footer') ?>


<!-- jsGrid -->
<?= $this->include('layouts/javascript_loader') ?>

<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>

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