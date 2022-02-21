<?php
    $severname="localhost";
    $username ="root";
    $password ="";
    $db="db_okage";
    $conn = mysqli_connect($severname,$username,$password,$db);
    
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }
    

    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        
        $user    = $_POST["user"];
        $pass    = $_POST["pass"];
        $create_date = date("Y/m/d");
        // $create_date = time();
        // var_dump($create_date);exit;
        $sql = "INSERT INTO `tbl_khachhang` (`user`, `pass` , `ngay`) VALUES ('".$user."','".$pass."',".$create_date.")";
        // echo "$sql";exit;
        if(mysqli_query($conn,$sql)){
            echo "Đăng kí thành công";
        }else{
            echo "đăng kí thất bại";
        }

    }
    if (isset($_POST["vin"]) && isset($_POST["so_khung"])) {
        
        $vin    = $_POST["vin"];
        $so_khung    = $_POST["so_khung"];
       
        $sql = "INSERT INTO `tbl_kiemtraxe` (`VIN`, `so_khung`) VALUES ('".$vin."','".$so_khung."')";
        // echo "$sql";exit;
        if(mysqli_query($conn,$sql)){
            echo "";
        }else{
            echo "đăng kí thất bại";
        }
        
    }



?>