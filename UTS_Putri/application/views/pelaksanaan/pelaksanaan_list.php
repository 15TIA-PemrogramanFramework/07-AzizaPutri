<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');?>
<!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Pelaksanaan</h1>
                </div>
                <!--End Page Header -->
            </div>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php
		echo anchor(site_url("pelaksanaan/tambah"),'<i class ="fa fa-plus"></i>Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Event</th>
				<th>Tanggal Peminjaman</th>
				<th>Nama Customer</th>
				<th>Nomor HP</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pelaksanaan as $key => $value) {?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->nama_event; ?></td>
					<td><?php echo $value->tgl_peminjaman; ?></td>
					<td><?php echo $value->nama_customer; ?></td>
					<td><?php echo $value->no_hp; ?></td>
					<td>
						<?php if($status == 'admin') { ?>
						<?php echo anchor(site_url('pelaksanaan/Update/'.$value->id_pelaksanaan),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>
						<?php } ?>
<?php echo anchor(site_url('pelaksanaan/delete/'.$value->id_pelaksanaan),
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