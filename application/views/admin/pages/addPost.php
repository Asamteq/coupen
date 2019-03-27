    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
              Wine management
            </h1>
            <ol class="breadcrumb" style="background-color: #008040; color: #fff;">
                <li>
                    <i class="fas fa-tachometer-alt"></i><b> Wine</b>
                </li>
            </ol>
        </div>
    </div>
    <?php echo form_open_multipart("Admin/add_product") ; ?>
			<input type="hidden" name="product_id" value="<?php echo !empty($post_id) ? $post_id:''?>">
		
			<div class="row">
				<div class="col-lg-6">
         
            
				<label class="control-label">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo !empty($edit_post['product_name'])? $edit_post['product_name']:''?>" required><br>
         
			</div>
			<div class="col-lg-6">
       
        <label>Wine's Category:</label><br>
        <select class="form-control" name="category" required>
          <option value="" <?php echo empty($edit_post['product_category'])  ? "selected='selected'" : ''?>>Select wine's Category</option>
          <?php if (!empty($categories)) {?>
              <?php foreach($categories as $cate) { ?>
                <option value="<?php echo $cate['cat_name']?>" <?php echo (!empty($edit_post['product_category']) && $edit_post['product_category'] == $cate['cate_id'])  ? "selected='selected'" : ''?>><?php echo $cate['cat_name']?></option>
            <?php } } ?>
      
        </select>
      </div>
    </div>

      <div class="row">
       
      <div class="col-lg-6">
       
      <label>Wine's Type:</label><br>
          <select class="form-control" name="type" required>
            <option value="">Select wine's Type</option>
            <option value="Top" <?php echo (!empty($edit_post['product_type']) && $edit_post['product_type'] == 'Top')  ? "selected='selected'" : ''?>>Top</option>
            <option value="Featured" <?php echo (!empty($edit_post['product_type']) && $edit_post['product_type'] == 'Featured')  ? "selected='selected'" : ''?>>Featured</option>
          </select>
      </div>
      <div class="col-lg-6">
            <label class="control-label">Product Image:</label>
            <input type='file' name="userfile" class="form-control" onchange="post(this);" accept="image/*" id="fileName"><br>
              <?php if(!empty($edit_post['product_img'])) { ?>
              <img style="widows:60px; height: 60px; "  class="img-thumbnail" src="<?php echo base_url('assets/img/products/' . $edit_post['product_img']); ?>">
            <?php } ?>
            </div>
    </div>
				<div class="row">
				

          <div class="col-lg-6">
            <div class="row">
               <div class="col-md-6">
                <label class="control-label">Product Currency:</label>
                 <select class="form-control" name="currency" required>
                  <option value="">Select product's Currency</option>
                  <option value="USD" <?php echo (!empty($edit_post['product_currency']) && $edit_post['product_currency'] == 'USD')  ? "selected='selected'" : ''?>>U.S Dollar</option>
                  <option value="GBP" <?php echo (!empty($edit_post['product_type']) && $edit_post['product_currency'] == 'GBP')  ? "selected='selected'" : ''?>>Pound sterling</option>
                  
                </select>
              </div>
              <div class="col-md-6">
                <label class="control-label">Product Price:</label>
                <input type='text' value="<?php echo !empty($edit_post['product_price']) ? $edit_post['product_price'] : ''?>" name="price" class="form-control" placeholder="Price" required><br>
              </div>
             
            </div>
        
        


            </div>
       			
				
			</div>
          <div class="row">
        <div class="col-lg-6">
        <label class="control-label">Wine's Description:</label>
            <textarea class="form-control" rows="10" cols="10" name="description" required> <?php echo !empty($edit_post['product_description']) ? $edit_post['product_description'] : ''?></textarea>
            </div>

         
      </div><br>
	
		

  </div>
  
    <div class="row">
      <center>
        
  <button type="submit" class="btn" value="submit" id="btn_disabled" style="background-color:#008040;color:white;">Add</button>
      </center>
    </div>
       
      
		</form><br>
		



