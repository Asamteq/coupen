	<br>
	<h2>View Contact</h2>
	  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Name</th>
      <th>Phone</th>
      <th>Subject</th>

			<th>Email</th>
			<th>Message</th>
			<th></th>
			<th>Action</th>

		</thead>
		<tbody>

				<?php 
        if(!empty($view_contact)) { 
          foreach ($view_contact as $row): ?>

  			<tr id="<?php echo $row['id'] ?>">
  				
  				<td>  <?php echo $row['name'] ?></td>
          <td>  <?php echo $row['phone'] ?></td>
          <td>  <?php echo $row['subject'] ?></td>

  				<td>  <?php echo $row['email'] ?></td>
  				<td>  <?php echo $row['msg'] ?></td>
  				<td>
  					 
  				<button class="btn btn-danger hide btn-sm remove" onclick="delet('<?php echo $row['id']?>')"><i class="fas fa-trash"></i></button>
  				
  			</td>
  			<td>
  						<a title="Seen" onclick="seen_contact('<?php echo $row['msg']?>')" class="btn btn-success btn-sm">View

  					</a>
  			</td>
  			</tr>
  				  <?php endforeach;
          }
            ?>


		</tbody>
		</table>
		</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	function delet(id){
  bootbox.confirm({
    message: "Delete this Contact?",
    size:'small',
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
      if (result==true) {
          // alert(id);

        // $(".remove").click(function(){
        var base_url = '<?php echo base_url() ?>';
        
            $.ajax({
               url: base_url+"Admin/delete_contact/",
               type: 'POST',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    // alert("Record removed successfully");  
               }
            });

          // });
      }
      else {

      }
    }
});
 
 
}
function seen_contact(msg){
  bootbox.confirm({
    message: msg,
    size:'small',
    buttons: {
        
    },
    callback: function (result) {
      
    }
});
 
 
}
</script>