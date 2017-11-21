<?php 
$this->load->view('templates/header');
?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Jenis Event</h1>
                </div>
                <!--End Page Header -->
            </div>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php
		echo anchor(site_url("jenisevent/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Event</th>
				<th>Nama Event</th>
				<th>Ukuran Tempat</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($jenisevent as $key => $value) {?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->id_event; ?></td>
					<td><?php echo $value->nama_event; ?></td>
					<td><?php echo $value->ukuran_tempat; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td>
						<?php echo anchor(site_url('jenisevent/edit/'.$value->id_event),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('jenisevent/delete/'.$value->id_event),
'<i class="fa fa-trash">Delete</i>',
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