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
    <h3 align="center">Update Author</h3>
    <hr>
        <form action="?mod=customer&act=edit" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $cus['id'] ?>">
            <div class="form-group">
                <label for="">Customer Name</label>
                <input type="text" class="form-control" required id="" placeholder="" name="customerName" value="<?= $cus['customerName'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" required id="" placeholder="" name="email" value="<?= $cus['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" required id="" placeholder="" name="phone" value="<?= $cus['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="">AddressLine</label>
                <input type="text" class="form-control" required id="" placeholder="" name="addressLine" value="<?= $cus['addressLine'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="?mod=customer" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>