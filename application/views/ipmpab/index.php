<body>
	<div class="container-fluid col-xs-8">
		<form class="form-inline" style="margin : 18px auto">
			<div class="form-group">
    		<a href="<?= base_url() ?>ipmpab/addIpMpab" class="btn btn-success"><span class='glyphicon glyphicon-plus'></span> Tambah Indikator Penilaian Baru</a>
  		</div>
		</form>
		<div>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th> No </th>
						<th> Indikator </th>
						<th> Pilihan </th>
					</tr>
				</thead>
				<?php
					$all = $daftar->num_rows();
					if($all == 0){
				?>

					<a href="<?= base_url() ?>ipmpab/addIpMpab">...</a>

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
						<td><?= $row->indikator ?></td>
						<td>
							<a href="<?= base_url() ?>IpMpab/updateIpMpab/<?= $row->id_det_penilaian ?>">
								<span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="left" title="Ubah"></span>
							</a> <span class="glyphicon glyphicon-minus"></span>
							<a href="<?= base_url() ?>IpMpab/deleteIpMpabDb/<?= $row->id_det_penilaian ?>">
								<span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="left" title="Hapus"></span>
							</a>
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