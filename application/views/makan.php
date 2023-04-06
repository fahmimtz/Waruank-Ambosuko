<div class="container-fluid">  
  <div class="row">
    
    <?php foreach ($makan as $mn) : ?>

      <div class="card ml-3 mt-2"  style="width: 16rem;">
        <img src="<?php echo base_url().'/uploads/'.$mn->gambar ?>" class="card-img-top" style="width: 255px; height: 160px" alt="...">
        <div class="card-body">
          <h4><strong class="card-title text-dark"><?php echo $mn->nama_menu ?></strong></h4>
          <h5><span class="badge badge-pill badge-success">Rp. 
            <?php echo number_format($mn->harga, 0,',','.') ?></span></h5>
          
          <?php 

          if ($mn->status == "0") {
            echo "<span class='btn btn-sm btn-danger' disable>Sudah Habis</span>";
          }else{
          echo anchor('dashboard/tambah_ke_keranjang/'.$mn->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); 
      }
      ?>
          <?php echo anchor('dashboard/detail/'.$mn->id_menu, '<div class="btn btn-sm btn-info ">Detail</div>') ?>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>