<body>
	<div class="container-fluid col-xs-8">
		<form class="form-inline" style="margin : 18px auto">
			<div class="form-group">
    		<a href="<?= base_url() ?>PanelAdmin/addAdmin" class="btn btn-success"><span class='glyphicon glyphicon-plus'></span> Tambah Administrator Baru</a>
  		</div>
		</form>
		<div>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th> No </th>
						<th> Administrator </th>
						<th> Password </th>
						<th> Last Login </th>
						<th> Pilihan </th>
					</tr>
				</thead>
				<?php
					$all = $daftar->num_rows();
					if($all == 0){
				?>

					<a href="<?= base_url() ?>PanelAdmin/addAdmin">...</a>

				<?php
					}
				else {
				?>

				<tbody>

					<?php
						$nomor = 1;
						foreach ($daftar->result() as $row) {
					?>
					<tr>
						<td><?= $nomor ?></td>
						<td><?= $row->username ?></td>
						<td><?= $row->password ?></td>
						<td> under construction </td>
						<td>
							<a href="#">Edit</a>
							|
							<a href="#">Hapus</a>
						</td>
					</tr>
					<?php
						$nomor++;
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>