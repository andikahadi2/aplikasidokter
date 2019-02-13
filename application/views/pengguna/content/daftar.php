<div data-role="content" data-inset="true">   

      <form data-ajax="false" action="<?php echo base_url("admin1/dokter/tambah_a")?>" method="POST" enctype="multipart/form-data">
           <fieldset>
		   <label for="email">No Induk Dokter</label>
           <input type="text" name="nid" id="nid"  />
		   
           <label for="email">Nama</label>
           <input type="text" name="nama" id="nama"  />

           <label for="email">Foto</label>
           <input type="file" name="foto" >
		   
		   <label for="password">Alamat</label>
           <input type="text" name="alamat" id="alamat" />
		   
		    <label for="password">Tempat praktek</label>
           <input type="text" name="tempat" id="tempat" />
		   
		    <label for="password">Riwayat pendidikan</label>
           <input type="text" name="sd" id="sd" placeholder="sekolah dasar"/>
           <input type="text" name="smp" id="smp" placeholder="sekolah menengah pertama"/>
           <input type="text" name="sma" id="sma" placeholder="sekolah menengah akhir"/>
           <input type="text" name="kuliah" id="kuliah" placeholder="kuliah"/>

		   <label for="email">Jenis Kelamin</label>
		   <select name="jeniskelamin"><option value="laki">laki</option>
		   <option value="perempuan">perempuan</option></select>
		   
		   <label for="text">Spesialis</label>
           <input type="text" name="spesialis" id="spesialis"   />

           <label for="password">username</label>
           <input type="text" name="username" id="username" />
			
			<label for="password">password</label>
           <input type="text" name="password" id="password"  />
               <input id="Submit" type="submit" value="Daftar" data-role="button" data-inline="true" data-theme="b" />
               <a href="<?= base_url();?>" id="kembali" type="button" value="kembali" data-role="button" data-inline="true" data-theme="b" >kembali</a>

           <hr />
           
           </fieldset>
       </form>
       
</div>