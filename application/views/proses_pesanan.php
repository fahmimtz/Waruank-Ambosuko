<div class="container-fluid bg-light"><br>
	<div class="alert alert-success">
		<p class="text-center align-middle">Selamat, Pesanan Anda Telah Berhasil Di proses!</p>
		<p class="text-center align-middle">tunggu admin menelepon anda untuk konfirmasi kembali</p>
	</div>

<div class="card">
	  <h2 class="card-header text-dark"><strong>NOTA</strong></h2>
	  <div class="card-body">
<div class="row">
		<div class="col-md-6">
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td>Nama Anda</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td><?php echo $no_telepon; ?></td>
	</tr>
</table>
</div>
<div class="col-md-6"></div>
</div>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.')  ?></td>
			</tr>
			
		<?php endforeach; ?>

			<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
			</tr>
		
	</table>

</div>
</div><br>

<div class="row">
		<div class="col-md-6">
<p> * sebelum checkout, simpan atau screenshot nota ini untuk bukti pesanan</p>
</div>
<div class="col-md-6 " align="right">
<a href="<?php echo base_url('dashboard') ?>"><div class="btn btn-primary">checkout</div></a>
</div><br><br>
</div>