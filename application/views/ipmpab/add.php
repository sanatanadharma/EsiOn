<body>
	<div class="col-xs-8">
		<form method="post" action="<?= base_url('ipmpab/addIpMpabDb'); ?>">
		<h3>Tambah Indikator Penilaian</h3>
			<div class="form-inline form-group">
		  	<label for="kegiatan">Kegiatan : </label>
	    	<select class="form-control" id="disableSelect" disabled><option>MPAB</option></select> <!-- inget ganti pake id terakhir -->
	  	</div>		

			<div class="form-group">
	    	<label for="indikator">Indikator : </label>
					<textarea type="text" name="indikator" id="indikator" placeholder="Indikator" class="form-control" rows="4"></textarea> <!-- kosongin, tapi kalo edit munculin indikator yang di edit -->
			</div>

			<div class="form-group">
			  <button type="submit" class="btn btn-success">
			    <span class='glyphicon glyphicon-plus'></span> Tambah Indikator Penilaian
			  </button>
			</div>
		</form>
	</div>
</body>