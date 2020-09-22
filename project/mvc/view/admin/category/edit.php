<?php 
include_once 'view/admin/helper/header.php'; 
?>
<form action="?mod=admin&c=category&act=edit&id=<?php echo $categories['id'] ?>" method="POST">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    	<div class="form-group">
		  <input type="text" class="form-control form-control-user" value="<?php echo $categories['name'] ?>" name="name">
		</div>
		<div class="form-group">
		  <input type="text" class="form-control form-control-user" value="<?php echo $categories['description'] ?>" name="description">
		</div>
		<input type="submit" class="btn btn-primary btn-user" value="Edit">
    </table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>