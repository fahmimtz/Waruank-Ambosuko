<div class="container-fluid">
	<h3><i class="fas fa-users mr-2"></i> DATA PELANGGAN</h3><br>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>NAMA PELANGGAN</th>
			<th>EMAIL PELANGGAN</th>
			<th>ALAMAT PELANGGAN</th>
			<th>NOMOR TELEPON</th>
		</tr>

		<?php
		$no=1;
		foreach ($pelanggan as $usr) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $usr->nama ?></td>
			<td><?php echo $usr->email ?></td>
			<td><?php echo $usr->alamat ?></td>
			<td><?php echo $usr->no_telepon ?></td>
		</tr>
		<?php  endforeach; ?>
	</table>
</div>