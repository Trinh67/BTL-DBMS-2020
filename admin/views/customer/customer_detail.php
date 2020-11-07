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
    <h3 align="center">Customer Detail</h3>
    <hr>
        <h4><em>Customer Name:</em> <?= $cus['id'] ?></h4>
        <h4><em>Email: </em> <?= $cus['email'] ?> </h4>
        <h4><em>Phone Number:</em> <?= $cus['phone'] ?></h4>
        <h4><em>Address:</em> <?= $cus['addressLine'] ?></h4>
        <a href="?mod=customer&act=list" type="button" class="btn btn-primary">Back</a>
    </div>
</body>
</html>