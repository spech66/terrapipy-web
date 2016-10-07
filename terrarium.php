<?php
$pageTitle = 'Terrarium';
$pageDescription = 'NAME_DES_RAUMS';
$pageSkin = 'green';
require_once("_header.php") ?>

<div class="row">
		<div class="col-md-6">
			<div class="box box-solid">
				<div class="box-body">
					<img src="images/snake.jpg" alt="Boa constrictor">
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
				<a class="btn btn-app" href="terrariumconfig.php"><i class="icon ion ion-settings"></i> Konfiguration</a>
			  
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
	<!-- /.row -->

<?php
$footerJs = <<<'EOT'
<!-- ChartJS 1.0.1 -->
<script src="adminlte/plugins/chartjs/Chart.min.js"></script>

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
EOT;

require_once("_footer.php") ?>