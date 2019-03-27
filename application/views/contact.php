<div class="container">
      <div class="row about-us">
 
 
        <div class="col-sm-8 col-md-8">
          <h2>Let us know how can we serve you...</h2>
		  <hr>

          <form class="form" action="include/contact-form.php" method="POST" ><br>
            <label for="name" class="control-label">Name... &nbsp</label><input class="form-control" type="text" name="name" id="name" placeholder="Your name" /><br>
		    <label for="email" class="control-label">E-mail... &nbsp&nbsp</label><input class="form-control" type="text" name="email" id="email" placeholder="Your E-mail" /><br>
            <label for="message" class="control-label">Your message... &nbsp&nbsp</label><textarea class="form-control" rows="8" name="text" placeholder="Write your message here..." ></textarea><br>
		    <input class="btn btn-info" type="submit" value="Send" onclick="myFunction()"; />
	</form>
    <p>&nbsp;</p>
  </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-1">
</div>
<?php include 'sidebar.php'; ?>
 
      </div><!-- /.row -->
    </div><!-- /.container  -->
