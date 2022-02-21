<?php
    include "../connect.php";
    $sql=  "SELECT * FROM `tbl_user`";
    $query= mysqli_query($conn ,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="ad" style="margin-bottom:20px; color:black">
                <h2 style="margin-left:320px">Danh sách tài khoản ADMIN</h2>
                <a href="danhmuc.php" style="margin-bottom:20px; font-size:20px ;color:black">quay lại</a>
            </div>
            <table class="table table-striped">
                <!--tiêu đề bảng-->
                <tr >
                    <th>Stt</th>
                    <th>tên tài khoản</th>
                    <th>password</th>
                    <th >ngày đăng kí</th>
                </tr>
                <!--hiển thị dữ liệu-->
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($query)){ ?>
                            <tr>
                                <td><?php echo $row['ID_TK']; ?></td>
                                <td><?php echo $row['Ten_TK']; ?></td>
                                <td><?php echo $row['mat_khau']; ?></td>
                                <td><?php echo $row['ngay']; ?></td>
                                <td>
                            </tr>
                    <?php    }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>