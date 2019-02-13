<div role="main" class="ui-content jqm-content">
<div data-demo-html="true">
<h2 class="ui-bar ui-bar-a"><?= $grup['nama_room']?></h2>
</div>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		
		<div class="history">
		
		</div>
		<form id="upload" method="post" enctype="multipart/form-data">
		<input type="file" id="gambar" name="gambar" >
		<textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
		<input type="hidden" name="id_grup" value="<?= $id?>">
		<input type="submit" value="kirim" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-mini ui-btn-active" >
		</form>
		
		</div>
		</div>
		<?php
					$id		=($this->uri->segment(4)=="") ? 0:$this->uri->segment(4);
					$limit	=($this->uri->segment(5)=="") ? 10:$this->uri->segment(5);
		?>
	
	<script src="<?php echo base_url(); ?>asset/js/ajaxFileUpload.js"></script>
	
<script type="text/javascript">
var id='<?= $id;?>'; var limit=<?= $limit;?>;
$(document).ready(function(){
	setInterval(_reloadPesan,1000);
	$('#upload').submit(function(e){
		//alert("asdasd");
		e.preventDefault();
		alert('<?= base_url("dokter/grup/kirim")?>/'+id);
		$.ajaxFileUpload({
			url				:'<?= base_url("dokter/grup/kirim")?>/'+id,
			secureuri 		: false,
			fileElementId	:'gambar',
			dataType		:'html',
			type			:'post',
			data 			:{'pesan':$('textarea').val()},
			success			:function(data,status){
				alert(data);
			},
			error:function(a,b,c){
			
				alert(c);
			}
		});
		return false;
	});
});
$(function(){
	
});
/*
function kirim(){
	
	//e.preventDefault();
	var dataForm=new FormData($('form')[0]);
	$.ajax({
		url:'<?= base_url("dokter/grup/kirim")?>/'+id,
							dataType:'html',
							type:'post',
							data:dataForm,
							enctype:"multipart/form-data",
							success:function(data){
								//if(data.status){
									//_reloadPesan();
									$('textarea').val('');
								//}
								alert(data);
							}
	});
	var pesan=$('textarea[name=textarea2]').val();
	
}*/
	function _reloadPesan(){
		
						$.ajax({
							url:'<?= base_url("dokter/grup/reload_pesan")?>/'+id+'/'+limit,
							dataType:'json',
							success:function(data){
								$('.textarea2').html('');
								$('.history').html('');
								$.each(data,function(index,value){
									var pesan="<div  class='ui-body ui-body-a ui-corner-all' style='margin-bottom:1em;'><h5 class='ui-bar ui-bar-a'>"+value.nama+" " +value.waktu+"<a href='javascript:hapus("+value.id_obrolan+")'class='ui-btn ui-icon-delete ui-btn-icon-notext' style='width:20px;height:20px;'></a><h5><img style='width:50px;height:50px;' src='<?= base_url()?>asset/gambar/"+value.foto+"'> "+value.pesan+" "+"</div>";
									$('.history').prepend(pesan);
								});
								
								
							}
						});

					}
					function hapus(x)
			{
				if(confirm("Yakin ingin hapus pesan?"))
				{
					location = "<?php echo base_url('dokter/grup/leaveRoom') ?>/"+x;
				}
			}
				
</script>