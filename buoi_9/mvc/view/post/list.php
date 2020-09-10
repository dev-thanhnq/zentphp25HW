<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <h3 class="text-center">--- POSTS ---</h3>
    <a href="post_add.php" class="btn btn-primary">Add New Post</a>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Content</th>
        <th>Slug</th>
        <th>Category ID</th>
        <th>View</th>
        <th>Created at</th>
        </thead>

        <?php foreach ($posts as $key => $post) {?>
            <tr>
                <td><?php echo $post['id']?></td>
                <td><?php echo $post['title']?></td>
                <td><?php echo $post['description']?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?php echo $post['content']?></td>
                <td><?php echo $post['slug']?></td>
                <td><?php echo $post['category_id']?></td>
                <td><?php echo $post['view_count']?></td>
                <td><?php echo $post['created_at']?></td>
                <td>
                    <a href="post_detail.php?id=<?php echo $post['id']?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?php echo $post['id']?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?id=<?php echo $post['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
