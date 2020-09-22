<?php 
include_once 'view/admin/helper/header.php'; 
?>
<form action="?mod=admin&c=user&act=edit&id=<?php echo $user['id'] ?>" method="POST">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    	<div class="form-group">
    	  <label>Name</label>
		  <input type="text" class="form-control form-control-user" value="<?php echo $user['name'] ?>" name="name">
		</div>
		<div class="form-group">
		  <label>Email</label>	
		  <input type="text" class="form-control form-control-user" value="<?php echo $user['email'] ?>" name="thumbnail">
		</div>
		<div class="form-group">
		  <label>Password</label>
		  <input type="text" class="form-control form-control-user" value="<?php echo $user['password'] ?>" name="description">
		</div>
		<!-- <div class="form-group">
			<label>Avatar</label>
			<br>
            <input type="file" name="avatar" class="">
        </div> -->
		<input type="submit" class="btn btn-primary btn-user" value="Edit">
    </table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>