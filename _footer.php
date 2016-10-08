<?php
if(basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header('Location: /');
	exit;
}
?>

	  
      <div class="row">
        <div class="col-md-12 text-center">
	  <img src="images/logo.png">
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <?php echo "Status " . date('d.m.Y H:i') ?>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Sebastian Pech</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script src="adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/app.min.js"></script>
<?php echo (isset($footerJs) ? $footerJs : "") ?>
</body>
</html>
