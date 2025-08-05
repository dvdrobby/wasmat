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
                              <div class="col-md-12"><?= $message; ?></div>
                        </div>
                        <?php echo form_open('auth/register', array("class" => 'card-body')); ?>
                        <!-- Date -->
                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="first_name">Nama Depan</label>
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
                                          <label for="identity">Username</label>
                                          <?php echo form_input($identity); ?>
                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="email">Email</label>
                                          <?php echo form_input($email); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="password">Password</label>
                                          <?php echo form_input($password); ?>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="password_confirm">Password Confirm</label>
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


<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open('auth/create_user'); ?>

<p>
      <?php echo form_label(lang('Auth.create_user_fname_label'), 'first_name'); ?> <br />
      <?php echo form_input($first_name); ?>
</p>
<p>
      <?php echo form_label(lang('Auth.create_user_lname_label'), 'last_name'); ?> <br />
      <?php echo form_input($last_name); ?>
</p>

<?php
if ($identity_column !== 'email') {
      echo '<p>';
      echo form_label(lang('Auth.create_user_identity_label'), 'identity');
      echo '<br />';
      echo \Config\Services::validation()->getError('identity');
      echo form_input($identity);
      echo '</p>';
}
?>

<p>
      <?php echo form_label(lang('Auth.create_user_company_label'), 'company'); ?> <br />
      <?php echo form_input($company); ?>
</p>

<p>
      <?php echo form_label(lang('Auth.create_user_email_label'), 'email'); ?> <br />
      <?php echo form_input($email); ?>
</p>

<p>
      <?php echo form_label(lang('Auth.create_user_phone_label'), 'phone'); ?> <br />
      <?php echo form_input($phone); ?>
</p>

<p>
      <?php echo form_label(lang('Auth.create_user_password_label'), 'password'); ?> <br />
      <?php echo form_input($password); ?>
</p>

<p>
      <?php echo form_label(lang('Auth.create_user_password_confirm_label'), 'password_confirm'); ?> <br />
      <?php echo form_input($password_confirm); ?>
</p>


<p><?php echo form_submit('submit', lang('Auth.create_user_submit_btn')); ?></p>

<?php echo form_close(); ?>