<?php
    // include "../connect.php";
    // if(isset($_POST['sbm']))
    // {
    //     $image= $_FILES['image']['image'];
    //     $image_tmp=$_FILES['image']['tmp_name'];
    //     $tin= $_POST['tin'];
    //     $ngay= $_POST['ngay'];
    //     $sql_insert = "INSERT INTO tbl_tintuc(image,tin,ngay)
    //     VALUES('$image', '$tin' ,'$ngay')";
    //     $query= mysqli_query($conn,$sql_insert);
    //     move_uploaded_file($image_tmp, 'images/'.$image);
    //     header('location: index2.php?page_layout=list'); 
    // }
    include "../connect.php";
			
    if(isset($_POST['sbm']))
    {
        $tin = mysqli_escape_string($conn,$_POST["tin"]);
        $ngay = mysqli_escape_string($conn,$_POST["ngay"]);
        $image = $_FILES['image']['name'];

        if($image != null)
        {


        $path = "images/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $image = $_FILES['image']['name'];

        move_uploaded_file($tmp_name,$path.$image);
            $sql = "INSERT INTO tbl_sukien (image,tin,ngay) values('$image','$tin','$ngay')";
            mysqli_query($conn,$sql);
            header('location: index2.php?page_layout=list1');
        }
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
                <h2>Thêm sản phẩm</h2>
            </div>
        </div>
        <div class="banner">
            <form   action="" method="post"  enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">ảnh:</label>
                    <input type="file" name="image">
                </div>
                <div class="form_group">
                    <label for="">Tin:</label>
                    <input type="text" name="tin" class="form-control" required>
                </div>
                <div class="form_group">
                    <label for="">Ngày:</label>
                    <input type="date" name="ngay" class="form-control" required>
                </div>
                 <button type="submit" name="sbm" class="ac btn btn-primary">Thêm</button>
            </form>
        </div>
            
    </div>
    
</body>
</html>


