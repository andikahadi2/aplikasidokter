<div data-role="content" data-inset="true">   

      <form data-ajax="false" action="<?php echo base_url("user/daftar/tambah_user")?>" method="POST" enctype="multipart/form-data">
           <fieldset>
		   <label for="email">No induk KTP</label>
           <input type="text" name="nik" id="nik"  />
           <label for="email">Nama</label>
           <input type="text" name="nama" id="nama"  />

           <label for="email">foto</label>
           <input type="file" name="gambar" >

		   <label for="email">Jenis Kelamin</label>
		   <select name="jeniskelamin"><option value="laki">laki</option>
		   <option value="perempuan">perempuan</option></select>

           <label for="password">alamat</label>
           <input type="text" name="alamat" id="alamat" />

           <label for="password">username</label>
           <input type="text" name="username" id="username" />
			
			<label for="password">password</label>
           <input type="text" name="password" id="password"  />
               <input id="Submit" type="submit" value="Daftar" data-role="button" data-inline="true" data-theme="b" />
               <a href="<?= base_url("welcome")?>" id="kembali" type="button" value="kembali" data-role="button" data-inline="true" data-theme="b" >kembali</a>

           <hr />
           
           </fieldset>
       </form>
       
</div>