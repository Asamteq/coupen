	<div class="row">
		<h1>Site Settings</h1>
	</div>


	<?php echo form_open_multipart("Admin/add_setting") ; ?>

			<input type="hidden" name="id" value="<?php echo !empty($site_setting['id']) ? $site_setting['id']:''?>" ?>
			<div class="row">
				<div class="col-lg-6">
					<label>Site Title:</label>
				<input type="text" class="form-control" name="title" value="<?php echo !empty($site_setting['title'])? $site_setting['title']:''?>" >
				</div>
				<div class="col-lg-6">
					<label>Email:</label>
					<span id="error_email" style="display:none;color:red;margin-top: 6px;float: right;">Wrong:example@abc.com</span>
					<input type="email" id="email" class="form-control" name="email" value="<?php echo !empty($site_setting['email'])? $site_setting['email']:''?>" required onkeyup="email_validation()"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
						<label>Logo:</label>
						<span id="size_message" style="display:none;font-weight: 500;color: red;right: 21px;position: absolute;font-size: 19px;">2Mb Allow</span>
         				 <span id="image_message" style="display:none;font-weight: 500;color: red;right: 21px;margin-top: 31px;position: absolute;font-size: 20px;">Select Image jpg,png,gif</span>
			                 <input type='file' name="userfile" class="form-control" onchange="setting(this);" accept="image/*" id="fileName"><br>
						
						 <?php if (!empty($site_setting['logo'])) { ?>

			                <img  class="img-thumbnail" id="logo" src="<?php echo base_url('assets/images/logo/' .$site_setting['logo']);?>" height="80px" width="80px">
			             <?php } else { ?>

			                 <img class="img-thumbnail" style="width: 100px; height: 100px;" id="logo" src="https://dummyimage.com/400x400/d4cdd4/797994.jpg&text=No-photo" alt="your image">
			                 <?php } ?>
        		 		
				</div>
				<div class="col-lg-6">
					
        		 	
				</div>
			</div>
				 <br>
				
				<label>Description:</label>
				<textarea class="form-control" cols="10" rows="10" name="description"><?php echo !empty($site_setting['description'])? $site_setting['description']:''?></textarea>
			<br>
				
				<!-- <input type="submit" class="btn btn-info btn-block" name="press" value="submit"> -->
				<center>

				<?php if(!empty($site_setting))
				{ ?>

				  <button type="submit" class="btn" value="submit" id="add_data" style="background-color:red;color:white;">Update</button>
				  <?php }
				  else
				    { ?>
				  <button type="submit" class="btn" value="submit" id="add_data" style="background-color:red;color:white;">Add</button>
				       
				       <?php } ?>
				</center>


			
			</form>

<script type="text/javascript">
	function setting(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo')
                        .attr('src', e.target.result);
                };
                

                reader.readAsDataURL(input.files[0]);
            }
                 var fileName = document.getElementById("fileName").value;

           var idxDot = fileName.lastIndexOf(".") + 1;
           var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
           if (extFile=="jpg" || extFile=="jpeg" || extFile=="png" || extFile=="JPG" || extFile=="gif"){
             $('#add_data').attr('disabled',false);
             $("#image_message").hide();

            //TO DO
        }else
        {
             $('#add_data').attr('disabled','disabled');
             $("#image_message").show();

        }
          var FileSize = input.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
             $("#size_message").show();
             $('#add_data').attr('disabled','disabled');
           
           // $(file).val(''); //for clearing with Jquery
        } else {
             $("#size_message").hide();
             $('#add_data').attr('disabled',false);
             
        }
        }


  function email_validation(){
  	var email=$('#email').val();
  	var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(email);
    if(!re) {
        $('#error_email').show();
        $("#add_data").attr("disabled", "disabled");
    } else {
        $('#error_email').hide();
        $("#add_data").attr("disabled", false);

    }
  }
</script>
