<?php
    $sql=  "SELECT * FROM `tbl_tintuc`";
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
                        <li class=" banner_nav_navbar_item" style="background-color: #c8102e">
                            <a href="index2.php?page_layout=list" style="color: white" class="nav_navbar_link">Tin tức chung</a>
                        </li>
                        <li class="banner_nav_navbar_item">
                            <a href="index2.php?page_layout=list2" class="nav_navbar_link">Tin Khuyến Mãi</a>
                        </li>
                        <li class="banner_nav_navbar_item">
                            <a href="index2.php?page_layout=list1" class="nav_navbar_link">Tin sự kiện</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <!--tiêu đề bảng-->
                <tr>
                    <th>STT</th>
                    <th>ảnh</th>
                    <th>Tin Tức chung</th>
                    <th>ngày</th>
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
                                <td><?php echo $row['tin']; ?></td>
                                <td><?php echo $row['ngay']; ?></td>
                                <td>
                                <a class = "btn btn-danger "href="index2.php?page_layout=delete&id=<?php echo $row['ID']; ?>">Delete</a>
                            
                                </td>
                                <td>
                                <a class = "btn btn-warning"href="index2.php?page_layout=sua&id=<?php echo $row['ID']; ?>">sửa</td>
                            </tr>
                    <?php    }  ?>
                </tbody>
            </table>
            <a href="index2.php?page_layout=them" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</body>
</html>