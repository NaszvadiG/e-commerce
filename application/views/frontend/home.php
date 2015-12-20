<?php $this->load->view('frontend/layout/header'); ?>
  <div class="main_bg">
<div class="wrap">	
	<div class="main">
	
		
	 
		<h2 class="style top">Kaos Distro</h2>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
		<?php foreach ($qbarang as $key) { ?>
			<div class="grid1_of_3">
				<a href="<?= site_url('home/detail/'.$key->barang_id); ?>">
					
					<img src="<?= site_url('assets/images/'.$key->img); ?>" alt=""/>
					<h3><?= $key->nama; ?></h3>
					<div class="price">
						<h4><?php echo $key->harga; ?><span>Beli</span></h4>
					</div>
					<span class="b_btm"></span>
					
				</a>
			</div>
			<?php } ?>
			
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			
			
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
		
	</div>
</div>
</div>		
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>featured sale</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>mens store</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>women store</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	


<?php $this->load->view('frontend/layout/footer'); ?>
</div>