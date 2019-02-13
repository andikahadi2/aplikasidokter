<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin </title>

<link href="<?php echo base_url(); ?>t_admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>t_admin/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>t_admin/css/styles.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>t_admin/js/lumino.glyphs.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- herder -->
			<?php $this->load->view('admin/page/herder.php');?>
		</div><!-- /.container-fluid -->
	</nav>
		
	<!--sidebar-->
	<?php $this->load->view('admin/page/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
								
		<!-- isi-->
		<?php $this->load->view($content)?>
	</div>	<!--/.main-->

	<script src="<?php echo base_url(); ?>t_admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
