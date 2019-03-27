        <div class="col-sm-12 col-md-3">
        <div class="widget">
         <h2>Fine Wines</h2>
         <p>We buy a range of wines but have
a particular interest in the varieties 
that are listed adjacent. Quality, 
price, and desirability will depend 
on the vintage. To get a full
 wine valuation, fill in the form 
on our valuation page.</p>
         <p><a class="btn btn-default" href="#" role="button">GET A VALUATION</a></p>
        </div> 
        <div class="widget">
         <h2><?php echo $deal['name']?></h2>
         <img height="256" width="240" src="<?php echo $this->config->item('base_url')?>assets/img/products/<?php echo $deal['image']?>">
         <a href="<?php echo $this->config->item('base_url')?>welcome/get_all_deal" role="button">Get Now... &raquo;</a>
        </div> 
       </div>

