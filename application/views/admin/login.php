<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="<?php echo base_url(); ?>t_admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>t_admin/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>t_admin/css/styles.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>t_admin/js/lumino.glyphs.js"></script>
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
<div class="container">

     <div class="row">
          <div class="col-lg-6 col-lg-6 col-md-offset-4">
               <h1>LOGIN ADMIN</h1>
          </div>
          
     </div>
</div>

<hr/>

<div class="container">

     <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-md-4 col-md-offset-4">
          <div class="panel-body">
		  <?php
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
          <fieldset>
               <legend>Login</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
		  </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
	 
</div>

<!--load jQuery library-->
<script src="<?php echo base_url(); ?>t_admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>t_admin/js/bootstrap-datepicker.js"></script>
</body>
</html>