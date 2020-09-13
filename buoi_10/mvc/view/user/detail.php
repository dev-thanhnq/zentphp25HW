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
    <a href="index.php?mod=user&act=list" class="btn btn-primary">users</a>
    <form action="">
        <table class="table">
            <tr>
                <td>ID</td>
                <td><?php echo $users['id'];?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $users['name'];?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $users['email'];?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $users['password'];?></td>
            </tr>
            <tr>
                <td>Avatar</td>
                <td><?php echo $users['avatar'];?></td>
            </tr>
            <tr>
                <td>Created at</td>
                <td><?php echo $users['created_at'];?></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

