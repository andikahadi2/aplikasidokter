<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Konsultasi Dokter</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.mobile-1.4.5.min.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/favicon.ico">
	<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page"  data-rel="back" id="testpage">

	<?php 
	$this->load->view($herder) 
	?>

	<?php $this->load->view($content) ?> 
	<!-- /content -->

	<div data-role="footer" data-position="fixed">
		
		<h4 style="display:none;">Footer</h4>
	</div>

</div><!-- /page -->

</body>
</html>
