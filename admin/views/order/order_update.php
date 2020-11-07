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
        <form action="?mod=order&act=edit" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $order['id'] ?>">
            <div class="form-group">
                <label for="">Quantity Order</label>
                <input type="number" class="form-control" required id="" placeholder="" name="quantityOrdered" value="<?php echo $order['quantityOrdered'] ?>">
            </div>
            <div class="form-group">
                <label for="">Price Each (VND)</label>
                <input type="number_format" class="form-control" required id="" placeholder="" name="priceEach" value="<?= $order['priceEach']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="?mod=order" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>