<?php
    $sql=  "SELECT * FROM `tbl_sanpham` ORDER BY `tbl_sanpham`.`ID` DESC";
    $query= mysqli_query($conn ,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang quản trị tin </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gird.css">
    <link rel="stylesheet" href="./css/mainphp.css">
    <link rel="stylesheet" href="./css1/css/all.min.css">
    <link rel="stylesheet" href="./images">
</head>

<body>
    <?php
        session_start();
        require "../connect.php";
    ?>    
    <div class="app">
        <div class="hearder">
            <div class="grid wide">
                <div class="nav"> 
                    <ul class="nav_navbar">
                        <li class="nav_navbar_item">
                            <a href="#" class="nav_navbar_link">Xin chào : admin</a>
                        </li>
                    </ul>
                    <ul class="nav_navbar">
                        <li class="nav_navbar_item">
                            <i class="icon_1 fas fa-home"></i>
                            <a href="index.php" class="nav_navbar_link">Trang chủ</a>
                        </li>
                        <li class="nav_navbar_item">
                            <i class="icon_23 fas fa-laptop-house"></i>
                            <a href="dongxe.php" class="nav_navbar_link">Trang sản phẩm</a>
                        </li>
                        <li class="nav_navbar_item">
                            <i class="icon_2 fas fa-sign-out-alt"></i>
                            <a href="danhmuc.php" class="nav_navbar_link">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
        <div class="banner">
            <div class="grid wide">
                <div class="banner_nav"> 
                    <ul class="banner_nav_navbar">
                        <li class="banner_nav_navbar_item">
                            <a href="index3.php?page_layout=product1" class="nav_navbar_link">okge</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="index3.php?page_layout1=add" class="btn btn-primary ">Thêm mới</a>
        <div class="row">
            <table class="table table-striped">
                <!--tiêu đề bảng-->
                <tr>
                    <th>STT</th>
                    <th>ảnh</th>
                    <th>Tên SP</th>
                    <th>Giá</th>
                    <th>new</th>
                    <th>new1</th>
                    <th>Delete</th>
                    <th>sửa</th>
                </tr>
                <!--hiển thị dữ liệu-->
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($query)){ ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td>
                                    <img style="width:100px" src="images/<?php echo $row['image']; ?>">
                                </td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['news1']; ?></td>
                                <td><?php echo $row['new2']; ?></td>
                                <td>
                                <a class = "btn btn-danger "href="index3.php?page_layout1=xoa&id=<?php echo $row['ID']; ?>">Delete</a>
                            
                                </td>
                                <td>
                                <a class = "btn btn-warning"href="index3.php?page_layout1=edit&id=<?php echo $row['ID']; ?>">sửa</td>
                            </tr>
                    <?php    }  ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>