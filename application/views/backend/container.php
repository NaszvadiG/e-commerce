              
<?= $_header; ?>
           

<div class="container">


<h1>Data Kaos Ocean</h1> 
	<div class="col-md-10">
			<div class="table-responsive">

		  		<table class="table">
		  			<tr>
		    			<th>No</th>
		    			<th>Nama Produk</th>
		    			<th>Harga</th>
		    			<th>Deskripsi</th>
		    			<th>Gambar</th>
		    			<th>Jumlah</th>
		    			<th>Action</th>
		    		</tr>
					<?php foreach ($qbarang as $key) {?>
		    		<tr>
		    			<td><?= $key->barang_id; ?></td>		    			
		    			<td><?= $key->nama; ?></td>
		    			<td><?= $key->harga; ?></td>
		    			<td><?= $key->deskripsi; ?></td>
		    			<td><?= $key->img; ?></td>
		    			<td><?= $key->jumlah; ?></td>
		    			<td><a class="btn btn-default" href="<?= site_url('barang/get_update/'.$key->barang_id); ?>" role="button"><i class="glyphicon glyphicon-pencil"></i></a>
		    			
		    			<a class="btn btn-default" href="<?= site_url('barang/delete_barang/'.$key->barang_id); ?>" role="button"><i class="glyphicon glyphicon-trash"></i></a></td>
		    		</tr>
		    		<?php } ?>
		  		</table>
			</div>
			
	</div>

	<div class="col-md-2">
	<div class="row"><a class="btn btn-default" href="<?= base_url(); ?>barang/get_insert" role="button"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a></div>
		
	<div class="row"><a class="btn btn-default" href="<?= base_url(); ?>report/pdf" role="button"><i class="glyphicon glyphicon-plus-sign"></i> Report</a></div>
		
	</div>
</div>
 <?= $_footer; ?>


