<?php
require "protect.php";
if($_SESSION["type"] != 1)
{
    echo "<h2>You are not allowed to see this page</h2>";
    die();
}


$message='';
if (isset($_POST["names"]))
{
    require "connect.php";
    extract($_POST);
    $query = "insert into users values (null, '$names','$email' ,'$password',2)";
    $result=mysqli_query($conn, $query); // or die (mysqli_error($conn));
    if ($result)
        $message="<h4 class='text-primary'> Registered successfully</h4>";
    else
        $message="<h4 class='text-danger'> Registration not successful</h4>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
            <span class="glyphicon glyphicon-user"></span>
        </p>
        <p class="text-center">Register new user</p>
        <?=$message?>
        <form role="form" method="post" action="register.php">
            <div class="form-group">
                <label for="email">Names</label>
                <input type="text" name="names"  required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  name="email" required class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" required class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-success btn-block">Register new User</button>
        </form>
    </div>
</div>
</body>
</html>