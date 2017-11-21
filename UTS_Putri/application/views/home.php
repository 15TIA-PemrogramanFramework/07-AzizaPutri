<?php $this->load->view('templates/header');?>
    <div>
    	<h2>
    		Home
    	</h2>
    	Selamat datang, <?php echo $this->session->userdata('username'); ?>
    </div>
<?php $this->load->view('templates/footer'); ?>