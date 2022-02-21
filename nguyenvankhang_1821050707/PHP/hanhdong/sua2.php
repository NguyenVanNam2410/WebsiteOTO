<?php
    include "../connect.php";
        $sql = "SELECT * FROM `tbl_khuyenmai` WHERE ID = '$_GET[id]' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);


    if(isset($_POST['sbm']))
    {
        $tin = mysqli_escape_string($conn,$_POST["tin"]);
        $date = mysqli_escape_string($conn,$_POST["date"]);
        $anh = $_FILES['c_img']['name'];

        if($anh != null)
        {


        $path = "images/";
        $tmp_name = $_FILES['c_img']['tmp_name'];
        $anh = $_FILES['c_img']['name'];

        move_uploaded_file($tmp_name,$path.$anh);
            $sql = "UPDATE `tbl_khuyenmai` set image = '$anh' where ID ='$_GET[id]'";
            mysqli_query($conn,$sql);
            header('location: khuyenmai.php');
        }

        $sql = "UPDATE `tbl_khuyenmai` set  tin = '$tin' , ngay = '$date' where ID = '$_GET[id]' ";
        mysqli_query($conn,$sql);
        header('location: index2.php?page_layout=list2'); 
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
                    <input type="file" name="c_img">
                    <img src="upload/<?php echo $row['image']; ?>" style="max-width: 100px;">
                </div>
                <div class="form_group">
                    <label for="">Tin:</label>
                    <input type="text" name="tin" value="<?php echo $row['tin']; ?>"  class="form-control">
                </div>
                <div class="form_group">
                    <label for="">Ngày:</label>
                    <input type="date" name="date"  value="<?php echo $row['ngay']; ?>"  class="form-control">
                </div>
                <input type="submit" name="sbm" value="Update"  class="ac btn btn-primary" >
            </form>
        </div>
            
    </div>
    
</body>
</html>