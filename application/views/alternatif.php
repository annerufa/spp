<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>

	<h2><strong><p align="center">Data Alternatif Lahan</p></strong></h2>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<a href="tambah anggota.php"><button class="btn btn-primary bold">Tambah Lahan</button></a>
				<br><br>

				<table class="table table-striped table-bordered">
					<thead class=" danger">
						<th width="30px;">No.</th>
						<th>Daerah</th>
						<th>Luas</th>
						<th>Ketinggian (mdpl)</th>
						<th>Harga</th>
						<th>Curah hujan (mm/th)</th>
						<th>Akses jalan</th>
						<th width="190px;">Aksi</th>
					</thead>

					<tbody>

						<?php
						$i=1;
						 foreach($alternatif as $u){ ?>
						<tr>
							<td><?php echo $i++ ?> </td>
							<td><?php echo $u->daerah ?></td>
							<td><?php echo $u->luas ?></td>
							<td><?php echo $u->ketinggian ?></td>
							<td><?php echo $u->harga ?></td>
							<td><?php echo $u->curah_hujan ?></td>
							<td><?php echo $u->akses_jalan ?></td>
							<td>
								<button class="btn btn-success bold">Edit</button>
								<button class="btn btn-danger bold">Hapus</button>
							</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>