<div class="container-fluid">
	<h3><i class="fas fa-file-invoice mr-2"></i>INVOICE PEMESANAN</h3><br>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>NO Telepon</th>
			<th>Tanggal Pemesanan</th>
			<th>Aksi</th>
		</tr>
		
		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->no_telepon ?></td>
			<td><?php echo $inv->tanggal_pesanan ?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>

	<?php endforeach; ?>

	</table>
</div>