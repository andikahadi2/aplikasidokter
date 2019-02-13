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
<!-- start content -->
<div data-role="content" data-inset="true">  
<center><h1>Login Dokter</h1></center>
			</br>
			<div class="sb-msg">
                            <h4><strong><i class="icon-thumbs-up"></i>Selamat</strong></h4>
                            <strong>Registrasi Berhasil</strong><p> Tunggu Konfirmasi dari admin untuk login. jika data diri yang anda masukan benar admin akan mengkonfirmasi akun anda. terima kasih telah mendaftar.</p></div>
                        </div>
			</br>
       <form data-ajax="false" action="<?= base_url("user/login/c_login")?>" method="POST">
           <fieldset>
           <label for="email">Username</label>
           <input type="text" name="username" id="email"  />

           <label for="password">Password:</label>
           <input type="password" name="password" id="password" />

               <input id="Submit1" type="submit" value="Login" data-role="button" data-inline="true" data-theme="b" />
     		   <a href="<?= base_url(); ?>" id="Back" type="button" value="Back" data-role="button" data-inline="true" data-theme="b" >Back</a>
           <hr />
           Don't have an account? <a href="<?php echo base_url();?>admin1/dokter/daftar">Sign Up</a>
           </fieldset>
       </form>
       
</div>
</body>
<!-- end content -->
</html>