<?php
    // require "../connect.php";

//     $id= $_GET['id'];

//     $sql_up = "SELECT FROM tbl_tintuc  where ID = $id";
//     $query_up= mysqli_query($conn,$sql_up);
//     $row_up =  mysqli_query_assoc($query_up);

//     if(isset($_POST['sbm']))
//     {
//         if($_FILES['image']['name']==''){
//             $image= $row_up['image'];
//         }else{
//             $image= $row_up['image']['name'];
//             $image_tmp=$_FILES['image']['tmp_name'];
//             move_uploaded_file($image_tmp, 'images/'.$image);
//         }
//         $tin= $_POST['tin'];
//         $ngay= $_POST['ngay'];
//         $sql_insert = "UPDATE tbl_tintuc SET image = '$image' ,tin = '$tin' ,ngay = '$ngay' ";
//         $query= mysqli_query($conn,$sql_insert);
//         header('location: index2.php?page_layout=quan_li'); 
//     }
   
// ?>
 <?php
    include "../connect.php";
        $sql = "SELECT * FROM `tbl_tintuc` WHERE ID = '$_GET[id]' ";
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
            $sql = "UPDATE `tbl_tintuc` set image = '$anh' where ID ='$_GET[id]'";
            mysqli_query($conn,$sql);
            header('location: quanli.php');
        }

        $sql = "UPDATE `tbl_tintuc` set  tin = '$tin' , ngay = '$date' where ID = '$_GET[id]' ";
        mysqli_query($conn,$sql);
        header('location: index2.php?page_layout=list'); 
    }
?>
    <?php
        // include "../connect.php";
        // if(isset($_POST["sbm"]))
        // {

        //     $id = $_GET["id"];
        //     if($anh != null)
        //     {


        //     $path = "images/";
        //     $tmp_name = $_FILES['c_img']['tmp_name'];
        //     $anh = $_FILES['c_img']['name'];

        //     move_uploaded_file($tmp_name,$path.$anh);
        //         $sql = "UPDATE `tbl_tintuc` set image = '$anh' where ID ='$_GET[id]'";
        //         mysqli_query($conn,$sql);
        //         header('location: quanli.php');
        //     }
        //     $sql_update = "update tbl_tintuc set tin = N'".$_POST["tin"]."' where ID=' $_GET[id]'";
        //     $sql_update = "update tbl_tintuc set ngay = N'".$_POST["date"]."' where ID= '$_GET[id]'";
        //     if(mysqli_query($conn,$sql_update))
        //     {
        //         echo "sửa thành công mã danh muc ". $id;
        //         header('location: index2.php?page_layout=list'); 
        //     }
        //     else{
        //         echo "sửa dữ liệu thất bại" . mysqli_error($conn);
        //     }
        // }
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