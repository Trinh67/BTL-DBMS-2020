<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong>Thất bại! </strong> Thêm mới không thành công !!!
        </div>
        <?php }?>
        <form action="?mod=customer&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" required id="" placeholder="" name="customerName" value="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" required id="" placeholder="" name="phone" value="">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" required id="" placeholder="" name="addressLine" value="">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="?mod=customer" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>