<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?=$title ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Favicon -->
  <link href="<?php echo base_url(); ?>assets/icon/favicon.png" rel="shortcut icon" type="image/png">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/bootstrap/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/fonts/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/fonts/ionicons/css/ionicons.min.css"> 

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/iCheck/all.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/dist/css/skins/skin-blue.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/select2/select2.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/morris/morris.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/daterangepicker/daterangepicker.css">  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>cPanel/dashboard/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pranata </b>Indonesia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/cpanel/avatar/m_002.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$user ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/cpanel/avatar/m_002.png" class="img-circle" alt="User Image">

                <p><?=$user ?> 
                  <small>Status &nbsp; : &nbsp; <b>Loged In</b></small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil Saya</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>cPanel/logout/" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/cpanel/avatar/m_002.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$user ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pencarian...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <ul class="sidebar-menu">
        <li>
          <a href="<?php echo base_url(); ?>" target="_blank">
            <i class="fa fa-globe"></i> <span>Lihat Web</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">LIHAT</small>
            </span>
          </a>
        </li>
      </ul>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="<?=($this->router->method==="dashboard")?"active":"not-active"?>">
          <a href="<?php echo base_url(); ?>cPanel/dashboard/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>

        <li class="<?=($this->router->method==="menu")?"active":"not-active"?>">
          <a href="<?php echo base_url(); ?>cPanel/menu/"><i class="fa fa-list-alt"></i> <span>Manajemen Menu</span></a>
        </li>

        <li class="<?=($this->router->method==="artikel")?"active":"not-active"?>">
          <a href="<?php echo base_url(); ?>cPanel/artikel/"><i class="fa fa-newspaper-o"></i> <span>Manajemen Artikel</span></a>
        </li>

        <li class="<?=($this->router->method==="halaman")?"active":"not-active"?>">
          <a href="<?php echo base_url(); ?>cPanel/halaman/"><i class="fa fa-object-ungroup"></i> <span>Manajemen Halaman</span></a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-camera-retro"></i>
            <span>Manajemen Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> &nbsp; &nbsp; <i class="fa fa-book"></i> Album Foto</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> &nbsp; &nbsp; <i class="fa fa-image"></i> Galeri Foto</a></li>
          </ul>
        </li>

        <li>
          <a href="#"><i class="fa fa-users"></i> <span>Data Dosen dan Staff</span></a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Slider Tambahan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> &nbsp; &nbsp; <i class="fa fa-volume-up"></i> Suara PI</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i> &nbsp; &nbsp; <i class="fa fa-thumbs-up"></i> Testimoni Alumni</a></li>
          </ul>
        </li>

        <li>
          <a href="#"><i class="fa fa-download"></i> <span>Manajemen Download</span></a>
        </li>

        <li>
          <a href="#"><i class="fa fa-external-link"></i> <span>Link Eksternal</span></a>
        </li>

        <li>
          <a href="#"><i class="fa fa-envelope-o"></i> <span>Kontak</span></a>
        </li>

        <li>
          <a href="#"><i class="fa fa-gears"></i> <span>Pengaturan</span></a>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>cPanel/logout/"><i class="fa fa-power-off"></i> <span>Keluar</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

