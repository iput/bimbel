        <!DOCTYPE html>
        <html lang="en">

        <head>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>Portal Bimbingan Belajar </title>

          <!-- Bootstrap Core CSS -->
          <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom CSS -->
          <link href="<?php echo base_url() ?>assets/css/grayscale.css" rel="stylesheet">

          <!-- Custom Fonts -->
          <link href="<?php echo base_url() ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- 
          <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
          <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/silva.min.css">


        </head>

        <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

          <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <i class="fa fa-play-circle"></i>  <span class="light">Portal</span> Bimbel
                </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav navbar-left">
                  <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  <li class="hidden">
                    <a href="#page-top"></a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#biodata">Tentang Kami</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#layanan">Layanan</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#mydaftar"><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                  <li data-toggle="modal" data-target="#mylogin"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
          </nav>
          <!-- Intro Header -->
          <header class="intro">
            <div id="particles-js"></div>
            <div class="intro-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success" style="display: none;"></div>
                    <h1 class="brand-heading">Portal Bimbingan Belajar</h1>
                    <p class="intro-text">Belajar Lebih Interaktif dan Menyenangkan</p>
                    <a href="#biodata" class="btn btn-circle page-scroll">
                      <i class="fa fa-angle-double-down animated"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </header>

          <section class="bio" id="biodata">
            <div class="container">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-12 name">
                  <span class="hidden-xs wow animated slideInLeft animated icons" data-wow-duration="1s" style="color:#999;">
                  Tentang Kami</span>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-12 bio-inner">
                  <p class="wow animated slideInRight animated" data-wow-duration="1s">Hi! Selamat datang di <span class="text-danger">Portal Bimbel</span>.</br>
                  Portal Bimbel adalah Bimbingan belajar (bimbel) dan LES PRIVAT SD, SMP, SMA di kota Malang dan Batu.les privat sd di malang,les privat smp di malang dan les privat sma di malang.BIMBEL Rumah Rahil beralamatkan Jl. Punto Dewo Selatan 32 Malang Samping Alfa Express nomer telpon 0341 - 344773,344766. Bimbel Rumah Rahil memberikan layanan Gratis Privat 24 jam, Gratis Tanya PR setiap hari, Gratis Tanya PR lewat WA/BBM dan beberapa Program 5 siswa, Program 10 siswa, Program 15 siswa</p>
                  <p class="wow animated slideInRight animated" data-wow-duration="1s" >Segeralah Bergabung dengan Kami</p>          
                </div>
              </div>
            </section>

            <!-- Services Section -->
            <section id="layanan">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="heading">Paket</h2>
                    <h3 class="section-subheading text-muted">Tersedia beberapa Paket yang bisa dipilih</h3>
                  </div>
                </div>
                <div class="row text-center">
                  <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">SD</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                  </div>
                  <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">SMP</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                  </div>
                  <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">SMA</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                  </div>
                </div>
              </div>
            </section>


            <footer id="footer">
              <div class="container">
                <ul class="social">
                  <li><a title="Email me!" href="" target="_blank"><i class="fa fa-envelope-o fa-fw"></i></a></li>
                  <li><a title="find me on facebook" href="" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
                  <li><a title="find me on instagram" href="" target="_blank"><i class="fa fa-instagram fa-fw"></i></a></li>
                  <li><a title="find me on twitter" href="" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                  <li><a title="find me on linkedIn" href="/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li>
                </ul>
                <p>Made with <i class="fa fa-heart text-warning"></i> in <span class="text-success">Malang</span>, Indonesia</p>
              </div>
            </footer>




            <!-- Modal daftar -->
            <div id="mydaftar" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pendaftaran member baru</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?php echo base_url('login/register') ?>" class="form-vertical">
                     <div class="form-group">
                      <label for="fullname">Fullname</label>
                      <input type="text" class="form-control" name="Fullname" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="password">Grade</label>
                      <select class="form-control" name="levelUser">
                        <option value="">Pilih Akses User</option>
                        <option value="pengajar">Tenaga Pengajar</option>
                        <option value="bimbel">Pemilik Bimbel</option>
                        <option value="member">Membership</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-success">Daftar</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <p class="help-block">Diberdayakan oleh BIMBEL MUMTAZ</p>
               </div>
             </div>
           </div>
         </div>
         <!-- end modal daftar -->

         <!-- Modal login -->
         <div id="mylogin" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Sistem</h4>
              </div>
              <div class="modal-body">
                <form class="form-vertical" method="post" action="<?php echo base_url('login/cekLogin') ?>">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Login</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
             </div>
           </div>
         </div>
       </div>
       <!-- End Modal Login -->




       <!-- jQuery Version 1.11.0 -->
       <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>

       <!-- Bootstrap Core JavaScript -->
       <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

       <!-- Plugin JavaScript -->
       <script src="<?php echo base_url() ?>assets/js/jquery.easing.min.js"></script>

       <!-- Custom Theme JavaScript -->
       <script src="<?php echo base_url() ?>assets/js/grayscale.js"></script>


       <script src="<?php echo base_url() ?>assets/js/particles.min.js"></script>
       <script src="<?php echo base_url() ?>assets/js/app2.js"></script>
       <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
       <script src="<?php echo base_url() ?>assets/js/file.js"></script>
       <script type="text/javascript">
          <?php if ($this->session->flashdata('sukses')): ?>
          $('.alert-success').html('<?php echo $this->session->flashdata('sukses'); ?>').fadeIn();
          <?php endif ?>
       </script>
     </body>

     </html>
