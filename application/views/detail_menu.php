<div class="container-fluid">
	
<div class="card">
<h2 class="card-header text-dark"><strong>Detail Menu</strong></h2>
<div class="card-body">

<?php foreach ($menu as $mn): ?>
<div class="row">
<div class="col-md-4">
<img src="<?php echo base_url().'/uploads/'.$mn->gambar ?>" class="card-img-top">
</div>
<div class="col-md-8">
<table class="table">
<tr>
<td><strong class="text-dark">Nama Menu</strong></td>
<td><strong class="text-dark"><?php echo $mn->nama_menu ?></strong></td>
</tr>

<tr>
<td><strong class="text-dark">Keterangan</strong></td>
<td><strong class="text-dark"><?php echo $mn->keterangan ?></strong></td>
</tr>

<tr>
<td><strong class="text-dark"> Kategori</strong></td>
<td><strong class="text-dark"><?php echo $mn->kategori ?></strong></td>
</tr>

<tr>
<td><strong class="text-dark">Status</strong></td>
<td>
<?php if($mn->status == '1'){
echo "<span class='btn btn-sm btn-primary'>Tersedia</span>" ; 
}else {
echo "<span class='btn btn-sm btn-danger'>Sudah Habis</span>";
} ?>
</td>
</tr>

<tr>
<td><strong class="text-dark">Harga</strong></td>
<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mn->harga,0,',','.')?></div></strong></td>
</tr>
</table>

<?php 

if ($mn->status == "0") {
echo "<span class='btn btn-sm btn-danger' disable>Sudah Habis</span>";
}else{
echo anchor('dashboard/tambah_ke_keranjang/'.$mn->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); 
}
?>

<?php echo anchor('dashboard', '<div class="btn btn-sm btn-info">Kembali</div>') ?>
</div>

</div>
<?php endforeach; ?>
</div>
</div>
</div>