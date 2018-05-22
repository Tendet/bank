
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Micro Bank</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="customer.php">new customer</a></li>

           <?php if($_SESSION["type"]==1):  ?>
            <li><a href="register.php">New user</a></li>
            <li><a href="users.php">View users</a></li>

            <?php endif;?>
            <li><a href="issue.php">Issue Loan</a></li>
            <li><a href="pending.php">Pending Loan</a></li>

            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?=$_SESSION["names"]?></a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
    </div>
</nav>