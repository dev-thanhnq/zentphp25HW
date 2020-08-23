<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="add.php" method="POST" role="form" enctype="multipart/form-data">
        <legend><center>Upload Document</center></legend>
        <div class="form-group">
            <label for="">Tên tài liệu</label>
            <input type="text" name="docname" class="form-control" id="" placeholder="Nhập tên tài liệu">
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" name="images">
        </div>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
    </form>
</div>
</body>
</html>

