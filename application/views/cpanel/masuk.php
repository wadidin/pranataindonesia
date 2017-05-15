
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon -->
  <link href="<?php echo base_url(); ?>assets/favicon.png" rel="shortcut icon" type="image/png">


  <!-- TITLE -->  
  <title>cPanel PI | Login System</title>
  <!-- END TITLE -->  


  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/fonts/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/fonts/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cpanel/dist/css/AdminLTE.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
  <body class="hold-transition login-page">
 
  <div class="login-box">

  <div class="login-logo">
    <a href="<?php echo base_url(); ?>cPanel/login/"><b>LOGIN </b>cPanel PI</a>
  </div>


  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk ke Dashboard <b>cPanel PI</b></p>

    <!-- Pesan Error -->
      <?php if ($this->session->flashdata('status') == 'failed'): ?>
        <div id="danger-alert" class="alert alert-danger alert-dismissible" align="center">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          username atau password salah !
        </div>
      <?php endif; ?>

      <form action="<?php echo base_url(); ?>cPanel/cekauth/" method="post">

        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Email atau username" autofocus>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" autofocus>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        
        <br>

        <div class="form-group has-feedback">
          <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">MASUK</button>
          </div>
          <!-- /.col -->
        </div>
    </div>
    </form>
    
  </div>
  <!-- /.login-box-body -->

<hr>

<div class="row">
  <div class="col-xs-6">
    <a href="<?php echo base_url(); ?>"> &nbsp; &nbsp; &nbsp; &nbsp;← Kembali ke <b>Beranda</b></a>    
  </div>

  <div class="col-xs-6">      
    <a href="javascript:void(0)">Kamu Lupa <b>Password</b> ?</a><br>   
  </div>
</div>

<hr>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/cpanel/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/cpanel/plugins/select2/select2.full.min.js"></script>
<!-- page script -->
<script>
  $("#danger-alert").fadeTo(3000, 500).slideUp(500, function(){
    $("#danger-alert").alert('close');
});
</script>

</body>
</html>


