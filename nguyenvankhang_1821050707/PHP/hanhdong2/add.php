
<?php
    include "../connect.php";
    if(isset($_POST['sbm']))
    {
        $name = mysqli_escape_string($conn,$_POST["name"]);
        $price = mysqli_escape_string($conn,$_POST["price"]);
        $news1 = mysqli_escape_string($conn,$_POST["news1"]);
        $new2 = mysqli_escape_string($conn,$_POST["new2"]);
        $image = $_FILES['image']['name'];

        if($image != null)
        {


        $path = "images/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $image = $_FILES['image']['name'];

        move_uploaded_file($tmp_name,$path.$image);
            $sql = "INSERT INTO tbl_sanpham (image,name,price,news1,new2) values('$image','$name','$price','$news1','$new2')";
            mysqli_query($conn,$sql);
            header('location: index3.php?page_layout1=product1');
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
                <h2>Sửa sản phẩm</h2>
            </div>
        </div>
        <div class="banner">
            <form   method="post" action="" enctype="multipart/form-data">
                <div class="form_group">                
                    <label for="">Ảnh:</label>
                    <input type="file" name="image">
                </div>
                <div class="form_group">
                    <label for="">name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form_group">
                    <label for="">Giá:</label>
                    <input type="int" name="price"  class="form-control">
                </div>
                <div class="form_group">
                    <label for="">news1:</label>
                    <input type="text" name="news1"  class="form-control">
                </div>
                <div class="form_group">
                    <label for="">new2:</label>
                    <input type="text" name="new2" class="form-control">
                </div>
                <input type="submit" name="sbm" value="Update"  class="ac btn btn-primary" >
            </form>
        </div>
            
    </div>
    
</body>
</html>