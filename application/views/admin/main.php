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
        <li><a href="<?php echo base_url('admin/grup') ?>"><i class="fa fa-group"></i> <span>Grup Bimbel</span></a></li>
        <li><a href="<?php echo base_url('admin/member') ?>"><i class="fa fa-user"></i> <span>Member Portal</span></a></li>
        <li><a href="<?php echo base_url('admin/kelas') ?>"><i class="fa fa-institution"></i> <span>Kelas Umum</span></a></li>
        <li><a href="<?php echo base_url('admin/pengumuman') ?>"><i class="fa fa-bullhorn"></i> <span>Pengumuman</span></a></li>
        <li><a href="<?php echo base_url('admin/kritik') ?>"><i class="fa fa-comments"></i> <span>Kritik Saran</span></a></li>
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
              <div class="alert alert-success" style="display: none;"></div>
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
                  <?php foreach ($dataBimbel as $rowBimbel): ?>
                    <tr>
                      <td><?php echo $rowBimbel->ID_BIMBEL ?></td>
                      <td><?php echo $rowBimbel->NAMA_BIMBEL ?></td>
                      <td><?php echo $rowBimbel->NAMA_LENGKAP ?></td>
                      <td><?php echo $rowBimbel->ALAMAT_BIMBEL ?></td>
                      <td><?php echo $rowBimbel->TELEPON_BIMBEL ?></td>
                      <td><?php echo $rowBimbel->EMAIL_BIMBEL ?></td>
                      <td><?php echo $rowBimbel->KONSENTRASI_BIMBEL ?></td>
                      <td>
                        <a href="javascript:;" class="btn btn-success btn-flat btn-xs btnEditBimbel" data="<?php echo $rowBimbel->ID_BIMBEL ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo base_url('admin/grup/hapus?idbimbel='.$rowBimbel->ID_BIMBEL) ?>" class="btn btn-warning btn-flat btn-xs btnHapusBimbel" onclick="return confirm('apakah anda yakin akan menhapus data ini ?')"><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <div class="modal fade" tabindex="-1" id="modalTambahBimbel" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-orange">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Tambah Modal baru</p>
              </div>
              <div class="modal-body">
                <form class="form-vertical" method="POST" action="" id="FormTambahBimbel">
                  <div class="form-group">
                    <label>Pemilik Bimbel</label>
                    <select class="form-control" name="namaPemilik">
                      <option value="">Pilih Pemilik Bimbel</option>
                      <?php foreach ($pengajar as $rowPengajar): ?>
                        <option value="<?php echo $rowPengajar->ID_USER ?>"><?php echo $rowPengajar->NAMA_LENGKAP ?></option>
                      <?php endforeach ?>
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
                    <input type="hidden" name="idBimbel">
                    <button data-dismiss="modal" class="btn btn-warning btn-flat"><i class="fa fa-remove"></i> Batal</button>
                    <button id="btnSimpanBimbel" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan Data</button>
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
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahMember"><i class="fa fa-plus"></i> Member Baru</button>
            </div>
            <div class="box-body">
              <div class="alert alert-success" style="display: none;"></div>
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
                <tbody id="tabelMember">
                  <?php foreach ($dataMember as $rowMember): ?>
                    <tr>
                      <td><?php echo $rowMember->ID_USER ?></td>
                      <td><?php echo $rowMember->NAMA_LENGKAP ?></td>
                      <td><?php echo $rowMember->ALAMAT ?></td>
                      <td><?php echo $rowMember->TELEPON ?></td>
                      <td><?php echo $rowMember->EMAILUSER ?></td>
                      <td><span class="badge bg-green"><?php echo $rowMember->GRADE_USER ?></span></td>
                      <td>
                        <a href="javascript:;" class="btn btn-success btn-flat btn-xs btnEditMember" data="<?php echo $rowMember->ID_USER ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo base_url('admin/member/hapus?idMember='.$rowMember->ID_USER) ?>" class="btn btn-warning btn-flat btn-xs btnHapusBimbel" onclick="return confirm('apakah anda yakin akan menhapus data ini ?')"><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <div class="modal fade" tabindex="-1" id="modalTambahMember">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title">Tambah Member Baru</h4>
            </div>
            <div class="modal-body">
              <form class="form-vertical" method="POST" action="" id="formTambahMember">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="namaMember" class="form-control" placeholder="nama lengkap">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomorTeleponMember" class="form-control" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                  <label>Email User</label>
                  <input type="email" name="emailMember" class="form-control" placeholder="Email user">
                </div>
                <div class="form-group">
                  <label>Alamat Lengkap</label>
                  <textarea class="form-control" name="alamatMember"></textarea>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="usernameMember" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="passwordMember" class="form-control" placeholder="********">
                </div>
                <div class="form-group">
                  <label>Kategori member</label>
                  <select class="form-control" name="levelMember">
                    <option value="">Pilih Kategori Level</option>
                    <option value="pengajar">Tenaga Pengajar</option>
                    <option value="bimbel">Pemilik Bimbel</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="hidden" name="idMember">
                  <button class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
                  <button class="btn btn-success btn-flat" id="btnSimpanMember"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" id="modalHapusMember">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Data Member</p>
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
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Kelas</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Kelas</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahKelas"><i class="fa fa-plus"></i> Kelas Baru</button>
            </div>
            <div class="box-body">
              <div class="alert alert-success" style="display: none;"></div>
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <td>Nama Kelas</td>
                    <td>Kuota</td>
                    <td>Tanggal Mulai</td>
                    <td>Lokasi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody id="tabelKelas">
                  <?php foreach ($dataKelas as $rowKelas): ?>
                    <tr>
                      <td><?php echo $rowKelas->ID_KELAS ?></td>
                      <td><?php echo $rowKelas->NAMA_KELAS ?></td>
                      <td><?php echo $rowKelas->KUOTA_KELAS ?></td>
                      <td><?php echo $rowKelas->TANGGAL_PELAKSANAAN ?></td>
                      <td><?php echo $rowKelas->LOKASI_KELAS ?></td>
                      <td>
                        <a href="javascript:;" class="btn btn-warning btn-flat btn-xs btnEditKelas" data="<?php echo $rowKelas->ID_KELAS ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo base_url('admin/kelas/hapus?idKelas='.$rowKelas->ID_KELAS) ?>" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')"><i class="fa fa-remove"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <div class="modal fade" tabindex="-1" id="modalTambahKelas">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Tambah kelas Baru</h4>
              </div>
              <div class="modal-body">
                <form class="form-vertical" id="formTambahKelas" method="POST" action="">
                  <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" name="namaKelas" class="form-control" placeholder="nama kelas">
                  </div>
                  <div class="form-group">
                    <label>Pelaksana Kelas</label>
                    <select class="form-control" name="pelaksanaKelas">
                      <option value="">Pilih Bimbel Pelaksana </option>
                      <?php foreach ($pelaksana as $pelaksanaKelas): ?>
                        <option value="<?php echo $pelaksanaKelas->ID_BIMBEL ?>"><?php echo $pelaksanaKelas->NAMA_BIMBEL ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kuota Kelas</label>
                    <input type="text" name="kuotaKelas" class="form-control" placeholder="kuota kelas">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggalKelas" class="form-control" placeholder="Hari Pelaksanaan">
                  </div>
                  <div class="form-group">
                    <label>Lokasi Pelaksanaan Kelas</label>
                    <input type="text" name="lokasiKelas" class="form-control" placeholder="Lokasi pelaksanaan">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="idkelas">
                    <button class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
                    <button class="btn btn-success btn-flat" id="btnSimpanKelas"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" id="modalHapusKelas">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Data Kelas</p>
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
            <li><a href="<?php echo base_url('admin/bimbelku') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active">Pengumuman</li>
        </ol>
      </section>
      <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">Daftar Pengguna yang telah bergabung</h2>
              <button type="button" class="btn btn-warning btn-flat pull-right" id="btntambahPengumuman"><i class="fa fa-plus"></i> Pengumuman Baru</button>
            </div>
            <div class="box-body">
              <div class="alert alert-success" style="display: none;"></div>
              <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Tempat</th>
                    <th>Tanggal Pengumuman</th>
                    <th>Pengirim</th>
                    <th>Email</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="tabelPengumuman">
                  <?php foreach ($dataPengumuman as $rowpengumuman): ?>
                    <?php if ($rowpengumuman->STATUS_PENGUMUMAN=='menunggu') {
                      $label = "Menunggu Konfirmasi";
                      $kelas = 'bg-orange';
                    }else if($rowpengumuman->STATUS_PENGUMUMAN=='konfirmasi'){
                      $label = "Telah Dikonfirmasi dan Disetujui";
                      $kelas = 'bg-green';
                    }else if($rowpengumuman->STATUS_PENGUMUMAN=='tolak'){
                      $label = "Pengumuman tidak disetujui";
                      $kelas = 'bg-red';
                    }else{
                      $label = "Konten tidak layak";
                      $kelas = 'bg-red';
                    } ?>
                    <tr>
                      <td><?php echo $rowpengumuman->ID_PENGUMUMAN ?></td>
                      <td><?php echo $rowpengumuman->JUDUL_PENGUMUMAN ?></td>
                      <td><?php echo $rowpengumuman->TEMPAT_PELAKSANAAN ?></td>
                      <td><?php echo $rowpengumuman->TANGGAL_PENGUMUMAN ?></td>
                      <td><?php echo $rowpengumuman->NAMA_PEMBUAT ?></td>
                      <td><?php echo $rowpengumuman->EMAIL_PEMBUAT ?></td>
                      <td><span class="badge <?php echo $kelas ?>"><?php echo $label ?></span></td>
                      <td>
                        <a href="javascript:;" class="btn btn-warning btn-flat btn-xs btnEditPengumuman" data="<?php echo $rowpengumuman->ID_PENGUMUMAN ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo base_url('admin/pengumuman/hapus?idPengumuman='.$rowpengumuman->ID_PENGUMUMAN) ?>" class="btn btn-danger btn-flat btn-xs" onclick="return confirm('apakah anda yakin akan menghapus pengumuman ini ?')"><i class="fa fa-remove"></i> Hapus</a>
                      </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </section>
      <!--  -->
      <div class="modal fade" tabindex="-1" id="modalTambahPengumuman">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title">Tambah Pengumuman</h4>
            </div>
            <div class="modal-body">
              <form class="form-vertical" id="formTambahPengumuman" method="post" action="">
                <div class="form-group">
                  <label>Judul Pengumuman</label>
                  <input type="text" name="judulPengumuman" class="form-control" placeholder="judul Pengumuman">
                </div>
                <div class="form-group">
                  <label>Tanggal Pengumuman</label>
                  <input type="date" name="tanggalPengumuman" class="form-control">
                </div>
                <div class="form-group">
                  <label>Pelaksanaan Pengumuman</label>
                  <input type="text" name="tempatPengumuman" class="form-control" placeholder="Pelaksanaan Pengumuman">
                </div>
                <div class="form-group">
                  <label>Konten Pengumuman</label>
                  <textarea class="form-control" name="kontenPengumuman" placeholder="isi Pengumuman"></textarea>
                </div>
                <div>
                  <input type="hidden" name="idPengumuman">
                  <button class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
                  <button class="btn btn-success btn-flat" id="btnSimpanPengumuman"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" id="modalHapusPengumuman">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-red">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <p class="modal-title">Hapus Data Kelas</p>
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
    // grup bimbel
    $('#btntambahBimbel').click(function() {
      $('#modalTambahBimbel').modal('show');
      $('#modalTambahBimbel').find('.modal-title').text('Tambah Data Bimbel');
      $('#FormTambahBimbel').attr('action','<?php echo base_url('admin/grup/daftarBimbel') ?>');
    })

    $('#tabelBimbel').on('click','.btnEditBimbel', function() {
      $('#modalTambahBimbel').modal('show');
      $('#modalTambahBimbel').find('.modal-title').text('Edit Data Bimbel');
      $('#FormTambahBimbel').attr('action','<?php echo base_url('admin/grup/updateBimbel') ?>');
      var id = $(this).attr('data');
      $.ajax({
        type: 'ajax',
        method: 'GET',
        url : '<?php echo base_url('admin/grup/editBimbel') ?>',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=idBimbel]').val(data.ID_BIMBEL);
          $('input[name=namaBimbel]').val(data.NAMA_BIMBEL);
          $('textarea[name=alamatBimbel]').val(data.ALAMAT_BIMBEL);
          $('input[name=teleponBimbel]').val(data.TELEPON_BIMBEL);
          $('input[name=emailBimbel]').val(data.EMAIL_BIMBEL);
          $('input[name=bidangBimbel]').val(data.KONSENTRASI_BIMBEL);
          $('select[name=namaPemilik]').val(data.ID_USER);
        },
        error : function() {
          alert('data tidak bisa ditampilkan');
        }
      })
    })

