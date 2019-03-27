<div class="wrapper">
  <h2>View Settings</h2>
	  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Title</th>
			<th>Email</th>
			<th>Img</th>
			<th>Description</th>
			
			<th></th>
		</thead>
		<tbody>
				<?php foreach ($site_setting as $row): ?>

			<tr id="<?php echo $row['id']?>">
				<td>  <?php echo $row['title'] ?></td>
				<td>  <?php echo $row['email'] ?></td>
				<td>  
					<img style="width: 100px; height: 100px;" src="<?php echo base_url('assets/images/logo/'.$row['logo'])?>">
				</td>
				<td>  <?php echo $row['description'] ?></td>
				
				<td>
					 <a title="Edit" onclick="edit('<?php echo $row['id']?>')" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
						</a>
				<a  title="Delete" onclick="del('<?php echo $row['id']?>')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>

</a>
</td>
			</tr>
				  <?php endforeach;?>

		</tbody>
		</table>
		</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript">
function edit(id){
  bootbox.confirm({
    message: "Edit this settings?",
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
        window.location = "<?php echo base_url() ?>"+"Admin/setting/"+id;
      }
      else {
        
      }
    }
});
 
}
 function del(id){
  bootbox.confirm({
    message: "Delete this settings?",
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
        // window.location = "<?php echo base_url() ?>"+"Admin/delete_setting/"+id;
        var base_url = '<?php echo base_url() ?>';
        
            $.ajax({
               url: base_url+"Admin/delete_setting/",
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
      }
      else {
        
      }
    }
});
 
 
}


</script>