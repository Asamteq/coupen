
<h2>View Wines</h2>
      <a class="btn btn-success pull-right" href="<?php echo base_url("Admin/product"); ?>">Add Wine</a><br><br>

<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Name</th>
			<th>Price</th>
			<th>Category</th>
		
			<th>Img</th>
			<th>Actions</th>
		
		  </thead><tbody>
    			<?php foreach ($view_products as $row): ?>

        
					<td> <?php echo $row['product_name'] ?></td>
					<td> 
            <?php
              if ($row['product_currency']=='USD') 
              {
                echo '&#36;'.''.$row['product_price']; 
              }elseif ($row['product_currency']=='GBP') 
              {
                echo '&#163;'.''.$row['product_price']; 
                
              } 

           ?></td>
					<td> <?php echo	 $row['product_category']; ?></td>
				  <td><img style="widows:60px; height: 60px; "  class="img-thumbnail" src="<?php echo base_url('assets/img/products/' . $row['product_img']); ?>"> </td>
					
				<td>
					<a title="Edit" onclick="edit('<?php echo $row['product_id']?>')" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
          <button class="btn btn-danger btn-sm remove" onclick="delet('<?php echo $row['product_id']?>')"><i class="fas fa-trash"></i></button>
				</td>
			
			</tr>
		<?php endforeach;?>
	</tbody>


</table>
</div>
</div>
</div>

<script type="text/javascript">
function edit(id){
   window.location = "<?php echo base_url() ?>"+"Admin/product/"+id;
//   bootbox.confirm({
//     message: "Edit this product?",
//     size:'small',
//     buttons: {
//         confirm: {
//             label: 'Yes',
//             className: 'btn-success'
//         },
//         cancel: {
//             label: 'No',
//             className: 'btn-danger'
//         }
//     },
//     callback: function (result) {
//       if (result==true) {
//         window.location = "<?php echo base_url() ?>"+"Admin/post/"+id;
//       }
//       else {
        
//       }
//     }
// });
 
}

function delet(id){
  bootbox.confirm({
    message: "Delete this wine?",
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
        var base_url = '<?php echo base_url() ?>';
        
            $.ajax({
               url: base_url+"Admin/delete_product/",
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