<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-warning text-dark">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total +$item['subtotal'];
					}

				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div> <br><br>

			<h3>Masukan Nama Lengkap, Alamat dan Nomor Telepon</h3>

			<form action="<?php echo base_url('dashboard/proses_pesanan');?>"method="post">

				<div class="form-group">
					<label>Nama Anda</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telepon" placeholder="Nomor Telepon yang bisa di hubungin" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Anda</label>
					<textarea type="text" name="alamat" placeholder="Alamat Lengkap Pegiriman"class="form-control" rows="3" cols="40" ></textarea>
				</div>

				<button type="submit" class="btn btn-primary mb-3">Pesan</button>
				
			</form>
			<?php
		} else
		{
			echo "<h4>Keranjang Belanja Anda Masih Kosong";
		}
			 ?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>