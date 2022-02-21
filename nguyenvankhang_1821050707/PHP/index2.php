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
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'list1':
                    require_once 'hanhdong/sukien.php';
                    break;
                case 'list2':
                    require_once 'hanhdong/khuyenmai.php';
                     break;
                case 'list':
                    require_once 'hanhdong/quanli.php';
                    break;
                case 'them':
                    require_once './hanhdong/them.php';
                    break;
                case 'delete':
                    require_once './hanhdong/delete.php';
                break;
                case 'sua':
                    require_once './hanhdong/sua.php';
                    break;
                case 'them1':
                    require_once './hanhdong/them1.php';
                    break;
                case 'sua1':
                    require_once './hanhdong/sua1.php';
                    break;   
                case 'delete1':
                    require_once './hanhdong/delete1.php';
                    break;
                case 'them2':
                    require_once './hanhdong/them2.php';
                    break;
                case 'sua2':
                    require_once './hanhdong/sua2.php';
                    break;   
                case 'delete2':
                    require_once './hanhdong/delete2.php';
                    break;       
                default:
                    require_once './hanhdong/quanli.php';
                    break;
            }
        }
        else {
            require_once './hanhdong/quanli.php';
        }
        
    ?>
</body>
</html>