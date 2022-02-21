<?php
      if(isset($_POST["Upload_image"]))
      {
          $target_dir = "image/";
          $target_file = $target_dir . basename($_FILES["tai_anh"]["name"]);
 
          $expand = pathinfo($_FILES['tai_anh']['name'], PATHINFO_EXTENSION);
          $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
          if (!in_array(strtolower($expand), $type_fileAllow)) {
            echo "Đây không phải là file ảnh";
          } else {
             if (move_uploaded_file($_FILES["tai_anh"]["tmp_name"], $target_file)) 
            {
                echo "upload ảnh thành công ^^";
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
          }
          
          
      }
?>
 
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"  >
            <h2 >upload file</h2>
            <p style="color:red">Upload ảnh lên sever và lưu về file image </p>
            <form action="upload1.php" method="POST" enctype="multipart/form-data">
                vui lòng chọn hình ảnh: 
                <input type="file" name="tai_anh"  placeholder="tải ảnh" > 
                <input type="submit" value="Upload Ảnh" class='btn btn-primary' name="Upload_image">
            </form>
        </div>
            <?php
                if (isset($target_file) && in_array(strtolower($expand), $type_fileAllow)){
                   
                    echo '<img src="'.$target_file.'" alt="" >';
                }
                
            ?>
    </body>
</html>