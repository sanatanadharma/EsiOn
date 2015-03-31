<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>EsiOn KMHDI</title>

	<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
	<div class="container-fluid">
		<?php
			$this->load->view('share/nav_bar');
		?>
		<div class="col-xs-4">
			<nav class="navbar navbar-default nav-stacked" role="navigation" style="margin-top: 18">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation">
						<a href="#indikator" data-toggle="collapse" role="button" aria-expanded="false"><span class="glyphicon glyphicon-scale"></span> Indikator Penilaian</a>
						<ul class="nav collapse" id="indikator">
							<li role="presentation"><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span> IP MPAB</a></li>
							<li role="presentation"><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span> IP DMO</a></li>
							<li role="presentation"><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span> IP TOT</a></li>
						</ul>
					</li>

					<li role="presentation">
						<a href="#kaderisasi" data-toggle="collapse" role="button" aria-expanded="false"><span class="glyphicon glyphicon-education"></span> Proses Kaderisasi</a>
						<ul class="nav collapse" id="kaderisasi">
							<li role="presentation"><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span> Masa Pengenalan Anggota Baru</a></li>
							<li role="presentation"><a href="dmo.php"><span class="glyphicon glyphicon-option-horizontal"></span> Diklat Manajemen Organisasi</a></li>
							<li role="presentation"><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span> Training Of Trainer</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>

		<div class="col-xs-8">
			<?php 
				$this->load->view('share/peta');
			?>
		</div>
	</div>

<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>