<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Pemesanan</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<input type="hidden" placeholder="Masukan ID Pemesanan" value="<?php echo $id_pemesanan; ?>" class="form-control" name="id_pemesanan">
	</div>
	<div class="form-group">
		<input type="hidden" placeholder="Masukan Username" value="<?php echo $this->session->userdata('username'); ?>" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>Makanan</label>
		<select class="form-control" name="id_makanan">
			<?php foreach ($id_makanan as $key => $value) { ?>
				<option value="<?php echo $value->id_makanan; ?>"><?php echo $value->pesan_makanan; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Minuman</label>
		<select class="form-control" name="id_minuman">
			<?php foreach ($id_minuman as $key => $value) { ?>
				<option value="<?php echo $value->id_minuman; ?>"><?php echo $value->pesan_minuman; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Jumlah Pemesanan</label>
		<input type="text" placeholder="Masukan Jumlah Pemesanan" value="<?php echo $total_pemesanan; ?>" class="form-control" name="total_pemesanan">
	</div>	
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pemesanan') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>