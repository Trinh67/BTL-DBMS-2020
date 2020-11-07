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
    <h3 align="center">Detail Product</h3>
    <hr>
        <h2><em>ProductLine:  </em> <?php echo $prod["textDescription"] ?> </h2>
        <h2><em>Name:  </em> <?php echo $prod["productName"] ?> </h2>
        <h2><em>Price Each:  </em> <?= number_format($prod['price']) ?> VND </h2>
        <h2><em>Quantity In Stock: </em> <?= $prod['quantityInStock'] ?></h2>
        <h2><em>Image:  </em> <img src="public/img/<?= $prod['thumbnail'] ?>" weight = "300px" height = "200px"> </h2>
        <a href="?mod=product" type="button" class="btn btn-primary">Back</a>
    </div>
</body>
</html>