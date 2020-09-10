<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update Category</h3>
    <hr>
    <form action="?mod=category&act=edit&id=<?php echo $categories['id']?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $categories['name'];?>">
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $categories['thumbnail'];?>">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $categories['slug'];?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $categories['description'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
