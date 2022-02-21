<?php
    include("../connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/gird.css">
    <link rel="stylesheet" href="css/gird.css">
    <style>
        .nav a{
            text-decoration: none;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .ab{    
            text-decoration: none;

        }
        .nav{
            margin-top:50px;
        }
        .nav_1{
            margin-bottom:20px;
            font-size: 20px;
            color: #c8102e;
        }
        .nav_2{
            margin-bottom:5px;
            color: blue;
        }
        .nav_3{
            color:blue;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION["username"]){ 
            header("location:login.php");       
        }
    ?>
    <div class="container">
        <div class="grid wide">
            <div class="nav">
                <a class="nav_1">xin chào: <?php echo $_SESSION["username"] ?></a>
                <a href="user.php" class="nav_2">Danh sách tài khoản ADMIN</a>
                <a href="index3.php" class="nav_2">Trang quan trị san phẩm</a>
                <a href="index2.php" class="nav_2">Trang quan trị tin tức</a>
                <a href="khachhang.php" class="nav_2">Danh sách tài khoản Đăng kí cửa hàng</a>
                <a href="DSkiemtraxe.php" class="nav_2">Danh sách khách hàng kiểm tra xe</a>
                <a class="nav_3" style="color:#8d6767" href="login.php?task=logout">Đăng xuất</a>
            </div>
        </div>
    </div>
</body>
</html>