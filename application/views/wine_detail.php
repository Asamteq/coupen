	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></div>
						  <div class="tab-pane" id="pic-2"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></div>
						  <div class="tab-pane" id="pic-3"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></div>
						  <div class="tab-pane" id="pic-4"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></div>
						  <div class="tab-pane" id="pic-5"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $detail['product_img']?>" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $detail['product_name'];?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$<?php echo $detail['product_price'];?></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
												<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>	
	<?php $this->load->view('index'); ?>
