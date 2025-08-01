<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Klasifikasi Pelanggaran</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <a href="<?= base_url() ?>klasifikasi/tambah" class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Tambah</span></a>
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

      data: [],

      fields: [{
          name: "name",
          title: "Jenis Pelanggaran",
          type: "text",
          width: 150
        },
        {
          name: "deskripsi",
          title: "Deskripsi",
          type: "text",
          width: 200
        },
        {
          name: "action",
          title: "Action",
          type: "text",
          width: 50
        }
      ]
    });
  });
</script>
<?= $this->include('layouts/closing_tag') ?>