<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <?php $this->load->view('admin/partials/header'); ?> 
  <!-- Page level plugin CSS-->
  <!-- Custom styles for this template-->

  <?php $this->load->view('admin/partials/navbar'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=admin_url('user')?>">Users</a>
        </li>
        <li class="breadcrumb-item active">Create User</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Create User</div>
        <div class="card-body">
            <form action="<?=base_url('secretadmin/user/store')?>" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="username">Username</label>
                  <input type="text" maxlength="255" class="form-control" id="username" placeholder="Username" name="username" value="<?=(!empty(set_value('username')))? htmlspecialchars(set_value('username')):'';?>">
                  <?php echo form_error('username') ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" maxlength="255" class="form-control" id="email" placeholder="Email" name="email" required value="<?=(!empty(set_value('email')))? htmlspecialchars(set_value('email')):'';?>">
                  <?php echo form_error('email') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" maxlength="255" class="form-control" id="password" placeholder="Password" name="password" required>
                  <?php echo form_error('password') ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="password_conf">Konfirmasi Password</label>
                  <input type="password" maxlength="255" class="form-control" id="password_conf" placeholder="Konfirmasi Password" name="password_conf" required>
                  <?php echo form_error('password_conf') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname">Firstname</label>
                  <input type="text" maxlength="255" class="form-control" id="firstname" placeholder="Firstname" name="firstname" required value="<?=(!empty(set_value('firstname')))? htmlspecialchars(set_value('firstname')):'';?>">
                  <?php echo form_error('firstname') ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">Lastname</label>
                  <input type="text" maxlength="255" class="form-control" id="lastname" placeholder="Lastname" name="lastname" required value="<?=(!empty(set_value('lastname')))? htmlspecialchars(set_value('lastname')):'';?>">
                  <?php echo form_error('lastname') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="tempat-lahir">Tempat Lahir</label>
                  <input type="text" maxlength="255" class="form-control" id="tempat-lahir" placeholder="Tempat Lahir" name="tempat_lahir" required value="<?=(!empty(set_value('tempat_lahir')))? htmlspecialchars(set_value('tempat_lahir')):'';?>">
                  <?php echo form_error('tempat_lahir') ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="tanggal-lahir">Tanggal Lahir</label>
                  <input type="date" maxlength="6" class="form-control" id="tanggal-lahir" placeholder="Tanggal Lahir" name="tanggal_lahir" required value="<?=(!empty(set_value('tanggal_lahir')))? htmlspecialchars(set_value('tanggal_lahir')):'';?>">
                  <?php echo form_error('tanggal_lahir') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" maxlength="255" id="alamat" placeholder="1234 Main St" value="<?=(!empty(set_value('alamat')))? htmlspecialchars(set_value('alamat')):'';?>"> 
                  <?php echo form_error('alamat') ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="handphone">Handphone</label>
                  <input type="text" minlength="10" maxlength="15" class="form-control" id="handphone" placeholder="082349195324" name="handphone" required value="<?=(!empty(set_value('handphone')))? htmlspecialchars(set_value('handphone')):'';?>">
                  <?php echo form_error('handphone') ?>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
  
    <?php $this->load->view('admin/partials/footer'); ?>
  </div>

</body>
</html>
