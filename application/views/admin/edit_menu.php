<div class="container-fluid">
<h3><i class="fas fa-edit mr-2"></i>EDIT DATA MENU</h3><br>

	<?php foreach ($menu as $mn ) : ?>

		<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'admin/tambah_menu/update' ?>">

			<div class="card">
				<div class="card-body">
					<div class="for-group">
						<label>Nama Menu</label>
						<input type="text" name="nama_menu" class="form-control" value="<?php echo $mn->nama_menu ?>">
					</div>
					<div class="for-group">
						<label>Keterangan</label>
						<input type="hidden" name="id_menu" class="form-control" value="<?php echo $mn->id_menu ?>">
						<input type="text" name="keterangan" class="form-control" value="<?php echo $mn->keterangan ?>">
					</div>
					<div class="for-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?php echo $mn->harga ?>">
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-body">
				<div class="row">
					<div class="col-md-6">
					<div class="for-group">
						<label>Kategori</label>
						<select class="form-control" name="kategori"value="<?php echo $mn->kategori ?>">
							<option value="">--Pilih Status--</option>
							<option>paket</option>
							<option>makan</option>
							<option>minum</option>  
						</select>
					</div>

					<div class="for-group">
						<label>Status</label>
						<select class="form-control" name="status"value="<?php echo $mn->status ?>">
							<option value="">--Pilih Status--</option>
							<option value="1">Tersedia</option>
							<option value="0">Sudah Habis</option>
						</select>
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
						<label>Gambar Produk</label><br>
						<input type="file" name="gambar" class="form-control">
					</div>
				                	
					<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan </button>
					<a href="<?php echo base_url('admin/dashboard_admin') ?>"><div class="btn btn-sm btn-danger mt-3">Kembali</div></a>        	
					</div>

				</div>
			</div>
		</div>		
	</form>
	<?php endforeach; ?>
</div>