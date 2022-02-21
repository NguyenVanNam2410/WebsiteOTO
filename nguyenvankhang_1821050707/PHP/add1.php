
<?php
    include "../connect.php";
    if(isset($_POST["sbm"]))
    {
        $name = $_POST["name"];
        $pass =$_POST["pass"];
        $date =$_POST["date"];
        $sql = "INSERT INTO tbl_user(Ten_TK,mat_khau,ngay) values('$name','$pass','$date')";
        if(mysqli_query($conn,$sql))
        {
            echo "insert dữ liệu thành công";
            //điều hướng trang tránh insert cùng 1 giá trị nhiêu làn khi F5 website
            header("Location:login.php");
        }
        else
            echo "insert dữ liệu thất bại" . mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .ac{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="header">
                <h2>Thêm ADMIN</h2>
            </div>
        </div>
        <div class="banner">
            <form   method="post" action="" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Tên tài khoản</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form_group">
                    <label for="">password:</label>
                    <input type="password" name="pass"  class="form-control">
                </div>
                <div class="form_group">
                    <label for="">ngay:</label>
                    <input type="date" name="date"  class="form-control">
                </div>
                <input type="submit" name="sbm" value="Thêm TK"  class="ac btn btn-primary" >
            </form>
        </div>   
    </div>
</body>
</html>