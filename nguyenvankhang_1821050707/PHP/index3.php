<?php
    require_once '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['page_layout1'])) {
            switch ($_GET['page_layout1']) {
                case 'product1':
                    require_once 'hanhdong2/quanlisanpham.php';
                    break;
                case 'add':
                    require_once './hanhdong2/add.php';
                    break;
                case 'xoa':
                    require_once './hanhdong2/xoa.php';
                break;
                case 'edit':
                    require_once './hanhdong2/edit.php';
                    break;    
                default:
                    require_once './hanhdong2/quanlisanpham.php';
                    break;
            }
        }
        else {
            require_once './hanhdong2/quanlisanpham.php';
        }
        
    ?>
</body>
</html>