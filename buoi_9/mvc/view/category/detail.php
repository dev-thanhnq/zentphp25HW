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
    <h3 align="center"></h3>
    <hr>
    <a href="index.php?mod=category&act=list" class="btn btn-primary">Posts</a>
    <form action="">
        <table class="table">
            <tr>
                <td>ID</td>
                <td><?php echo $categories['id'];?></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><?php echo $categories['name'];?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo $categories['thumbnail'];?></td>
            </tr>
            <tr>
                <td>Thumbnail</td>
                <td><?php echo $categories['slug'];?></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><?php echo $categories['description'];?></td>
            </tr>
            <tr>
                <td>Slug</td>
                <td><?php echo $categories['created_at'];?></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

