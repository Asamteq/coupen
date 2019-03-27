
    	<h2>View Subscribe</h2><br>
	  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<th>Email</th>
					<th></th>
				</thead><tbody>
			<?php foreach ($view_subscribe as $row): ?>

		<tr id="<?php echo $row['id'] ?>">
			
				<td> <?php echo $row['subscribe_email'] ?></td>
			<td>
			
                <button class="btn btn-danger btn-sm remove" onclick="delet('<?php echo $row['id']?>')"><i class="fas fa-trash"></i></button>
			</td>

			
		</tr>
		<?php endforeach;?>
</tbody>


			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
function delet(id){
  bootbox.confirm({
    message: "Delete this Email?",
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

        // $(".remove").click(function(){
        var base_url = '<?php echo base_url() ?>';
        
            $.ajax({
               url: base_url+"Admin/delete_subscribe_email",
               type: 'POST',
               data: {id: id},
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

</script>