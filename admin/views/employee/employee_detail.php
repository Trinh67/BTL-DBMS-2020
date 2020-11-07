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
    <h3 align="center">Detail Employee</h3>
    <hr>
        <h2><em>Name:</em> <?php echo $emp["name"] ?> </h2>
        <h2><em>Email:</em> <?php echo $emp["email"] ?></h2>
        <h2><em>Position:</em> <?php echo $emp["position"] ?></h2>
        <h2><em>Age:</em> <?php echo $emp["age"] ?></h2>
        <h2><em>Start_Date:</em><?= $emp['startDate'] ?></h2>
        <h2><em>Salary:</em><?= number_format($emp['salary']) ?></h2>
        <a href="?mod=employee&act=list" type="button" class="btn btn-primary">Back</a>
    </div>
</body>
</html>