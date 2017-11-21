<?php $this->load->view('templates/header'); ?>

<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Buku</label>
		<input type="text" placeholder="Masukan Nama buku" value="<?php echo $nama_buku; ?>" class="form-control" name="nama_buku">
	</div>

	<div class="form-group">
		<label>Penerbit</label>
		<input type="text" placeholder="Masukan nama penerbit " value="<?php echo $penerbit; ?>" class="form-control" name="penerbit">
	</div>

	<div class="form-group">
		<label>Penulis</label>
		<input type="text" placeholder="Masukan nama penulis " value="<?php echo $penulis; ?>" class="form-control" name="penulis">
	</div>

	<div class="form-group">
		<label>ISBN</label>
		<input type="text" placeholder="isbn " value="<?php echo $isbn; ?>" class="form-control" name="isbn">
	</div>
	<div class="form-group">
		<label>Tgl_terbit</label>
		<input type="text" placeholder="Masukan taggal terbit " value="<?php echo $tgl_terbit; ?>" class="form-control" name="tgl_terbit">
	</div>
	<div class="form-group">
		<label>harga</label>
		<input type="text" placeholder="50.000 " value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Buku') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer');?>