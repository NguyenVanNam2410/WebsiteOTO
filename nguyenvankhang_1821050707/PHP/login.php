<?php
    require "../connect.php";
    session_start();
    if(isset($_GET["task"])&&$_GET["task"]=="logout")
    {
        session_unset();
    }
    // var_dump($where);exit;
    if(isset($_POST["login"]))
    {
        $us = $_POST["us"];
        $pa = $_POST["pa"];
        $sql = "select * from tbl_user where Ten_TK = '$us' and mat_khau = '$pa'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            // $where = "ID" != " $_SESSION['username'][ID]";
            $_SESSION["username"] = $us;
            header("location:danhmuc.php");
        }
        else
        {
            echo "<p style='font-weight:bold;color:red'>Sai username hoặc password</p>";
        }
    }
?>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            background-color: #a6e1ed;
        }
        /* .text_1{
            width:250px;
        } */
        /* .a1{
            padding-left:254px;
            margin-top:10px
        }
        .a2{
            margin-top:10px;
            padding-left:254px;
        } */
        h2{
            padding-top:90px;
        }
        label.text_2 {
            margin-right: 38px;
        }
        .menu12 {
            /* text-align: center; */
            height: 400px;
            width: 600px;
            background-color: #f1eaea;
            margin-left: 250px;
            
        }
        .menu_1_2{
            text-align:center;
            margin-top:85px;
        }
        input.btn.btn-primary {
            margin-left: 107px;
        }
        .a2 {
            padding-left: 254px;
        }
        input[type="text"] {
            background-color: #c4b0b0;
            border: none;
            outline: none;
        }
        input[type="password"] {
            background-color: #c4b0b0;
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu12">
            <div class="menu_1_2">
                <h2>Đăng nhập vào trang quản trị</h2>
                <form action="login.php" method="post">
                    <div>
                        <label for="" class="text_1">Nhập vào tên đăng nhập :</label>
                        <input  type="text" name="us">
                    </div>
                    <div>
                        <label class="text_2">Nhập vào mật khẩu :</label>
                        <input  type="password" name="pa">
                    </div>
                    <div class="a1">
                        <input  type="submit" name="login" value="đăng nhập" class="btn btn-primary">
                    </div>
                    <div class="a2">
                        <a href="add1.php">Đăng kí thành viên</a> | <a href="#">Quên mật khẩu</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>