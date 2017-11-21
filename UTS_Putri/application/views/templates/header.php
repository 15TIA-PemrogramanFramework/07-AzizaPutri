<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aziza | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/') ?>/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/') ?>/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('customer') ?>">
                   <h3><STRONG>DOPE!</STRONG> Event Organizer</h3>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"> Hi, <?php echo $this->session->userdata('username');?> </i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        
                        
                        <li><a href="<?php echo site_url('login/Logout') ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?php echo base_url('assets/') ?>/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $this->session->userdata('username');?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <?php 
                    $status = $this->session->userdata('status');
                    if ($status == 'admin') {
                    ?>
                    <li class="selected">
                        <a href="<?php echo site_url('customer') ?>"><i class="fa fa-dashboard fa-fw"></i>Customer</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('jenisevent') ?>"><i class="fa fa-dashboard fa-fw"></i>Jenis Event</a>
                    </li>
                    <li class="selected">
                        <a href="<?php echo site_url('pemesanan') ?>"><i class="fa fa-dashboard fa-fw"></i>Pemesanan</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('makanan') ?>"><i class="fa fa-dashboard fa-fw"></i>Makanan</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('minuman') ?>"><i class="fa fa-dashboard fa-fw"></i>Minuman</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('karyawan') ?>"><i class="fa fa-dashboard fa-fw"></i>Karyawan</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('pelaksanaan') ?>"><i class="fa fa-dashboard fa-fw"></i>Pelaksanaan</a>
                    </li>
                    <?php } 
                    else {
                    ?>
                     <li class="selected">
                        <a href="<?php echo site_url('makanan') ?>"><i class="fa fa-dashboard fa-fw"></i>Makanan</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('minuman') ?>"><i class="fa fa-dashboard fa-fw"></i>Minuman</a>
                    </li>
                    <li class="selected">
                        <a href="<?php echo site_url('pemesanan') ?>"><i class="fa fa-dashboard fa-fw"></i>Pemesanan</a>
                    </li>
                     <li class="selected">
                        <a href="<?php echo site_url('pelaksanaan') ?>"><i class="fa fa-dashboard fa-fw"></i>Pelaksanaan</a>
                    </li>
                    <?php } ?>
                        
                        <!-- second-level-items -->
                    </li>
                   
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        
