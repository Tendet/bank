
<?php
require "protect.php";
if (isset($_POST["names"]))
{
    require "connect.php";
    extract($_POST);
    $query = "insert into customers values (null, '$names','$id' ,'$phone')";
    mysqli_query($conn,$query);
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New customer</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>


        body{width: 100%;
            height: 100%;
        }

        .container{
            height: 100vh;
            display: flex;
            align-content: center;
            align-items: center;

        }
        .glyphicon {
            font-size: 80px;
            color: black;
        }
    </style>
</head>
<body>
<?php require "navbar.php";?>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center">
            <span class="glyphicon glyphicon-queen"></span>
        </p>
      <p class="text-center">Register new customer</p>
        <form role="form" method="post" action="customer.php">

            <div class="form-group">
                <label for="email">Full Names</label>
                <input type="text" name="names" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">ID number</label>
                <input type="number"  name="id" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Phone number</label>
                <input type="number" name="phone" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-success btn-block">Register customer</button>
        </form>
    </div>
</div>
</body>
</html>