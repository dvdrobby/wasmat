<?= $this->include('layouts/dashboard_header') ?>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">

            <!-- /.col (left) -->
            <div class="card card-primary">
                  <div class="card-header">
                        <h3 class="card-title">Form Input Data Pelanggaran di DAS Bengawan Solo</h3>
                  </div>
                  <div class="card-body">
                        <div class="row">
                              <?= $message; ?>
                        </div>
                        <?php echo form_open('auth/register', array("class" => 'card-body')); ?>
                        <!-- Date -->
                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="first_name">Nama Depan<span class="text-danger">*</span></label>
                                          <?php echo form_input($first_name); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="last_name">Nama Belakang</label>
                                          <?php echo form_input($last_name); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="identity">Username<span class="text-danger">*</span></label>
                                          <?php echo form_input($identity); ?>
                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="email">Email<span class="text-danger">*</span></label>
                                          <?php echo form_input($email); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="password">Password<span class="text-danger">*</span></label>
                                          <?php echo form_input($password); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="password_confirm">Password Confirm<span class="text-danger">*</span></label>
                                          <?php echo form_input($password_confirm); ?>
                                    </div>
                              </div>
                        </div>
                        <!-- /.card -->
                        <button type="submit" class="btn btn-primary">Daftarkan</button>
                        <?php echo form_close(); ?>
                        <!-- /.col (right) -->
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