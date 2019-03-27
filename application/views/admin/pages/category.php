<br>
<br>
<?php echo form_open_multipart("Admin/add_category") ; ?>
	<h2>Manage Categories</h2>
	<input type="hidden" name="category_id" value="<?php echo $edit_id;?>">
	<div class="form-group">
		<label>Name:</label>
		<input type="text" class="form-control" name="category"  placeholder="Enter the category" value="<?php if( !empty($edit_category)) echo $edit_category['cat_name'] ?>" required><br>
		<input type="submit" class="btn btn-info btn-block" name="press" value="<?php if( !empty($edit_category)) {echo'Update';}else{echo 'Submit';} ?>">
	</div>

</form>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Name</th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach ($view_category as $row): ?>
				<tr>
					
					<td>  <span id="row_<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'] ?></span></td>
					<td>
						<a title="Edit" onclick="edit('<?php echo $row['cat_id']; ?>','<?php echo base_url("Admin/category")?>')"
							  class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>

						<a  title="Delete" onclick="delete_item('<?php echo $row['cat_id']; ?>','<?php echo base_url("Admin/delete_category")?>')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php endforeach;?>

		</tbody>
	</table>
</div>
<script type="text/javascript">
	function edit(item_id, url) {
		window.location= url+'/'+item_id;
	}

	function delete_item(item_id, url) {
		if (confirm("You sure want to delete this category?")) {
		  window.location= url+'/'+item_id;
		} else {
		  
		}

		
	}
</script>