// form member
    $('#btntambahMember').click(function() {
      $('#modalTambahMember').modal('show');
      $('#modalTambahMember').find('.modal-title').text('Tambah Data Member');
      $('#formTambahMember').attr('action','<?php echo base_url('admin/member/daftarMember') ?>');
    })

    $('#tabelMember').on('click', '.btnEditMember', function() {
      $('#modalTambahMember').modal('show');
      $('#modalTambahMember').find('.modal-title').text('Edit Data member');
      $('#formTambahMember').attr('action','<?php echo base_url('admin/member/updateMember') ?>');
      var id = $(this).attr('data');

      $.ajax({
        type: 'ajax',
        method : 'GET',
        url : '<?php echo base_url('admin/member/editdataMember') ?>',
        async: false,
        data : {id:id},
        dataType: 'json',
        success: function(data) {
          $('input[name=namaMember]').val(data.NAMA_LENGKAP);
          $('input[name=nomorTeleponMember]').val(data.TELEPON);
          $('input[name=emailMember]').val(data.EMAILUSER);
          $('textarea[name=alamatMember]').val(data.ALAMAT);
          $('input[name=idMember]').val(data.ID_USER);
          $('input[name=usernameMember]').val(data.USERNAME);
          $('input[name=passwordMember]').val(data.PASSWORD_LOG);
          $('input[name=emailMember]').val(data.EMAILUSER);
          $('select[name=levelMember]').val(data.GRADE_USER);

        },
        error: function() {
          alert('data tidak bisa diampilkan karena kesalahan input');
        }
      })
    })
