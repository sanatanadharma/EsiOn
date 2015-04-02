<?php
	foreach($id_det_penilaian->result() as $detail){
?>
	<form method="post" action="<?= base_url() ?>IpMpab/updateIpMpabDb">

		<input type="text" value="<?php echo $detail->id_det_penilaian; ?>" name="id_det_penilaian" />
		<input type="text" placeholder="Indikator" name="indikator" value="<?php echo $detail->indikator; ?>"/>
		<input type="submit" value="Update" />
	</form>
<?php
	}    
?>