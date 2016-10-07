<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Terrarium | 1</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">
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
        <li class="active"><a href="Terrarium_1.html"><i class="fa fa-paw"></i> <span>Terrarium 1</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 1</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 3</span></a></li>
        <li><a href="#"><i class="fa fa-paw"></i> <span>Terrarium 4</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Sonstiges</li>
        <li><a href="Terrarium_Fuetterung.html"><i class="fa fa-calendar"></i> <span>Fütterung</span></a></li>
        <li><a href="#"><i class="fa fa-eye"></i> <span>Webcam</span></a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> <span>Nachrichten</span></a></li>
        <li><a href="Terrarium_Notaus.html"><i class="fa fa-exclamation-circle text-red"></i> <span class="text-red">NOTAUS</span></a></li>
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
        Terrarium 1
        <small>Schlangen - Links</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

	<div class="row">
		<div class="col-md-6">
			<div class="box box-solid">
				<div class="box-body">
					<img src="../images/snake.jpg" alt="Boa constrictor">
				</div>
			</div>
		</div>	
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-book"></i>
              <h3 class="box-title">Schlangen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<dl class="dl-horizontal">
					<dt>Art</dt>
					<dd>Boa constrictor</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
					  sit amet risus.</dd>
				</dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>		
	</div>

	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner"><h3>30,1<sup style="font-size: 20px">&deg;C</sup></h3><p>Temperatur 1</p></div>
            <div class="icon"><i class="ion ion-thermometer"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner"><h3>28,5<sup style="font-size: 20px">&deg;C</sup></h3><p>Temperatur 2</p></div>
            <div class="icon"><i class="ion ion-thermometer"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner"><h3>26,2<sup style="font-size: 20px">&deg;C</sup></h3><p>Temperatur 3</p></div>
            <div class="icon"><i class="ion ion-thermometer"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner"><h3>65<sup style="font-size: 20px">%</sup></h3><p>Luftfeuchtigkeit</p></div>
            <div class="icon"><i class="ion ion-waterdrop"></i></div>
          </div>
        </div>
        <!-- ./col -->
	</div>

	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner"><h3>AN</h3><p>Beleuchtung</p></div>
            <div class="icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner"><h3>AN</h3><p>Strahler</p></div>
            <div class="icon"><i class="ion ion-flame"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        </div>
        <!-- ./col -->
	</div>

	<div class="row">
		<div class="col-md-12">
		  <!-- LINE CHART -->
		  <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Temperatur und Luftfeuchtigkeit</h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">
			  <div class="chart">
				<canvas id="lineChart" style="height:250px"></canvas>
			  </div>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
	<!-- /.row -->
	
	<div class="row">
		<div class="col-md-12">
		  <!-- LINE CHART -->
		  <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Steuerung</h3>
			</div>
			<div class="box-body">  
				
				<a class="btn btn-app"><i class="icon ion ion-ios-lightbulb-outline"></i> Licht</a>
				<a class="btn btn-app"><i class="icon ion ion-flame"></i> Strahler</a>
				<a class="btn btn-app"><i class="icon ion ion-settings"></i> Konfiguration</a>
			  
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
	<!-- /.row -->
	
	
	<div class="row">
		<div class="col-md-12">
		  <!-- LINE CHART -->
		  <div class="box box-info">
			<div class="box-header with-border">
			  <h3 class="box-title">Konfiguration</h3>
			</div>
			<div class="box-body">
			  HIER RAUS NEHMEN INKL SLIDER CSS USW
                  <p>Temperatur Tag</p>
                  <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="[25,30]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                  <p>Temperatur Nacht</p>
                  <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="[19,26]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple">

                  <p>Luftfeuchtigkeit Tag</p>
                  <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[70,90]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua">
                  <p>Luftfeuchtigkeit Nacht</p>
                  <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[50,80]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
				  
				<p>Start Licht: TIMEPICKER</p>
				<p>Ende Licht: TIMEPICKER</p>
				  
                  <p>&nbsp;</p>
				<a class="btn btn-app"><i class="fa fa-save"></i> Save</a>
			  
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
	<!-- /.row -->
	  
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
<!-- ChartJS 1.0.1 -->
<script src="../adminlte/plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../adminlte/dist/js/demo.js"></script>
<!-- Bootstrap slider -->
<script src="../adminlte/plugins/bootstrap-slider/bootstrap-slider.js"></script>

<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- LINE CHART -
    //--------------	
    var lineChartData = {
      labels: ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli"],
      datasets: [
        {
          label: "Temperatur",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [33, 30, 34, 28, 12, 22, 33]
        },
        {
          label: "Luftfeuchtigkeit",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label: "Temperatur MAX",
          fillColor: "rgba(255,0,0,0.9)",
          strokeColor: "rgba(255,0,0,0.8)",
          pointColor: "#ff0000",
          pointStrokeColor: "rgba(255,0,0,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(255,0,0,1)",
          data: [33, 33, 33, 33, 33, 33, 33]
        }
      ]
    };

    var lineChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: false,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };
	
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    lineChart.Line(lineChartData, lineChartOptions);
  });
</script>
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider();
  });
</script>
</body>
</html>
