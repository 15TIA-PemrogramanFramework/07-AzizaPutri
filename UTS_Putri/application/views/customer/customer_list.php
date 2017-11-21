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
		echo anchor(site_url("customer/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Customer</th>
				<th>Nama Customer</th>
				<th>Password</th>
				<th>No HP</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customer as $key => $value) {?>
				<tr>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->nama_customer; ?></td>
					<td><?php echo $value->password; ?></td>
					<td><?php echo $value->no_hp; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td>
						<?php echo anchor(site_url('customer/edit/'.$value->username),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('customer/delete/'.$value->username),
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