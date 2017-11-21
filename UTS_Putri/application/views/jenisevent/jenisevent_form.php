<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Jenis Event</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Id Event</label>
		<input type="text" placeholder="Masukan Id Event" value="<?php echo $id_event; ?>" class="form-control" name="id_event">
	</div>
	<div class="form-group">
		<label>Masukkan Nama Event</label>
		<input type="text" placeholder="Masukan Nama Event" value="<?php echo $nama_event; ?>" class="form-control" name="nama_event">
	</div>


	<div class="form-group">
		<label>Ukuran Tempat</label>
		<input type="text" placeholder="Masukan Ukuran Tempat " value="<?php echo $ukuran_tempat; ?>" class="form-control" name="ukuran_tempat">
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="text" placeholder="Total Harga" value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>
	

		
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('jenisevent') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>