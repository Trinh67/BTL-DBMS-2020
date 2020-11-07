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
    <h3 align="center">Update Employee</h3>
    <hr>
        <form action="?mod=employee&act=edit" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $emp['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" required id="" placeholder="" name="name" value="<?php echo $emp['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" required id="" placeholder="" name="email" value="<?php echo $emp['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="*****" name="password" value="">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input type="text" class="form-control" required id="" placeholder="" name="position" value="<?php echo $emp['position'] ?>">
            </div>
            <div class="form-group">
                <label for="">Start_Date</label>
                <input type="text" class="form-control" required id="" placeholder="" name="startDate" value="<?php echo $emp['startDate'] ?>">
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" class="form-control" id="" placeholder="" name="age" value="<?php echo $emp['age'] ?>">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number_format" class="form-control" required id="" placeholder="" name="salary" value="<?php echo $emp['salary'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="?mod=employee" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>