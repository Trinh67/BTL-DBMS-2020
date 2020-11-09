<?php

require_once ('models/Connection.php');
// Load menu bài viết
$conn_obj = new Connection();
// Cau lenh truy van
$query_prodlines = "SELECT
  *
FROM
  productlines";

// Thuc thi cau lenh
$result_prodlines = $conn_obj -> conn -> query($query_prodlines);

// Tao 1 mang de chua du lieu
$prodlines = array();

while ($row = $result_prodlines->fetch_assoc()) {
  $prodlines[] = $row;
}  

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sport Shop</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Update Product</h3>
    <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong>Thất bại! </strong> <?= $_COOKIE['msg'] ?>
        </div>
        <?php }?>
        <form action="?mod=product&act=edit" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $product['productCode'] ?>">
            </div>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="productName" value="<?= $product['productName'] ?>">
            </div>
            <div class="form-group">
                <label for="">Price Each (VND)</label>
                <input type="number" class="form-control" id="" placeholder="" name="price" value="<?= $product['buyPrice'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea rows = "8" class="form-control" id="contents" placeholder="" name="productDescription"><?= $product['productDescription'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">ProductLine</label>
                <select name="productLine" class="form-control">
                <?php foreach ($prodlines as $prls) {?>  
                  <option <?= ($prls['productLineCode'] == $product['productLineCode'])?'selected':"" ?> value="<?= $prls['productLineCode'] ?>"><?= $prls['productLine'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Quantity In Stock</label>
                <input type="number" class="form-control" id="" placeholder="" name="quantityInStock" value="<?= $product['quantityInStock'] ?>">
            </div>
            <div class="form-group">
                <h4>Current Thumbnail: </h4><img src="<?= $product['image'] ?>" weight = "300px" height = "200px"><br/><br/>
                <label for="">New Thumbnail</label>
                <!-- <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $product['image'] ?>"> -->
                <input type="text" class="form-control" id="" placeholder="" name="image" value="<?= $product['image'] ?>">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="?mod=product" type="button" class="btn btn-primary">Back</a>
        </form>
        <br/><br/>
    </div>
    <script>
    $(document).ready(function() {
        $('#contents').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });
    });
    </script>
</body>
</html>