// form kelas
  $('#btntambahKelas').click(function() {
    $('#modalTambahKelas').modal('show');
    $('#modalTambahKelas').find('.modal-title').text('Tambah Kelas baru');
    $('#formTambahKelas').attr('action','<?php echo base_url('admin/kelas/tambahKelas') ?>');
  })

  $('#tabelKelas').on('click', '.btnEditKelas', function() {
    $('#modalTambahKelas').modal('show');
    $('#modalTambahKelas').find('.modal-title').text('Edit Data Kelas');
    $('#formTambahKelas').attr('action','<?php echo base_url('admin/kelas/updateKelas') ?>');
    var id = $(this).attr('data');
    $.ajax({
      type: 'ajax',
      method : 'GET',
      url : '<?php echo base_url('admin/kelas/editKelas') ?>',
      data: {id: id},
      async: false,
      dataType: 'json',
      success: function(data) {
        $('input[name=namaKelas]').val(data.NAMA_KELAS);
        $('select[name=pelaksanaKelas]').val(data.ID_BIMBEL);
        $('input[name=kuotaKelas]').val(data.KUOTA_KELAS);
        $('input[name=tanggalKelas]').val(data.TANGGAL_PELAKSANAAN);
        $('input[name=lokasiKelas]').val(data.LOKASI_KELAS);
        $('input[name=idkelas]').val(data.ID_KELAS);
      }
    })
  })

