<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengajar | Portal Bimbel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/skin-yellow.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TA</b>BEL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PORTAL</b>BIMBEL</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('assets/img/ulma.jpg') ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/ulma.jpg') ?>" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/ulma.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA PENGAJAR</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
        <li><a href="<?php echo base_url('pengajar/bimbingan') ?>"><i class="fa fa-group"></i> <span>Bimbingan Belajar</span></a></li>
        <li><a href="<?php echo base_url('pengajar/jadwal') ?>"><i class="fa fa-calendar"></i> <span>Jadwal Bimbingan</span></a></li>
        <li><a href="<?php echo base_url('pengajar/reward') ?>"><i class="fa fa-trophy"></i> <span>Penghargaan</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php if (isset($page)AND($page=='jadwal')) {?>
    <section class="content-header">
      <h1>
        JADWAL
        <small>Pengajar Bimbel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Jadwal Mengajar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <?php }else if(isset($page)AND($page=='bimbingan')){ ?>
    <section class="content-header">
      <h1>
        DAFTAR GRUP BIMBINGAN
        <small>Pengajar Bimbel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Daftar Membership bimbel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <p class="box-title">Daftar jadi membership</p>
          <form class="pull-right form-inline" method="post" action="<?php echo base_url('pengajar/bimbingan/index') ?>">
            <div class="input-group">
              <input type="text" name="txtCari" class="form-control" placeholder="type here">
              <span class="input-group-btn"><button type="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i></button></span>
            </div>
            <a href="<?php echo base_url('pengajar/bimbingan') ?>" class="btn btn-success btn-flat"><i class="fa fa-list"></i> Semua Data</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-responsive table-condensed table-hover table-striped">
            <thead>
              <tr>
                <td>#</td>
                <td>Nama Bimbel</td>
                <td>Alamat</td>
                <td>Telepon</td>
                <td>Status</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($databimbel as $rowbimbel): ?>
                <tr>
                  <td><?php echo $rowbimbel->ID_BIMBEL ?></td>
                  <td><?php echo $rowbimbel->NAMA_BIMBEL ?></td>
                  <td><?php echo $rowbimbel->ALAMAT_BIMBEL ?></td>
                  <td><?php echo $rowbimbel->TELEPON_BIMBEL ?></td>
                  <td><?php echo $rowbimbel->STATUS_BIMBEL ?></td>
                  <td>
                    <a href="<?php echo base_url('pengajar/bimbingan/detail?bimbelku='.$rowbimbel->ID_BIMBEL) ?>" class="btn btn-info btn-flat btn-xs"><i class="fa fa-search"></i> Selengkapnya</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <?php }else if(isset($page)AND($page=='penghargaan')){ ?>
    <section class="content-header">
      <h1>
        REWARD
        <small>Pengajar Bimbel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Penghargaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <?php }else if(isset($page)AND($page=='detailBimbel')){ ?>
    <section class="content-header">
      <h1>
        DETAIL BIMBEL
        <small>Pengajar Bimbel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Detail Bimbingan Belajar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><i class="fa fa-leaf"></i> <?php echo $bimbelku->NAMA_BIMBEL ?></h3>
              <h5 class="widget-user-desc"><i class="fa fa-user-secret"></i> <?php echo $bimbelku->NAMA_LENGKAP ?></h5>
              <h5 class="widget-user-desc"><i class="fa fa-home"></i> <?php echo $bimbelku->ALAMAT_BIMBEL ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url('assets/img/logo.png') ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">RATING</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">TENAGA AHLI</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">JADWAL</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>

    </section>
    <?php }else{ ?>
    <section class="content-header">
      <h1>
        BERANDA
        <small>Pengajar Bimbel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('pengajar/main') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <?php } ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>assets/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
