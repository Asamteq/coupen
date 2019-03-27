<!-- NAVBAR -->
<?php $base_url = $this->config->item('base_url');?>
 <header>   
    <div class="top-bar">
        <div class="container">
          <div class="pull-left">
            <img src="<?php echo $base_url?>assets/img/icons/call.png">+44 (0) 12 34 35478  &nbsp;&nbsp;&nbsp;<img src="<?php echo $base_url?>assets/img/icons/email.png"> office@drinkshrink.com
          </div>
          <div class="pull-right">
            <a href="#">Login</a> | <a href="#"><img src="<?php echo $base_url?>assets/img/icons/cart.png"></a>
          </div>
        </div>

    </div>
    

     <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $base_url?>welcome/index">
                <img src="<?php echo $base_url?>assets/img/logo.png">
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                 <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo $base_url?>welcome/index">Buy Wine</a></li>
        <li><a href="#">Sell Wine</a></li>
        <li><a href="#">Wine Valuation</a></li>
		<li><a href="<?php echo $base_url?>welcome/team">Our Team</a></li>
        <li><a href="<?php echo $base_url?>welcome/about">About Us</a></li>
        <li><a href="<?php echo $base_url?>welcome/contact">Contact Us</a></li>
      </ul>
            </div>
          </div>
        </nav>
        <div class="header-caption">
              <h1>Fine Wines</h1>
              <p>Which Wines Are We Interested In?</p>
            </div>
</header>
