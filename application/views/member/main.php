<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ta-Bel | Portal bimbel</title>
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
        <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Bimbel</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('member/grup') ?>"><i class="fa fa-circle-o"></i> Grup Bimbel</a></li>
            <li><a href="<?php echo base_url('member/kelas') ?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li><a href="<?php echo base_url('member/jadwal') ?>"><i class="fa fa-circle-o"></i> Jadwal</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('member/pengumuman') ?>"><i class="fa fa-link"></i> <span>Pengumuman</span></a></li>
        <li><a href="<?php echo base_url('member/kritik') ?>"><i class="fa fa-link"></i> <span>Kritik Saran</span></a></li> 
        <li><a href="<?php echo base_url('member/member') ?>"><i class="fa fa-link"></i> <span>Member</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <fieldset>
    <?php if (isset($page)AND($page=='jadwal')) { ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            JADWAL BIMBEL
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
         <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Jadwal bimbel yang tersedia</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel" name="btn_tambah_jadwal"><i class="fa fa-plus"></i> Jadwal Baru</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Bimbel</td>
                    <td>Tanggal Jadwal</td>
                    <td>Lokasi</td>
                    <td>Jam Mulai</td>
                    <td>Jam Selesai</td>
                    <td>Materi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelJadwal">
                  <tr>
                    <td></td>
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
                <p class="modal-title">Tambah Jadwal baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormJadwal">
                  <div class="form-group">
                    <label>ID JADWAL</label>
                    <input type="text" name="id_jadwal" class="form-control" placeholder="ID Jadwal">
                  </div>
                  <div class="form-group">
                    <label>Nama Bimbel</label>
                    <select class="form-control" name="id_bimbel">
                      <option>Pilih Pemilik Bimbel</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <textarea class="form-control" name="tanggal_jadwal" placeholder="Tanggal"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi_jadwal" class="form-control" placeholder="Lokasi">
                  </div>
                  <div class="form-group">
                    <label>Jam Mulai</label>
                    <input type="text" name="jam_mulai" class="form-control" placeholder="Jam Mulai">
                  </div>
                  <div class="form-group">
                    <label>Jam Selesai</label>
                    <input type="text" name="jam_selesai" class="form-control" placeholder="Jam Selesai">
                  </div>
                  <div class="form-group">
                    <label>Materi</label>
                    <input type="text" name="materi" class="form-control" placeholder="Materi">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" nama='modal_hapus_jadwal' id="modalhapusBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Jadwal Bimbel</p>
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
            <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Member</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Pengguna yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel" name="btn_tambah_user"><i class="fa fa-plus"></i> Member Baru</button>
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
                    <td>Username</td>
                    <td>Log Password</td>
                    <td>Grade User</td>
                    <td>Status Aktif</td>
                    <td>Konfirmasi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelUser" name="tabel_user">
                  <tr>
                    <td>1</td>
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
                <p class="modal-title">Tambah Anggota Baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormJadwal">
                  <div class="form-group">
                    <label>ID User</label>
                    <input type="text" name="id_user" class="form-control" placeholder="ID User">
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="usernme" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Log Password</label>
                    <input type="password" name="log_password" class="form-control" placeholder="Log Password">
                  </div>
                  <div class="form-group">
                    <label>Grade User</label>
                    <textarea class="form-control" name="grade_user" placeholder="Grade User"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Status Aktif</label>
                    <input type="email" name="status_aktif" class="form-control" placeholder="Status Aktif">
                  </div>
                  <div class="form-group">
                    <label>Konfirmasi</label>
                    <input type="text" name="konfirmasi" class="form-control" placeholder="Konfirmasi">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" id="modalhapusBimbel">
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

      <?php }else if (isset($page)AND($page=='kelasUmum')){ ?>
      <section class="content-header">
        <h1>KELAS UMUM<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
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
                    <td>Status</td>
                    <td>Lokasi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelKelas" name="tabel_kelas">
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
                <p class="modal-title">Tambah Kelas baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormJadwal">
                  <div class="form-group">
                    <label>ID Kelas</label>
                    <input type="text" name="id_kelas" class="form-control" placeholder="ID Kelas">
                  </div>
                  <div class="form-group">
                    <label>ID Bimbel</label>
                    <input type="text" name="id_kelas_bimbel" class="form-control" placeholder="ID Kelas">
                  </div>
                  <div class="form-group">
                    <label>Nama Bimbel</label>
                    <select class="form-control" name="id_kelas_bimbel">
                      <option>Pilih Pemilik Bimbel</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kuota Kelas</label>
                    <textarea class="form-control" name="kuota" placeholder="Kuota"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Hari Pelaksanaan</label>
                    <input type="text" name="hari" class="form-control" placeholder="Hari Pelaksanaan">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Pertemuan</label>
                    <input type="text" name="jumlah_pertemuan" class="form-control" placeholder="Jumlah Pertemuan">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input type="text" name="tanggal_pelaksanaan" class="form-control" placeholder="Tanggal Pelaksanaan">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="text" name="hari" class="form-control" placeholder="Tanggal Selesai">
                  </div>
                  <div class="form-group">
                    <label>Status Kelas</label>
                    <input type="text" name="Status_kelas" class="form-control" placeholder="Status Kelas">
                  </div>
                  <div class="form-group">
                    <label>Lokasi Kelas</label>
                    <input type="text" name="lokasi_kelas" class="form-control" placeholder="Lokasi Kelas">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" nama='modal_hapus_jadwal' id="modalhapusBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Jadwal Bimbel</p>
              </div>
              <div class="modal-body">
                <STRONG>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ?</STRONG>
              </div>
            </div>
          </div>
        </div>

      <?php }else if(isset($page)AND($page=='pengumuman')){ ?>
      <section class="content-header">
        <h1>PENGUMUMAN<small>Portal Bimbel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
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
                <tbody id="tabelPengumuman">
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
                <p class="modal-title">Tambah Pengumuman baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormJadwal">
                  <div class="form-group">
                    <label>ID Pengumuman</label>
                    <input type="text" name="id_pengumuman" class="form-control" placeholder="ID Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Judul Pengumuman</label>
                    <input type="text" name="judul_pengumuman" class="form-control" placeholder="Judul Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Konten Pengumuman</label>
                    <input type="text" name="konten_pengumuman" class="form-control" placeholder="Konten Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Tempat Pelaksanaan</label>
                    <textarea class="form-control" name="tempat_pelaksanaan" placeholder="Tempat Pelaksanaan"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pengumuman</label>
                    <input type="text" name="tanggal_pengumuman" class="form-control" placeholder="Tanggal Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Status Pengumuman</label>
                    <input type="text" name="status_pengumuman" class="form-control" placeholder="Status Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Nama Pembuat</label>
                    <input type="text" name="nama_pembuat" class="form-control" placeholder="Nama Pembuat">
                  </div>
                  <div class="form-group">
                    <label>Email Pembuat</label>
                    <input type="text" name="email_pembuat" class="form-control" placeholder="Email Pembuat">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" nama='modal_hapus_jadwal' id="modalhapusBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Jadwal Bimbel</p>
              </div>
              <div class="modal-body">
                <STRONG>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ?</STRONG>
              </div>
            </div>
          </div>
        </div>


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
              <h2 class="box-title">Daftar Saran yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahBimbel"><i class="fa fa-plus"></i> Buat Masukan</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Tanggal Input</td>
                    <td>Nama Pengirim</td>
                    <td>Email Pengirim</td>
                    <td>Tentang</td>
                    <td>Isi Saran</td>
                    <td>Status Saran</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelKritik">
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
                <p class="modal-title">Tambah Pengumuman baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="FormJadwal">
                  <div class="form-group">
                    <label>ID Saran</label>
                    <input type="text" name="id_saran" class="form-control" placeholder="ID Saran">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Input</label>
                    <input type="text" name="tanggal_input" class="form-control" placeholder="Tanggal Input">
                  </div>
                  <div class="form-group">
                    <label>Nama pengirim</label>
                    <input type="text" name="nama_pengirim" class="form-control" placeholder="Nama Pengirim">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email_pengirim" class="form-control" placeholder="email_pengirim">
                  </div>
                  <div class="form-group">
                    <label>Tentang</label>
                    <input type="text" name="tentang" class="form-control" placeholder="tentang">
                  </div>
                  <div class="form-group">
                    <label>Isi Saran</label>
                    <input type="text" name="isi_saran" class="form-control" placeholder="Isi Saran">
                  </div>
                  <div class="form-group">
                    <label>Status Saran</label>
                    <input type="text" name="status_saran" class="form-control" placeholder="Status">
                  </div>
                  <div class="form-group">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" nama='modal_hapus_jadwal' id="modalhapusBimbel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Jadwal Bimbel</p>
              </div>
              <div class="modal-body">
                <STRONG>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ?</STRONG>
              </div>
            </div>
          </div>
        </div>

      <?php }else if (isset($page)AND($page=='bimbelku')) {?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            DAFTAR BIMBELKU
            <small>Portal Bimbingan Belajar</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('member/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Daftar grup bimbelku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">Daftar Ajuan Bimbel</h4>
              <form class="form-inline pull-right">
                <div class="input-group">
                  <input type="text" name="txtCari" class="form-control" placeholder="temukan bimbelmu">
                  <span class="input-group-btn"><button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
            <div class="box-body">
              <table class="table table-condensed table-hover table-responsive table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Bimbel</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </section>
        <!-- /.content -->
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
