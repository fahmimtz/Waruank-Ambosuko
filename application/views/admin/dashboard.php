<div class="container-fluid">
  <h3><i class="fas fa-plus mr-2"></i>DATA PRODUK MENU</h3><br>

  <div class="form-group form-inline ml-1">
    <?php echo form_open('admin/dashboard_admin/search') ?>
      <input type="text" name="keyword" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-primary">cari</button>
    <?php echo form_close() ?>
  </div>

  <?php echo $this->session->flashdata('pesan') ?>

	<table class="table table-bordered table-hover table-striped">
    <tr>
      <th>NO</th>
      <th>GAMBAR</th>
      <th>NAMA MENU</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th>STATUS</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no=1;
    foreach ($menu as $mn) : ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td>
        <img width="60px" src="<?php echo base_url().'uploads/'.$mn->gambar ?>">
      </td>
      <td><?php echo $mn->nama_menu ?></td>
      <td><?php echo $mn->keterangan ?></td>
      <td><?php echo $mn->kategori ?></td>
      <td><?php echo $mn->harga ?></td>
      <td><?php 
      if ($mn->status == "0") {
        echo "<span class='badge badge-danger'>Sudah Habis</span>";
      }else {
        echo "<span class='badge badge-primary'>Tersedia</span>";
      }
       ?></td>
      <td><?php echo anchor('admin/tambah_menu/edit/' .$mn->id_menu, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      <td><?php echo anchor('admin/data_menu/hapus/' .$mn->id_menu, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

    </tr>

    <?php  endforeach; ?>

		
	</table>
</div>