<?php 
$this->load->view('templates/header');
?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Customer</h1>
                </div>
                <!--End Page Header -->
            </div>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php
		echo anchor(site_url("Buku/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama buku</th>
				<th>Penerbit</th>
				<th>Penulis</th>
				<th>ISBN</th>
				<th>Tgl_Terbit</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($Buku as $key => $value) {?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->nama_buku; ?></td>
					<td><?php echo $value->penerbit; ?></td>
					<td><?php echo $value->penulis; ?></td>
					<td><?php echo $value->isbn; ?></td>
					<td><?php echo $value->tgl_terbit; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td>
						<?php echo anchor(site_url('Buku/edit/'.$value->id),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('Buku/delete/'.$value->id),
'<i class="fa fa-trash"></i>',
'class="btn btn-danger"'); ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php 
$this->load->view('templates/footer');
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>