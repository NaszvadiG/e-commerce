<?php $this->load->view('layout/header') ?>

<div class="container">
<?php foreach ($qbarang as $key) { ?>
  

<form action="<?= site_url('barang/proses_update'); ?>" method="POST">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" required value="<?= $key->nama;  ?>" >
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" name="harga" required value="<?= $key->harga; ?>" >
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="" required cols="30" rows="5" ><?= $key->deskripsi;  ?></textarea>
  </div>
   <div class="form-group">
    <label for="deskripsi">Jumlah</label>
    <input type="number" class="form-control" required value="<?= $key->jumlah; ?>" name="jumlah" id="">
  </div>
   <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar">
    
  </div>  
  <input type="hidden" name="barang_id" value="<?= $key->barang_id; ?>">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php } ?>
</div>
<?php $this->load->view('layout/footer') ?>
