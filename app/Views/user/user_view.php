<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Data User</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-md-12"><?= $message; ?></div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="dt-buttons flex-wrap">
            <a href="<?= base_url() ?>auth/register" class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Tambah</span></a>
          </div>
        </div>
      </div>
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

          <?php $i = 1 ?>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= $user->username ?></td>
              <td><?= $user->email ?></td>
              <td><?= $user->name ?></td>
              <td>
                <a class="badge bg-info" href="<?= base_url() ?>auth/edit_user/<?= $user->user_id ?>">Edit</a>
                <a class="badge bg-danger" href="" data-toggle="modal" data-target="#modal-default">Hapus</button>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
      <!-- Modal Box -->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Yakin untuk menghapus User?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Data user yang dihapus tidak bisa dikembalikan.</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <form method="post" action="<?= base_url() ?>user/delete/<?= $user->user_id ?>">
                <?= csrf_field() ?>
                <input type="hidden" value="DELETE" name="_method">
                <button type="submit" class="btn btn-primary">Hapus</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div> -->
    </div>
    <?php // echo $pager->links() 
    ?>
    <?php echo $pager->simplelinks('users_groups', 'custom_pagination')
    ?>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
<!-- /.content -->

<!-- Footer -->
<?= $this->include('layouts/dashboard_footer') ?>
<?= $this->include('layouts/javascript_loader') ?>
<?= $this->include('layouts/closing_tag') ?>