<div class="container-fluid">
  <h3><i class="fas fa-plus mr-2"></i>TAMBAH MENU</h3>

   <div class="modal-body">
      <form action="<?php echo base_url().'admin/tambah_menu/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >
        
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Menu</label>
              <input type="text" name="nama_menu" class="form-control">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" class="form-control">
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
                  
                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan </button>
                <button type="reset" class="btn btn-danger btn-sm mt-3">atur ulang</button>
              </div>
            </div>
          </div>
        </div>
        
    </form>  
  </div>
</div>
