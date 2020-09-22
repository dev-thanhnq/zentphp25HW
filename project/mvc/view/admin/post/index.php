<?php 
include_once 'view/admin/helper/header.php'; 
?>
<a href="?mod=admin&c=post&act=create" class="btn btn-primary">New post</a>
<br>
<br>
<form action="">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>ID</th>
    <th>Tilte</th>
    <th>Description</th>
    <th>Thumbnail</th>
    <th>Content</th>
    <th>User ID</th>  
    <th>Category ID</th>
    <th>Slug</th>
    <th>View</th>
    <th>Created at</th>
    <th>Action</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>ID</th>
    <th>Tilte</th>
    <th>Description</th>
    <th>Thumbnail</th>
    <th>Content</th>
    <th>User ID</th>  
    <th>Category ID</th>
    <th>Slug</th>
    <th>View</th>
    <th>Created at</th>
    <th>Action</th>
  </tr>
</tfoot>
<tbody>
  <?php foreach ($posts as $key => $post) {?>
    <tr>
        <td><?php echo $post['id']?></td>
        <td><?php echo $post['title']?></td>
        <td><?php echo $post['description']?></td>
        <td><?php echo $post['thumbnail']?></td>
        <td><?php echo '<a href="?mod=post&act=show&id=<?php echo $post["id"]?" class="btn btn-primary">Content</a>'; ?></td>
        <td><?php echo $post['user_id']?></td>
        <td><?php echo $post['category_id']?></td>
        <td><?php echo $post['slug']?></td>
        <td><?php echo $post['view_count']?></td>
        <td><?php echo $post['created_at']?></td>
        <td>
            <a href="?mod=client&c=home&act=show&id=<?php echo $post['id'] ?>" class="btn btn-primary">Blog</a>
            <a href="?mod=admin&c=post&act=getFormEdit&id=<?php echo $post['id']?>" class="btn btn-success">Edit</a>
            <a href="?mod=admin&c=post&act=delete&id=<?php echo $post['id']?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  <?php } ?>
</tbody>
</table>
</form>
<?php 
include_once 'view/admin/helper/footer.php'; 
?>