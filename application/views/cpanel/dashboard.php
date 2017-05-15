

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>cPanel Pranata Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url(); ?>cPanel/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>


    <!-- Main content 1 -->
    <section class="content">
      <div class="row">

        <!-- ARTIKEL -->      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="<?php echo base_url(); ?>cPanel/artikel/"><span class="info-box-icon bg-aqua"><i class="ion ion-ios-paper"></i></span></a>
            <div class="info-box-content">
              <span class="info-box-text">Artikel Website</span>
              <span class="info-box-number" >90</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./ARTIKEL -->

        <!-- HALAMAN -->      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href=""><span class="info-box-icon bg-green"><i class="ion ion-ios-copy"></i></span></a>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Halaman</span>
              <span class="info-box-number">15</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./HALAMAN -->

        <!-- DOSEN -->      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href=""><span class="info-box-icon bg-yellow"><i class="ion ion-ios-people"></i></span></a>
            <div class="info-box-content">
              <span class="info-box-text">Dosen dan Staff</span>
              <span class="info-box-number">150</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./DOSEN -->

        <!-- PESAN -->      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href=""><span class="info-box-icon bg-red"><i class="ion ion-ios-chatboxes"></i></span></a>
            <div class="info-box-content">
              <span class="info-box-text">Pesan Pengunjung</span>
              <span class="info-box-number">8</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./PESAN -->

      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-8 connectedSortable">
          <!-- Pintasan Menu -->
          <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-bookmark"></i><h3 class="box-title">Pintasan Menu</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
              <a class="btn btn-app" href="<?php echo base_url(); ?>cPanel/menu/">
                <i class="fa fa-list-alt"></i> Menu
              </a>

              <a class="btn btn-app" href="<?php echo base_url(); ?>cPanel/artikel/">
                <i class="fa fa-newspaper-o"></i> Artikel
              </a>

              <a class="btn btn-app" href="<?php echo base_url(); ?>cPanel/halaman/">
                <i class="fa fa-object-ungroup"></i> Halaman
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-book"></i> Album
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-image"></i> Galeri
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-users"></i> Dosen
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-download"></i> Download
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-volume-up"></i> Suara
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-thumbs-up"></i> Testimoni
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-external-link"></i> Eksternal
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-envelope-o"></i> Kontak
              </a>

              <a class="btn btn-app" href="#">
                <i class="fa fa-gears"></i> Pengaturan
              </a>
            </div>
          </div>
          <!-- ./Pintasan Menu -->

          <!-- interactive chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-signal"></i><h3 class="box-title">Statistik Pengunjung</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 335px;"></div>
            </div>
          </div>
          <!-- /.box -->
        </section>
        <!-- /.Left col -->


        <!-- right col -->
        <section class="col-lg-4 connectedSortable">
        <!-- Calendar -->
          <div class="box box-solid bg-black-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Kalender</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DIRECT CHAT -->
          <div class="box box-success direct-chat-success">
            <div class="box-header with-border">
              <i class="fa fa-comments"></i><h3 class="box-title">Kiriman Pesan Terbaru</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/cpanel/dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/cpanel/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/cpanel/dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/cpanel/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    I would love to.
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </section>
        <!-- right col -->


      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

