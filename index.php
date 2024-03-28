<?php
// include 'connection.php';
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <a href="">
                <li>HOME</li>
            </a>
            <a href="">
                <li>BOOKS</li>
            </a>
            <a href="">
                <li>ABOUT</li>
            </a>
            <a href="">
                <li>CONTACT US</li>
            </a>
        </ul>
        <span>
            <p>Welcome <?php echo  $_SESSION['email'];?></p>
            <p><a href="dashboard.php">Dashboard</a></p>
            <a href="logout.php">Logout</a>
        </span>
    </nav>
            
</body>
</html>

