<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Customer</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="text" placeholder="Masukan Nama Customer" value="<?php echo $nama_customer; ?>" class="form-control" name="nama_customer">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" placeholder="Masukan Username" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="text" placeholder="Masukan password " value="<?php echo $password; ?>" class="form-control" name="password">
	</div>

	<div class="form-group">
		<label>No HP</label>
		<input type="text" placeholder="Masukan No Hp " value="<?php echo $no_hp; ?>" class="form-control" name="no_hp">
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat Anda " value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	

		
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>