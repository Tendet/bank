<?php
require "protect.php";

if(isset($_GET["id"]))
    {
        extract($_GET);
        require "connect.php";
        $query="update users set type=$type WHERE id=$id";
        mysqli_query($conn,$query);
        header("location:users.php");
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>

<?php require "navbar.php";?>

<div class="container" style="">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>ADMIN</th>
            <th>NORMAL</th>
            <th>DISABLE</th>
        </tr>

        <tbody>
        <?php
        require "connect.php" ;
        $query="select * from users";
        $result= mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result))
        {
            extract($row) ;
            echo "<tr>
    <td>$id</td>
    <td>$names</td>
    <td>$type</td>
    <td><a class='btn btn-success' href='users.php?id=$id&type=1'>Make Admin</a></td>
    <td><a class=' btn btn-danger' href='users.php?id=$id&type=2'>Make Normal</a></td>
    <td><a class='btn btn-warning' href='users.php?id=$id&type=3'>Disable</a></td>
    
  
          </tr>";





        }


        ?>
        </tbody>
        </thead>
    </table>
</div>
</body>

</html>

