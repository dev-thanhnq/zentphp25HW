<?php 
include_once 'view/admin/helper/header.php'; 
?>
<form action="?mod=admin&c=post&act=store" method="POST" enctype="multipart/form-data">
    <table id="dataTable" width="100%" cellspacing="0">
		<div class="form-group"> 
			<label>Tilte</label>
		  <input type="text" class="form-control form-control-user" placeholder="Tilte" name="title" required="">
		</div>
		<div class="form-group">
			<label>Description</label>
		  <input type="text" class="form-control form-control-user" placeholder="Description" name="description" required="">
		</div>
		<div class="form-group">
			<label>Image</label>
			<br>
            <input type="file" name="thumbnail" class="" value="">
        </div>
		<div class="form-group">
			<label>Content</label>
			<textarea id="summernote" class="form-control form-control-user" placeholder="Content" name="content" required=""></textarea>
		</div>
		<div class="form-group">
			<label>User ID</label>
		  <select name="user_id" class="form-control form-control-user">
		  	<?php foreach ($usersName as $key => $user) { 
		  		?>
		  		<option value="<?php echo $user['id'] ?>"><?php echo $user['id'] . ' - ' . $user['name']; ?></option>
		  	<?php } ?>
		  </select>
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
		<!-- <div class="form-group">
			<label>Slug</label>
		  <input type="text" class="form-control form-control-user" placeholder="Slug" name="slug">
		</div> -->
		<input type="submit" class="btn btn-primary btn-user" value="Create">
    </table>
</form>


<!-- <form action="?mod=admin&c=post&act=store" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="">
</form> -->
<?php 
include_once 'view/admin/helper/footer.php'; 
?>