<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}

if(!file_exists('config.php'))
{
	echo "config.php is missing. Please configure TerraPiPy first!";
	exit;
}

require_once("config.php");
require_once("includes/pimatic.php");

if(isset($autoRefresh) && $autoRefresh > 0)
{
	$query = $_SERVER['QUERY_STRING'];
	header("Refresh: $autoRefresh; url=$page?$query");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TerraPiPy | <?php echo (isset($pageTitle) ? $pageTitle : "Übersicht") ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="adminlte/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/skins/skin-<?php echo (isset($pageSkin) ? $pageSkin : "blue") ?>.min.css">
  <?php echo (isset($headerCss) ? $headerCss : "") ?>
  <?php echo (isset($headerJs) ? $headerJs : "") ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
SKINS: blue, black, purple, yellow, red, green
-->
<body class="hold-transition skin-<?php echo (isset($pageSkin) ? $pageSkin : "blue") ?> sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="images/logo.png" width="50"><!--<b>T</b>PP--></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="images/logo.png" width="50"> <b>Terra</b>PiPy</span>
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
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Start</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Terrarien</li>
<?php
	$terrariumPages = getPages($pimaticUsername, $pimaticPassword, $pimaticHost, $pimaticTerrariumKeyword);
	foreach($terrariumPages as $id => $name)
	{
        	echo "<li><a href=\"terrarium.php?id=$id\"><i class=\"fa fa-paw\"></i> <span>$name->name</span></a></li>";
	}
?>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Steuerung</li>
        <li><a href="sensor.php"><i class="fa fa-tint"></i> <span>Sensoren</span></a></li>
        <li><a href="actuator.php"><i class="fa fa-bolt"></i> <span>Aktoren</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Sonstiges</li>
        <li><a href="feeding.php"><i class="fa fa-calendar"></i> <span>Fütterung</span></a></li>
        <li><a href="animals.php"><i class="fa fa-paw"></i> <span>Tiere</span></a></li>
        <li><a href="webcam.php"><i class="fa fa-eye"></i> <span>Webcam</span></a></li>
        <li><a href="messages.php"><i class="fa fa-envelope"></i> <span>Nachrichten</span></a></li>
        <li><a href="weather.php"><i class="fa fa-cloud"></i> <span>Wetter</span></a></li>
        <li><a href="system.php"><i class="fa fa-envelope"></i> <span>System</span></a></li>
        <li><a href="emergencyshutdown.php"><i class="fa fa-exclamation-circle text-red"></i> <span class="text-red">NOTAUS</span></a></li>
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
        <?php echo (isset($pageTitle) ? $pageTitle : "Übersicht") ?>
        <small><?php echo (isset($pageDescription) ? $pageDescription : "") ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">