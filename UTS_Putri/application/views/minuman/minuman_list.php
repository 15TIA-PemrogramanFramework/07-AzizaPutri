<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Minuman</h1>
                </div>
                <!--End Page Header -->
            </div>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php if($status == 'admin') {
		echo anchor(site_url("minuman/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"'); }?>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID minuman</th>
				<th>Pesan Minuman</th>
				<th>Harga Perporsi</th>
				<?php if($status == 'admin') { ?>
				<th>Aksi</th>
				<?php }	 ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($minuman as $key => $value) {?>
				<tr>
					<td><?php echo $value->id_minuman; ?></td>
					<td><?php echo $value->pesan_minuman; ?></td>
					<td><?php echo $value->harga; ?></td>
					<?php if($status == 'admin') { ?>
					<td>
						<?php echo anchor(site_url('minuman/edit/'.$value->id_minuman),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('minuman/delete/'.$value->id_minuman),
'<i class="fa fa-trash">Delete</i>',
'class="btn btn-danger"'); ?>
<?php } ?>
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