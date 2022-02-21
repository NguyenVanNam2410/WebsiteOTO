<?php
    $id= $_GET['id'];
    $sql_delete = "DELETE FROM tbl_sukien  where ID = $id";
    $query= mysqli_query($conn,$sql_delete);
    header('location: index2.php?page_layout=list1'); 
?>