<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Minuman</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<input type="hidden" placeholder="Masukan ID minuman" value="<?php echo $id_minuman; ?>" class="form-control" name="id_minuman">
	</div>
	<div class="form-group">
		<label>Pesan minuman</label>
		<input type="text" placeholder="Masukan Minuman" value="<?php echo $pesan_minuman; ?>" class="form-control" name="pesan_minuman">
	</div>

	<div class="form-group">
		<label>Harga Perporsi</label>
		<input type="text" placeholder="Masukan Harga " value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>

	
	

		
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('minuman') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>