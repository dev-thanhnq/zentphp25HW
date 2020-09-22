<?php 
include_once 'view/admin/helper/header.php'; 
?>
<p>create user</p>
<form action="?mod=admin&c=user&act=store" method="POST" enctype="multipart/form-data">
    <table id="dataTable" width="100%" cellspacing="0">
		<div class="form-group">
		  <input type="text" class="form-control form-control-user" placeholder="Name" name="name" required="">
		</div>
		<div class="form-group">
		  <input type="text" class="form-control form-control-user" placeholder="Email" name="email" required="">
		</div>
		<div class="form-group">
		  <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required="">
		</div>
		<div class="form-group">
			<label>Avatar</label>
			<br>
            <input type="file" name="avatar" class="" required="">
        </div>
		<input type="submit" class="btn btn-primary btn-user" value="Create">
    </table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>