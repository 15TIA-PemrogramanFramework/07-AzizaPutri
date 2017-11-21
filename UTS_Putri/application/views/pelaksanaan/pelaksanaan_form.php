<?php $this->load->view('templates/header'); ?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Form Pelaksanaan</h1>
                </div>
                <!--End Page Header -->
            </div>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<input type="hidden" placeholder="Masukan ID Pelaksanaan" value="<?php echo $id_pelaksanaan; ?>" class="form-control" name="id_pelaksanaan">
	</div>
	<div class="form-group">
		<input type="hidden" placeholder="Masukan Username" value="<?php echo $this->session->userdata('username'); ?>" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label>Nama Event</label>
		<select class="form-control" name="id_event">
			<?php foreach ($id_event as $key => $value) { ?>
				<option value="<?php echo $value->id_event; ?>"><?php echo $value->nama_event; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>Tanggal Peminjaman</label>
		<input type="date" placeholder="Masukan tgl_peminjaman" value="<?php echo $tgl_peminjaman; ?>" class="form-control" name="tgl_peminjaman">
	</div>		
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pelaksanaan') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>