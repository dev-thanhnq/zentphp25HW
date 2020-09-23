<?php 
include_once 'view/admin/helper/header.php'; 
?>
<form action="?mod=admin&c=post&act=edit&id=<?php echo $post['id'] ?>" method="POST" enctype="multipart/form-data">
    <table id="dataTable" width="100%" cellspacing="0">
		<div class="form-group"> 
			<label>Tilte</label>
		  <input type="text" class="form-control form-control-user" value="<?php echo $post['title'] ?>" name="title">
		</div>
		<div class="form-group">
			<label>Description</label>
		  <input type="text" class="form-control form-control-user" value="<?php echo $post['description'] ?>" name="description">
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea id="summernote" class="form-control form-control-user" value="<?php echo $post['content'] ?>" name="content"></textarea>
		</div>
		<div class="form-group">
			<label>Category ID</label>
		  <select name="category_id" class="form-control form-control-user">
		  	<?php foreach ($categoriesName as $key => $category) { 
		  		$i++;
		  		?>
		  		<option value="<?php echo $category['id'] ?>"><?php echo $category['id'] . ' - ' . $category['name']; ?></option>
		  	<?php } ?>
		  </select>
		</div>
		<input type="submit" class="btn btn-primary btn-user" value="Edit">
    </table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>