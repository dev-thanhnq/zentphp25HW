<?php 
include_once 'view/admin/helper/header.php'; 
?>
<form action="?mod=admin&c=category&act=store" method="POST">
    <table id="dataTable" width="100%" cellspacing="0">
		<div class="form-group">
		  <input type="text" class="form-control form-control-user" id="validationTooltip01" placeholder="Name" name="name" required>
		</div>
		<div class="form-group">
			<select name="parent_id" class="form-control form-control-user">
				<option value="NULL">NULL</option>
			  	<?php foreach ($categoriesName as $key => $category) { 
			  		?>
			  		<option value="<?php echo $category['id'] ?>"><?php echo $category['id'] . ' - ' . $category['name']; ?></option>
			  	<?php } ?>
			</select>
		</div>
		<div class="form-group">
		  <input type="text" class="form-control form-control-user" placeholder="Description" name="description" required>
		</div>
		<input type="submit" class="btn btn-primary btn-user" value="Create">
    </table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>