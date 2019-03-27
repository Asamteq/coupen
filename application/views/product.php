
    <!-- Our Projects
    ================================================== -->
    <div class="product">
    <div class="container">
        <div class="row">
         <div class="col-lg-12">
            <h1>Our Products</h1>
         </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-9">
        <div class="row"> 

        <nav class="navbar navbar-default"> 
          <div class="container-fluid"> 
            <div class="navbar-header"> 
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-product" aria-expanded="false"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button> 
            </div> 
            <div class="navbar-collapse collapse" id="navbar-product" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle btn btn-default navbar-btn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $this->config->item('base_url')?>assets/img/icons/category.png">Categories <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php if(!empty($category)) {
                        foreach ($category as $key => $value) { ?>
                          <li><a href="<?php echo $this->config->item('base_url').'welcome/index?category_id='.$value['cat_id']?>"><?php echo $value['cat_name']?></a></li>
                        
                    <?php } } ?>
                  </ul>
                </li>
              </ul>
             <!--button type="button" class="btn btn-default navbar-btn"><img src="img/icons/category.png">Categories</button--> 
             <button type="button" class="btn btn-default navbar-btn"><img src="<?php echo $this->config->item('base_url')?>assets/img/icons/tag.png">Deals</button> 
             <button type="button" class="btn btn-default navbar-btn pull-right">View All Produts</button> 
            </div> 
          </div> 
        </nav>
        </div>
            <?php if(!empty($product)) {
              foreach ($product as $prod) { ?>
                <div class="col-sm-6 col-md-4">
                  <a href="<?php echo $this->config->item('base_url').'welcome/product_detail?product_id='.$prod['product_id']?>"><img src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $prod['product_img']?>" height="250" width="250">
                    <p class="name"><?php echo $prod['product_name']?></p>
                    <p class="price">£<?php echo $prod['product_price']?></p>
                  </a>
                </div><!-- /.col-lg-4 -->
                
          <?php } } ?>
     
       </div>
<?php $this->load->view('sidebar');?>
    
	</div><!-- /.row -->
    </div><!-- /.container -->
  </div>




