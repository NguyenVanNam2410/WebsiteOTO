<?php
    $id= $_GET['id'];
    $sql_delete = "DELETE FROM tbl_sanpham  where ID = $id";
    $query= mysqli_query($conn,$sql_delete);
    header('location: index3.php?page_layout1=product1'); 
?>