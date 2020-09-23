<?php 
include_once 'view/admin/helper/header.php'; 
?>

<a href="?mod=admin&c=category&act=create" class="btn btn-primary">New category</a>
<br>
<br>
<form action="">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Parent ID</th>
    <th>Description</th>
    <th>Slug</th>
    <th>Created at</th>
    <th>Action</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Parent ID</th>
    <th>Description</th>
    <th>Slug</th>
    <th>Created at</th>
    <th>Action</th>
  </tr>
</tfoot>
<tbody>
  <?php foreach ($categories as $key => $category) {?>
    <tr>
        <td><?php echo $category['id']?></td>
        <td><?php echo $category['name']?></td>
        <td><?php echo $category['parent_id']?></td>
        <td><?php echo $category['description']?></td>
        <td><?php echo $category['slug']?></td>
        <td><?php echo $category['created_at']?></td>
        <td>
            <a href="?mod=client&c=home&act=showPostsCategory&id=<?php echo $category['id']?>" class="btn btn-primary">Blog</a>
            <a href="?mod=admin&c=category&act=getFormEdit&id=<?php echo $category['id']?>" class="btn btn-success">Edit</a>
            <a href="?mod=admin&c=category&act=delete&id=<?php echo $category['id']?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  <?php } ?>
</tbody>
</table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>