<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CMS PHP</title>
	<link href="<?php echo base_url(); ?>assets/css/admin_panel/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/admin_panel/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>assets/js/admin_panel/jquery.js" type="text/JavaScript"></script>
	<script src="<?php echo base_url(); ?>assets/js/admin_panel/bootstrap.min.js" type="text/JavaScript"></script>
</head>
<body>
	<div class="line" style="height:10px;
	background-color:#0275d8;"></div>
<nav class="nav navbar-inverse nav-color">
<div class="container">
	<div class="navbar-header" >
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-collpase">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a href="#" class="navbar-brand" style="color:#fff;">
	      <?php
        if (!empty($site_setting)) 
        {
          
            echo $site_setting['title'];


        }
                        ?>
	  </a>
	</div>

		
	</div>
	</form>
</div>
</nav>	
<div class="line" style="height:10px;
	background-color:#0275d8;"></div>
	<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-offset-4 col-md-4">
			<br><br>
		<?php echo form_open_multipart("Admin/user_login",['class'=> 'form-horizontal row']) ; ?>
			<h2>Welcome Back!!</h2>
			<br>
			<div></div>
			<div class="form-group">
				<label>Username:</label>
				<input required type="text" class="form-control" name="username" placeholder="Enter username"><br>


				<label>Password:</label>
				<input required type="password" class="form-control" name="password" placeholder="Enter the password"><br>
				<input type="submit" class="btn btn-info btn-block" name="press" value="Login">
			</div>
		</form>
				<button  class="btn btn-primary" onclick="location.href='<?php echo base_url();?>'">View WebSite</button>
		<br><br>
	</div>
	</div><!--end of row tag-->
</div><!--end of container fluid-->	
</body>
</html>