<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ta-Bib | Portal bimbel</title>
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
      <span class="logo-mini"><b>Ta</b>Bib</span>
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
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
        <li class="header">MAIN MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
        <li><a href="<?php echo base_url('admin/grup') ?>"><i class="fa fa-link"></i> <span>Grup Bimbel</span></a></li>
        <li><a href="<?php echo base_url('admin/member') ?>"><i class="fa fa-link"></i> <span>Member Portal</span></a></li>
        <li><a href="<?php echo base_url('admin/kelas') ?>"><i class="fa fa-link"></i> <span>Kelas Umum</span></a></li>
        <li><a href="<?php echo base_url('admin/pengumuman') ?>"><i class="fa fa-link"></i> <span>Pengumuman</span></a></li>
        <li><a href="<?php echo base_url('admin/kritik') ?>"><i class="fa fa-link"></i> <span>Kritik Saran</span></a></li>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Forms</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <fieldset>
    <?php if (isset($page)AND($page=='grupBimbel')) { ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            GRUP BIMBEL
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Grup yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel"><i class="fa fa-plus"></i> Bimbel Baru</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Bimbel</td>
                    <td>Pemilik</td>
                    <td>Alamat</td>
                    <td>Nomor Telepon</td>
                    <td>Email</td>
                    <td>Bidang</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelBimbel">
                  <tr>
                    <td>
                      <a href="javascript:;" class="btn btn-success btn-flat btn-xs btnEditBimbel"><i class="fa fa-pencil"></i> Edit</a>
                      <a href="javascript:;" class="btn btn-warning btn-flat btn-xs btnHapusBimbel"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <div class="modal fade" tabindex="-1" id="modalTambahBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-orange">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Tambah Modal baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormBimbel">
                  <div class="form-group">
                    <label>Pemilik Bimbel</label>
                    <select class="form-control" name="pemilik">
                      <option>Pilih Pemilik Bimbel</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Bimbel</label>
                    <input type="text" name="namaBimbel" class="form-control" placeholder="nama bimbel">
                  </div>
                  <div class="form-group">
                    <label>Alamat Bimbel</label>
                    <textarea class="form-control" name="alamatBimbel" placeholder="alamat bimbel"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Nomor Telepon Bimbel</label>
                    <input type="text" name="teleponBimbel" class="form-control" placeholder="Nomor Telepon Bimbel">
                  </div>
                  <div class="form-group">
                    <label>Email Bimbel</label>
                    <input type="email" name="emailBimbel" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Bidang Keahlian Bimbel</label>
                    <input type="text" name="bidangBimbel" class="form-control" placeholder="Bidang ahli bimbel">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Daftar baru</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" id="modalHapusBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Data Bimbel</p>
              </div>
              <div class="modal-body">
                <STRONG>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ?</STRONG>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content -->
      <?php }else if (isset($page)AND($page=='membership')){ ?>
      <section class="content-header">
        <h1>PENGGUNA<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Member</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Pengguna yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel"><i class="fa fa-plus"></i> Member Baru</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Lengkap</td>
                    <td>Alamat</td>
                    <td>Nomor Telepon</td>
                    <td>Email</td>
                    <td>Tingkat</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelBimbel">
                  <tr>
                    <td>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <?php }else if (isset($page)AND($page=='kelasUmum')){ ?>
      <section class="content-header">
        <h1>KELAS UMUM<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Kelas</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Kelas</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel"><i class="fa fa-plus"></i> Kelas Baru</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Kelas</td>
                    <td>Kuota</td>
                    <td>Hari</td>
                    <td>Pertemuan</td>
                    <td>Tanggal Mulai</td>
                    <td>Tanggal Selesai</td>
                    <td>Lokasi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelBimbel">
                  <tr>
                    <td>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <?php }else if(isset($page)AND($page=='pengumuman')){ ?>
      <section class="content-header">
        <h1>PENGUMUMAN<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Pengumuman</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Pengguna yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel"><i class="fa fa-plus"></i> Pengumuman Baru</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Judul</td>
                    <td>Tempat</td>
                    <td>Tanggal Pengumuman</td>
                    <td>Pengirim</td>
                    <td>Email</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelBimbel">
                  <tr>
                    <td>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <?php }else if(isset($page)AND($page=='kritik')){ ?>
      <section class="content-header">
        <h1>MASUKAN<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">masukan</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Masukan yang telah bergabung</h2>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Lengkap</td>
                    <td>Alamat</td>
                    <td>Nomor Telepon</td>
                    <td>Email</td>
                    <td>Tingkat</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelBimbel">
                  <tr>
                    <td>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <?php }else{?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            BERANDA
            <small>Portal Bimbingan Belajar</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        </section>
        <!-- /.content -->
  <?php } ?>
  </fieldset>
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
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>assets/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('#btntambahBimbel').click(function() {
      $('#modalTambahBimbel').modal('show');
      $('#modalTambahBimbel').find('.modal-title').text('Tambah Data Bimbel');
    })

    $('#tabelBimbel').on('click','.btnEditBimbel', function() {
      $('#modalTambahBimbel').modal('show');
      $('#modalTambahBimbel').find('.modal-title').text('Edit Data Bimbel');
    })

    $('#tabelBimbel').on('click','.btnHapusBimbel', function() {
      $('#modalHapusBimbel').modal('show');
      $('#modalHapusBimbel').find('.modal-title').text('Hapus Data Bimbel');
    })
  });
</script>
</body>
</html>
