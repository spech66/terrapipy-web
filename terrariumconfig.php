<?php
$pageTitle = 'Terrarium Konfiguration';
$pageDescription = 'NAME_DES_RAUMS';
$pageSkin = 'green';

$headerCss = <<<'EOT'
<!-- bootstrap slider -->
<link rel="stylesheet" href="adminlte/plugins/bootstrap-slider/slider.css">
EOT;

require_once("_header.php") ?>
	
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

<?php
$footerJs = <<<'EOT'
<!-- Bootstrap slider -->
<script src="adminlte/plugins/bootstrap-slider/bootstrap-slider.js"></script>
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider();
  });
</script>
EOT;

require_once("_footer.php") ?>