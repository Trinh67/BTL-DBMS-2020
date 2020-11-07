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
    <title>Zent - Education And Technology Group</title>
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
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Add New Product</h3>
    <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong><?= $_COOKIE['msg'] ?></strong>
        </div>
    <?php }?>
        <form action="?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id">
            </div>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="productName">
            </div>
            <div class="form-group">
                <label for="">Price Each (VND)</label>
                <input type="text" class="form-control" id="" placeholder="" name="price">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea rows = "8" class="form-control" id="contents" placeholder="" name="productDescription"></textarea>
            </div>
            <div class="form-group">
                <label for="">ProductLine</label>
                <select name="productLine" class="form-control">
                <?php foreach ($prodlines as $prls) {?>  
                  <option value="<?= $prls['id'] ?>"><?= $prls['textDescription'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Quantity In Stock</label>
                <input type="number" class="form-control" id="" placeholder="" name="quantityInStock">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="?mod=product" type="button" class="btn btn-primary">Back</a>
        </form>
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