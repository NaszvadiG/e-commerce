<?php $this->load->view('layout/header') ?>

<div class="container">

<form action="<?= site_url('barang/proses_insert'); ?>" method="POST">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama"  placeholder="Nama Produk" required>
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" name="harga"  placeholder="100000" required>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="5" required placeholder="Deskripsi"></textarea>
  </div>
   <div class="form-group">
    <label for="deskripsi">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" id="" required>
  </div>
   <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file"  name="gambar" >
    
  </div>  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<?php $this->load->view('layout/footer') ?>
