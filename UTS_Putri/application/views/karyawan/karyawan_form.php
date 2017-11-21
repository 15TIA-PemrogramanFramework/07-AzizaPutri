<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Karyawan</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>ID karyawan</label>
		<input type="text" placeholder="Masukan ID Karyawan" value="<?php echo $id_karyawan; ?>" class="form-control" name="id_karyawan">
	</div>
	<div class="form-group">
		<label>Nama Karyawan</label>
		<input type="text" placeholder="Masukan Nama Karyawan" value="<?php echo $nama_karyawan; ?>" class="form-control" name="nama_karyawan">
	</div>

	<div class="form-group">
		<label>No.HP</label>
		<input type="text" placeholder="Masukan No.HP " value="<?php echo $no_hp; ?>" class="form-control" name="no_hp">
	</div>

	<div class="form-group">
		<label>Status</label>
		<input type="text" placeholder="Masukan Status Karyawan" value="<?php echo $status; ?>" class="form-control" name="status">
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder="Masukkan Jenis Kelamin " value="<?php echo $jenis_kelamin; ?>" class="form-control" name="jenis_kelamin">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat Karyawan " value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	

		
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Karyawan') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>