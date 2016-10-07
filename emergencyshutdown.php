<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Terrarium | Übersicht</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../adminlte/dist/css/skins/skin-red.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>RA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Terrarium</b>Control</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Übersicht</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="Terrarium.html"><i class="fa fa-dashboard"></i> <span>Start</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Terrarien</li>
        <li><a href="Terrarium_1.html"><i class="fa fa-paw"></i> <span>Terrarium 1</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 1</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 3</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 4</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Sonstiges</li>
        <li><a href="Terrarium_Fuetterung.html"><i class="fa fa-calendar"></i> <span>Fütterung</span></a></li>
        <li><a href="#"><i class="fa fa-eye"></i> <span>Webcam</span></a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> <span>Nachrichten</span></a></li>
        <li class="active"><a href="Terrarium_Notaus.html"><i class="fa fa-exclamation-circle text-red"></i> <span class="text-red">NOTAUS</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        NOTAUS
        <small>Steuerung für den Notfall</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
	<div class="row">
        <div class="col-md-12">
          <button type="button" class="btn btn-block btn-danger btn-lg">ALLE</button>
          <button type="button" class="btn btn-block btn-warning btn-lg">Terrarium 1</button>
          <button type="button" class="btn btn-block btn-warning btn-lg">Terrarium 2</button>
          <button type="button" class="btn btn-block btn-warning btn-lg">Terrarium 3</button>
          <button type="button" class="btn btn-block btn-warning btn-lg">Terrarium 4</button>
        </div>
        <!-- /.col -->
      </div>
	  	  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      xxxxxxxxxxxxxxxxxxxxxxxxx
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Sebastian Pech</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
