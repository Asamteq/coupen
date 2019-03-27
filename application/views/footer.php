      <!-- FOOTER -->
      <?php $base_url = $this->config->item('base_url')?>
      <footer id="footer">
      <div class="container">
      <div class="row">
 
        <div class="col-sm-6 col-md-3">
          <h2>NAVIGATION</h2>
          <ul>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>DELIVERY</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>SELL WINE</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>FAQS</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>WINE VALUATION</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>DISCLAIMER</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>PRIVACY POLICY</a></li>
          </ul>
           
         <div class="social-icons"><a href="#"><img src="<?php echo $base_url?>assets/img/icons/fb.png" ></a><a href="#"><img src="<?php echo $base_url?>assets/img/icons/tw.png" ></a><a href="#"><img src="<?php echo $base_url?>assets/img/icons/in.png" ></a></div>
        </div><!-- /.col-lg-4 -->
        
 
        <div class="col-sm-6 col-md-3">
        <h2>RESOURCES</h2>
          <ul>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Terms & Conditions | The London Wine Cellar</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Testimonials</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Thank you for your enquiry</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Whisky Valuation</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Wine Valuation</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Fine Wine Investment</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>Selling Wine In Bond</a></li>
          </ul>

  </div><!-- /.col-lg-4 -->
 
  <div class="col-sm-6 col-md-2">
  </div>
        <div class="col-sm-6 col-md-4">
          <h2>SUBSCRIBE</h2>
          <form class="form" action="subscribe-form.php" method="POST" >
		      <input class="form-control" type="text" name="email" id="email" placeholder="Your E-mail" /><input class="btn btn-info" type="submit" value="Submit" onclick="myFunction()"; />
	</form>
          <img src="<?php echo $base_url?>assets/img/payment.png" >
          <p class="go-to-top"><br><br><a href="#"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container  -->


       <div class="copyright">
          <div class="container">
           &copy; 2019 Wine Mart.
          </div>
        </div>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $base_url?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo $base_url?>assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo $base_url?>assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $base_url?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>