// form pengumuman
  $('#btntambahPengumuman').click(function(){
    $('#modalTambahPengumuman').modal('show');
    $('#modalTambahPengumuman').find('.modal-title').text('Tambah Data Pengumuman');
    $('#formTambahPengumuman').attr('action','<?php echo base_url('admin/pengumuman/tambahPengumuman') ?>');
  })

  $('#tabelPengumuman').on('click','.btnEditPengumuman', function() {
    $('#modalTambahPengumuman').modal('show');
    $('#modalTambahPengumuman').find('.modal-title').text('Edit Data Pengumuman');
    $('#formTambahPengumuman').attr('action','<?php echo base_url('admin/pengumuman/updatePengumuman') ?>');
    var id = $(this).attr('data');

    $.ajax({
      type : 'ajax',
      method: 'GET',
      url : '<?php echo base_url('admin/pengumuman/editPengumuman') ?>',
      data : {id:id},
      async: false,
      dataType: 'json',
      success: function(data) {
        $('input[name=judulPengumuman]').val(data.JUDUL_PENGUMUMAN);
        $('input[name=tanggalPengumuman]').val(data.TANGGAL_PENGUMUMAN);
        $('input[name=tempatPengumuman]').val(data.TEMPAT_PELAKSANAAN);
        $('textarea[name=kontenPengumuman]').val(data.KONTEN_PENGUMUMAN);
        $('input[name=idPengumuman]').val(data.ID_PENGUMUMAN);
      },
      error: function() {
        alert('data pengumuman tidak bisa tampil');
      }
    })
  })

  
  });

  <?php if ($this->session->flashdata('sukses')): ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('sukses'); ?>').fadeIn();
  <?php endif ?>
</script>

</body>
</html>
