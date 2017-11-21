<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aziza Putri</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/') ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="<?php echo base_url('assets/') ?>assets/css/style.css" rel="stylesheet" />
      <link href="<?php echo base_url('assets/') ?>assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <h1><STRONG>DOPE!</STRONG></h1>
              <h3> Event Organizer</h3>
              <p><?php echo tanggal(); ?></p>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In </h3>
                    </div>
                    <div class="panel-body">
                        <form action="#" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="alert alert-danger"><center><strong><a href="<?php echo site_url('register'); ?>">Register</a></strong></center>
                    </div>
                <?php echo $this->session->flashdata('Gagal'); ?>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('assets/') ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url('assets/') ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
