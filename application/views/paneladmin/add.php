<body>
	<div class="col-xs-8">
		<form method="post" class="col-xs-6">
		<h3>Tambah Administrator</h3>
			<div class="form-group">
	    	<input type="text" name="username" placeholder="Username" class="form-control"> <!-- inget ganti pake id terakhir -->
	  	</div>		

			<div class="form-group">
					<input type="password" name="password" placeholder="Password" class="form-control"> <!-- kosongin, tapi kalo edit munculin indikator yang di edit -->
			</div>

			<div class="form-group">
    		<a href="<?= base_url() ?>PanelAdmin/addAdminDb/" class="btn btn-success"><span class='glyphicon glyphicon-plus'></span> Tambah Administrator</a>
  		</div>
		</form>
	</div>
</body>