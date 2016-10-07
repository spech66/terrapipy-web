<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>
              <h3 class="box-title">Benachrichtigungen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hitze! - Terrarium 1</h4>
                Die Temperatur in Terrarium 1 beträgt 35 Grad. Das Maximum liegt bei 33 Grad.
              </div>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Fütterung</h4>
                Terrarium 3 muss heute gefüttert werden.
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">  
	  
			<div class="row">
				<div class="col-lg-6 col-xs-12">
				  <!-- small box -->
				  <div class="small-box bg-red">
					<div class="inner"><h3>Zu hei&szlig;</h3><p>Terrarium 1</p></div>
					<div class="icon"><i class="ion ion-thermometer"></i></div>
					<a href="#" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-xs-12">
				  <!-- small box -->
				  <div class="small-box bg-yellow">
					<div class="inner"><h3>MANUELL<sup style="font-size: 20px">&deg;C</sup></h3><p>Terrarium 2</p></div>
					<div class="icon"><i class="ion ion-android-hand"></i></div>
					<a href="#" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-xs-12">
				  <!-- small box -->
				  <div class="small-box bg-green">
					<div class="inner"><h3>OK</h3><p>Terrarium 3</p></div>
					<div class="icon"><i class="ion ion-checkmark"></i></div>
					<a href="#" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-xs-12">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<div class="inner"><h3>Nachtmodus</h3><p>Terrarium 4</p></div>
					<div class="icon"><i class="ion ion-ios-cloudy-night"></i></div>
					<a href="#" class="small-box-footer">Anschauen <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
			</div>
	
        </div>
        <!-- /.col -->
      </div>
	  
	  <div class="row">
        <div class="col-md-12">
			<img src="<?php echo e(asset("/images/logo.png")); ?>">
        </div>
	  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', ['page_title' => "Übersicht", 'page_description' => "aller Terrarien"], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>