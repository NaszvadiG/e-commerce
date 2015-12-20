
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				
				<!-- end product_slider -->
				<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="js/imagezoom.js"></script>
										  <script defer src="js/jquery.flexslider.js"></script>
										<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->
								<?php foreach ($qbarang as $key) { ?>
									
								
							  <ul class="slides">
								<li data-thumb="<?= site_url('assets/images/'.$key->img); ?>">
									<div class="thumb-image"> <img src="<?= site_url('assets/images/'.$key->img); ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							  </ul>
							<div class="clear"></div>
						</div>
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?= $key->nama; ?></h3>
					<p><?= $key->deskripsi; ?></p>
					<h5>Rp.<?= $key->harga; ?> </h5>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							<li>Color:
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></li>
							<li>Size:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							<li>Quality:
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul>
						<div class="btn_form">
							<form>
								<input type="submit" value="add to cart" title="" />
							</form>
						</div>
						<span class="span_right"><a href="#">login to save in wishlist </a></span>
						<div class="clear"></div>
					</div>
					
			   	 </div>
			   	</div>
			   	<?php } ?>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				  
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Best Sellers</h4>
						<div class="single-nav">
			                <ul>
			                   <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			               		                    
			                </ul>
			              </div>
						  <div class="banner-wrap bottom_banner color_link">
								<a href="<?= base_url(); ?>login" class="main_link">
								<figure><img src="<?= base_url(); ?>assets/images/icon4.png" alt=""></figure>
								<h5><span>Admin Login</span><br> Backend Distro Ocean.</h5><p>Untuk Mengatur Produk di Etalase .</p></a>
						 </div>
						
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
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
