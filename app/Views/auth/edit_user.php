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
                        <?php echo form_open(uri_string(), array("class" => 'card-body')); ?>
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
                        </div>
                        <div class="row">

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
                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                          <?php foreach ($groups as $group): ?>

                                                <?php

                                                $gID = $group['id'];
                                                $checked = null;
                                                $item = null;
                                                foreach ($currentGroups as $grp) {
                                                      if ($gID == $grp->id) {
                                                            $checked = ' checked="checked"';
                                                            break;
                                                      }
                                                }
                                                ?>
                                                <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>

                                                <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>

                                          <?php endforeach ?>
                                    </div>
                              </div>
                              <?php echo form_hidden('id', $user->id); ?>
                        </div>
                        <!-- /.card -->
                        <div class="row">
                              <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                              </div>
                        </div>
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