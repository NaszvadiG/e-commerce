<!DOCTYPE html>
<html>
<head>
  <title>Report PDF Kelompok 6</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:680px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 100px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
	  			<th class="normal">Nama Produk</th>
	  			<th class="normal">Harga</th>
	  			<th class="normal">Deskripsi</th>
          <th class="normal">Jumlah</th>
          <th class="normal">Gambar</th>
          
         
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($qbarang as $key): ?>
	  		  <tr>
	  			    <td><?= $key->barang_id; ?></td>              
              <td><?= $key->nama; ?></td>
              <td><?= $key->harga; ?></td>
              <td><?= $key->deskripsi; ?></td>
              <td><?= $key->jumlah; ?></td>
              <td><?= $key->img; ?></td>
              
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>