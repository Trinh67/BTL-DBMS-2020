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
    <h3 align="center">Order Detail</h3>
    <hr>
        <h4><em>Order_Number:</em> <?= $order['id'] ?></h4>
        <h4><em>Product_Name: </em> <?= $order['productName'] ?> </h4>
        <h4><em>Quantity_Ordered:</em> <?= $order['quantityOrdered'] ?></h4>
        <h4><em>Total_Price:</em> <?= number_format($order['quantityOrdered'] * $order['priceEach']) ?> VND</h4>
        <h4><em>Image:</em> <img src="public/img/<?= $order['thumbnail'] ?>" width="150px" hight="200px"> </h4>
        <a href="?mod=order&act=list" type="button" class="btn btn-primary">Back</a>
    </div>
</body>
</html>