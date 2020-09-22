<?php 
include_once 'view/admin/helper/header.php'; 
?>
<a href="?mod=admin&c=user&act=create" class="btn btn-primary">New user</a>
<br>
<br>
<form action="">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Avatar</th>  
    <th>Created at</th>
    <th>Action</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Avatar</th>  
    <th>Created at</th>
    <th>Action</th>
  </tr>
</tfoot>
<tbody>
  <?php foreach ($users as $key => $user) {?>
    <tr>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo md5($user['password'])?></td>
        <td><?php echo $user['avatar']?></td>
        <td><?php echo $user['created_at']?></td>
        <td>
            <a href="?mod=post&act=show&id=<?php echo $user['id']?>" class="btn btn-primary">Blog</a>
            <a href="?mod=admin&c=user&act=getFormEdit&id=<?php echo $user['id']?>" class="btn btn-success">Edit</a>
            <a href="?mod=admin&c=user&act=delete&id=<?php echo $user['id']?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  <?php } ?>
</tbody>
</table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>