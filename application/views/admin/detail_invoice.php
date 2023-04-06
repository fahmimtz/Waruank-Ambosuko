<div class="container-fluid">
	<h3><i class="fas fa-file-invoice-dollar mr-2"></i>DETAIL PESANAN<div class="btn btn-sm btn-success">NO <?php echo $invoice->id ?></div></h3><br>

	<table class="table table-bordered table-hover table-striped">

	<tr>
		<th>ID MENU</th>
		<th>NAMA MENU</th>
		<th>JUMLAH PESANAN</th>
		<th>HARGA SATUAN</th>
		<th>SUB-TOTAL</th>
	</tr>

	<?php 
	$total = 0; 
	foreach ($pesanan as $psn) :
		$subtotal = $psn->jumlah * $psn->harga;
		$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $psn->id_menu ?></td>
		 	<td><?php echo $psn->nama_menu ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga ,0,',','.') ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Total Belanja Pelanggan</td>
			<td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
		</tr>

	</table>

	<a href="<?php echo base_url('admin/invoice') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>