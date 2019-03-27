<br>
<br>
<?php echo form_open_multipart("Admin/add_event") ; ?>
	<h2>Manage Categories</h2>
	<input type="hidden" name="event_id" value="<?php echo $event_id;?>">
	<div class="form-group">
		<label>Name:</label>
		<input type="text" class="form-control" name="name"  placeholder="Enter the category" value="<?php if( !empty($edit_event['name'])) echo $edit_event['name'] ?>" required><br>

		<textarea class="form-control" name="description"  placeholder="Enter the description">
			<?php if( !empty($edit_event['description'])) echo $edit_event['description'] ?>

		</textarea><br>
		<div class="col-lg-6">
	        <label class="control-label">Event Image:</label>
	        <input type='file' name="userfile" class="form-control" onchange="post(this);" accept="image/*" id="fileName"><br>
	          <?php if(!empty($edit_event['image'])) { ?>
	          <img style="widows:60px; height: 60px; "  class="img-thumbnail" src="<?php echo base_url('assets/img/products/' . $edit_event['image']); ?>">
	        <?php } ?>
	        </div>

		<input type="submit" class="btn btn-info btn-block" name="press" value="<?php if( !empty($event_id)) {echo'Update';}else{echo 'Submit';} ?>">
	</div>

</form>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Name</th>
			<th>Description</th>
			<th>Image</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php foreach ($view_event as $row): ?>
				<tr>
					
					<td>  <span id="row_<?php echo $row['event_id']; ?>"><?php echo $row['name'] ?></span></td>
					<td><?php echo $row['description'] ?></td>
					<td><img style="widows:60px; height: 60px; "  class="img-thumbnail" src="<?php echo base_url('assets/img/products/' . $row['image']); ?>"> </td>

					<td>
						<a title="Edit" onclick="edit('<?php echo $row['event_id']; ?>','<?php echo base_url("Admin/events")?>')"
							  class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>

						<a  title="Delete" onclick="delete_item('<?php echo $row['event_id']; ?>','<?php echo base_url("Admin/delete_event")?>')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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


