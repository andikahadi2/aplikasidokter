<div role="main" class="ui-content jqm-content">
<div data-demo-html="true">
<h2 class="ui-bar ui-bar-a"><?= $tampil['nama']?></h2>
</div>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		
		<div class="history">
		
		</div>
		<form>
		<textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
		<input type="hidden" name="id_grup" value="<?= $id?>">
		<a href="" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-mini ui-btn-active" onclick='kirim();'>kirim</a>
		</form>
		</div>
		</div>
		 <?php
					$id		=($this->uri->segment(4)=="") ? 0:$this->uri->segment(4);
					$limit	=($this->uri->segment(5)=="") ? 10:$this->uri->segment(5);
					?>
<script type="text/javascript">
var id='<?= $id;?>'; var limit=<?= $limit;?>;
$(document).ready(function(){
	setInterval(_reloadPesan,1000);
});
function kirim(){
	
	$.ajax({
		url:'<?= base_url("user/datadokter/kirim")?>/'+id,
							dataType:'json',
							type:'post',
							data:$('form').serialize(),
							success:function(data){
								//_reloadPesan(function(){});
								//var item="<div id='ui-body-test' class='ui-body ui-body-a ui-corner-all' style='margin-bottom:1em;'>"+data.nama_pengirim+" = "+data.pesan+".."+ "tanggal "+data.tanggal+"jam"+data.waktu+"</div>";
								//$('.history').append(item);
								_reloadPesan();
								$('textarea').val('');
							}
	});
	//var pesan=$('textarea[name=textarea2]').val();
	
}
	function _reloadPesan(){
		
						$.ajax({
							url:'<?= base_url("user/datadokter/reload_pesan")?>/'+id+'/'+limit,
							dataType:'json',
							success:function(data){
								$('.textarea2').html('');
								$('.history').html('');
								$.each(data,function(index,value){
									var pesan="<div id='ui-body-test' class='ui-body ui-body-a ui-corner-all' style='margin-bottom:1em;'><h3 class='ui-bar ui-bar-a'>"+value.nama+" " +value.waktu+"<h3><h5>"+value.tanggal+"</h5><img style='width:50px;height:50px;' src='<?= base_url()?>asset/gambar/"+value.foto+"'>"+value.pesan+".."+"</div>";
									$('.history').prepend(pesan);
								});
								
								
							}
						});

					}
				
</script>