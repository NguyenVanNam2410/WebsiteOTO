<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKAGE VN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/responsive.css"> 
    <link rel="stylesheet" href="css/gird.css">
    <link rel="stylesheet" href="./css1/css/all.min.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <script>
        $(document).ready(function(){
            $("#submit").click(function() {
                
                $.ajax({
                    type: "post",
                    url: "ajax.php",
                    data: {
                        "user": $("input[name=user]").val(),
                        "pass": $("input[name=pass]").val(),
                    },
                    success: function(msg) {
                        alert(msg);
                    },


                })
            });
        });
    </script>
    <!-- <script language="javascript">
            function  pagination2(){
                $.ajax({
                    url : "pagination1.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        
                    },
                    success : function (product_pagination){
                        $('#product_pagination').html(product_pagination);
                    }
                });
            }
    </script>
    <script language="javascript">
            function pagination3(){
                $.ajax({
                    url : "pagination2.php",
                    type : "post",
                    dataType:"text",
                    data : {
                            
                    },
                    success : function (product_pagination){
                        $('#product_pagination').html(product_pagination);
                    }
                });
            }
    </script>
    <script language="javascript">
            function  pagination4(){
                $.ajax({
                    url : "pagination3.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         
                    },
                    success : function (product_pagination){
                        $('#product_pagination').html(product_pagination);
                    }
                });
            }
    </script> -->
</script>
</head>
<body>
    <header class="header">
        <div class="grid wide">
            <nav class="nav_navbar">
                <div class="nav_image">
                    <img src="./images/oto.png" alt="ô tô">
                </div>
                <div class="123 hide-on-mobile hide-on-tablet">
                    <ul class="nav_navbar_menu ">
                        <li class="nav_navbar_item nav_navbar_item_list">
                            <a href="index.php" class="nav_navbar_link">Về OKAGE</a>
                        </li>
                        <li class="nav_navbar_item nav_navbar_item_list">
                            <a href="#" class="nav_navbar_link active_dv">Sản phẩm</a>
                            <div class="nav_tong">
                                <div class="nav_tong_cua1">
                                    <ul class="nav_tong_1">
                                        <li class="nav_navbar_1 ative12" onclick="sanpham('sp1',this)">
                                            <a href="#" class="nav_navbar_1_label">Yari(6)</a>
                                        </li>
                                        <li class="nav_navbar_1"onclick="sanpham('sp2',this)">
                                            <a href="#" class="nav_navbar_1_label">Yama(3)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp3',this)">
                                            <a href="#" class="nav_navbar_1_label">wigo(2)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp4',this)">
                                            <a href="#" class="nav_navbar_1_label">land cruiser(4)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp5',this)">
                                            <a href="#" class="nav_navbar_1_label">innova(3)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp6',this)">
                                            <a href="#" class="nav_navbar_1_label">hiace(2)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp7',this)">
                                            <a href="#" class="nav_navbar_1_label">lilux(4)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp8',this)">
                                            <a href="#" class="nav_navbar_1_label">avanza(1)</a>
                                        </li>
                                        <li class="nav_navbar_1" onclick="sanpham('sp9',this)">
                                            <a href="#" class="nav_navbar_1_label">lanphand luury</a>
                                        </li>
                                    </ul>
                                    <ul id="sp1" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">Yama</h2>
                                            <span class="product_item-label">gọn nhỏ lướt phố</span>
                                            <p class="product_item-label_1">Giá: 500.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/5.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp2" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">Yama</h2>
                                            <span class="product_item-label">beautiful monster</span>
                                            <p class="product_item-label_1">Giá: 345.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h7.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp3" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">wigo</h2>
                                            <span class="product_item-label">Hậu duệ xứng tầm</span>
                                            <p class="product_item-label_1">Giá: 628.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h4.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp4" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">land cruiser</h2>
                                            <span class="product_item-label">Chở đầy yêu thương</span>
                                            <p class="product_item-label_1">Giá: 750.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h3.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp5" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">innova</h2>
                                            <span class="product_item-label">Hành trình an vui</span>
                                            <p class="product_item-label_1">Giá: 1.130.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h8.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp6" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">hiace</h2>
                                            <span class="product_item-label">gọn nhỏ lướt phố</span>
                                            <p class="product_item-label_1">Giá: 100.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/5.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp7" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">lilux</h2>
                                            <span class="product_item-label">Mang đến yêu thương</span>
                                            <p class="product_item-label_1">Giá: 625.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h5.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp8" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">avanza</h2>
                                            <span class="product_item-label">Thỏa sức đam mê</span>
                                            <p class="product_item-label_1">Giá: 100.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h1.png" alt="">
                                        </div>
                                    </ul>
                                    <ul id="sp9" class="nav_navbar_2">
                                        <div class="label_img">
                                            <h2 class="label_img1">lanphand lury</h2>
                                            <span class="product_item-label">Nâng cao giá trị</span>
                                            <p class="product_item-label_1">Giá: 100.000.000 VND</p>
                                            <ul class="product_price hide-on-mobile hide-on-tablet">
                                                <li class="product_pice-item">• số chỗ ngồi: 5 chỗ</li>
                                                <li class="product_pice-item">• khiểu dáng: Hatchback</li>
                                                <li class="product_pice-item">• Nhiên liệu: xăng</li>
                                                <li class="product_pice-item">• Thông tin khác:</li>
                                                <li class="product_pice-item">+ Số sàn 5 cấp </li>
                                            </ul>
                                        </div>
                                        <div class="img_img">
                                            <img src="images/h8.png" alt="">
                                        </div>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="nav_navbar_item nav_navbar_item_list">
                            <a href="dichvu.php" class="nav_navbar_link">Dịch vụ</a>
                            <ul class="nav_dv">
                                    <li class="dv_nav_item">
                                        <a href="" class="dv_nav_link">Chính sách bảo hành</a>
                                    </li>
                                    <li class="dv_nav_item">
                                        <a href="" class="dv_nav_link">Dịch vụ bảo dưỡng</a>
                                    </li>
                                    <li class="dv_nav_item">
                                        <a href="" class="dv_nav_link">Dịch vụ sửa chữa</a>
                                    </li>
                                    <li class="dv_nav_item">
                                        <a href="" class="dv_nav_link">Kiểm tra triệu hồi</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="nav_navbar_item nav_navbar_item_list">
                            <a href="#dichvugiatang" class="nav_navbar_link">DV gia tăng </a>
                            <ul class="nav_dv">
                                <li class="dv_nav_item">
                                    <a href="" class="dv_nav_link">Vay okage- mua okage</a>
                                </li>
                                <li class="dv_nav_item">
                                    <a href="" class="dv_nav_link">Xe đã qua sử dụng</a>
                                </li>
                                <li class="dv_nav_item">
                                    <a href="" class="dv_nav_link">Bảo hiểm okage</a>
                                </li>
                                <li class="dv_nav_item">
                                    <a href="" class="dv_nav_link">Phụ tùng và phụ kiên</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav_navbar_item nav_navbar_item_list">
                            <a href="#video" class="nav_navbar_link">Công nghệ</a>
                        </li>
                        <li class="nav_navbar_item">
                            <a href="#new" class="nav_navbar_link">Tin tức</a>
                        </li>
                    </ul>
                </div>
                <div class="1234  hide-on-mobile hide-on-tablet">

                    <div class="nav_navbar_search ">
                        <div class="nav_nav_search_1">
                            <input type="text" class="nav_search" placeholder="Tìm kiếm">
                        </div>
                        <div class="nav_app">
                            <a href="#" class="nav_app_1"><img  src="./images/fb.png" /></a>
                            <a href="#"><img  src="./images/tb.png" /></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="dongxe">
        <div class="carousel">
            <img src="./images/banner_xemoi.jpg" alt="">
        </div>
        <div class="banner_product">
            <div class="grid wide">
                <div class="banner_product_label_item">
                    <span class="banner_product_label1">SẢN PHẨM OKAGE </span>
                </div>
                <div class="banner_product_label_item1">
                    <span class="banner_product_label2">Tất cả các phiên bản xe</span>
                    <select id="banner_sap" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="">Sắp xếp</option>
                        <option <?php if(isset($_GET['chieu']) && $_GET['chieu'] == "desc") {  ?> selected <?php }?> value="?gia=price&chieu=desc">cao đến thấp</option>
                        <option <?php if(isset($_GET['chieu']) && $_GET['chieu'] == "asc")  {  ?> selected <?php }?> value="?gia=price&chieu=asc">Thấp đến cao</option>
                    </select>
                    <!-- <a href="#" class="banner_product_label3">Sắp xếp</a> -->
                </div>
                <div class="banner_product_search">
                    <form  method="GET" class="banner_product_search1" > 
                        <input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] : ""?>" name="name" class="banner_product_search_item"/>
                        <input type="submit" value="Tìm kiếm" class="banner_product_search_link"/>
                    </form>
                </div>
                <div class="banner_product_okage">
                    <div class="row">
                        <div class="col l-3 m-0 c-0">
                            <nav class="banner_product_nav">
                                <ul class="nav_banner_product">
                                    <li class="nav_banner_product_item showProduct">
                                        <a href="#" class="nav_banner_product_link">mẫu xe</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                        <ul class="product__child">                                     
                                            <li class="product__child--item">
                                                <input type="checkbox"  class="product_checked ">
                                                <label class="product_label">Wigo(2)</label>
                                            </li>
                                            <li class="product__child--item ">
                                                <input type="checkbox" class="product_checked">
                                                <label class="product_label">Wigo(2)</label>
                                            </li>
                                            <li class="product__child--item ">
                                                <input type="checkbox" class="product_checked">
                                                <label class="product_label">Wigo(2)</label>
                                            </li>
                                            <li class="product__child--item ">
                                                <input type="checkbox" class="product_checked">
                                                <label class="product_label">Wigo(2)</label>
                                            </li>
                                            <li class="product__child--item ">
                                                <input type="checkbox" class="product_checked">
                                                <label class="product_label">Wigo(2)</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <ul class="product__child">
                                       
                                        <li class="product__child--item">
                                            <input type="checkbox"  class="product_checked ">
                                            <label class="product_label">Wigo(2)</label>
                                        </li>
                                        <li class="product__child--item ">
                                            <input type="checkbox" class="product_checked">
                                            <label class="product_label">Wigo(2)</label>
                                        </li>
                                        <li class="product__child--item ">
                                            <input type="checkbox" class="product_checked">
                                            <label class="product_label">Wigo(2)</label>
                                        </li>
                                        <li class="product__child--item ">
                                            <input type="checkbox" class="product_checked">
                                            <label class="product_label">Wigo(2)</label>
                                        </li>
                                        <li class="product__child--item ">
                                            <input type="checkbox" class="product_checked">
                                            <label class="product_label">Wigo(2)</label>
                                        </li>
                                    </ul> -->
                                    <li class="nav_banner_product_item">
                                        <a href="#" class="nav_banner_product_link">giá</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                    </li>
                                    <li class="nav_banner_product_item">
                                        <a href="#" class="nav_banner_product_link">nhiên liệu</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                    </li>
                                    <li class="nav_banner_product_item">
                                        <a href="#" class="nav_banner_product_link">số chỗ ngồi</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                    </li>
                                    <li class="nav_banner_product_item">
                                        <a href="#" class="nav_banner_product_link">kiểu dáng</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                    </li>
                                    <li class="nav_banner_product_item">
                                        <a href="#" class="nav_banner_product_link">xuất xứ</a>
                                        <i class="product_icon fas fa-chevron-down"></i>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col l-9 m-12 c-12">
                            <div id="product_pagination" class="product_okage">
                                <div class="row">
                                <?php
                                    $chon="";//tạo rỗng 
                                    $param = "";
                                    $sortparam  = "";
                                    $search = isset($_GET['name']) ? $_GET['name'] : "";//lấy giữ liệu biến mình search
                                    if($search) {
                                        $where = "WHERE `name` LIKE '%$search%' ";
                                        $param .= "name=".$search."&";
                                        $sortparam   = "name=".$search."&";
                                    }
                                    // print_r($tensapxep);exit;

                                    $giasanpham = isset($_GET['gia']) ? $_GET['gia'] : "";//lấy địa chỉ trên thanh option giá sản phẩm hoặc cũng có thể thay đổi sắp xếp thành tên sản phẩm và hàm empty kiểm tra xem nó có rỗng hay không.
                                    $chieu = isset($_GET['chieu']) ? $_GET['chieu'] : "";// lấy đọa chỉ trên thanh sản phẩm theo chiều cao hoặc thấp
                                    // print_r($giasanpham);exit;
                                    if (!empty($giasanpham) && !empty($chieu)) {
                                        $chon= "ORDER BY `tbl_sanpham`.`".$giasanpham."` ".$chieu;
                                        $param .= "gia=".$giasanpham."&chieu=".$chieu."&";
                                        // print_r($chon);exit; // làm biến thử xem đã lấy được chưa 
                                    }
                                    // print_r($param);exit;
                                    // $param = "";
                                    // if ($search) {
                                    //     $param = "name=".$search."&";
                                    // }                                      
                                    include 'cofig.php';
                                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:9;//hiển thị 9 sản phẩn 
                                    $current_page  = !empty($_GET['page'])?$_GET['page']:1;//trang mặc định
                                    $offset        = ( $current_page - 1) * $item_per_page ;//
                                    if($search){
                                        $tin          = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `name` LIKE '%$search%' ".$chon." LIMIT ".$item_per_page." OFFSET  ".$offset);
                                        $totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `name` LIKE '%$search%' ");//đếm số tổng số sản phẩm     
                                    } else {
                                        // print_r("SELECT * FROM `tbl_sanpham` ".$chon." LIMIT ".$item_per_page." OFFSET  ".$offset);exit;
                                        $tin          = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` ".$chon." LIMIT ".$item_per_page." OFFSET  ".$offset);
                                        $totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` ");//đếm số tổng số sản phẩm     
                                    }
                                    // if($search){
                                    //     $tin          = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `name` LIKE '%$search%'  ORDER BY `ID` ASC LIMIT ".$item_per_page." OFFSET  ".$offset);
                                    //     $totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `name` LIKE '%$search%' ");//đếm số tổng số sản phẩm     
                                    // } else {
                                    //     $tin          = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` ORDER BY `ID` ASC LIMIT ".$item_per_page." OFFSET  ".$offset);
                                    //     $totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` ");//đếm số tổng số sản phẩm     
                                    // }
                                    // print_r($tin);exit;
                                    // var_dump( $totalRecords);exit;
                                    // print_r($totalRecords);exit;
                                    $totalRecords = $totalRecords->num_rows;//lấy tổng số sản phẩm
                                    $totalPages   = ceil($totalRecords / $item_per_page);//làm tròn nếu dư + thêm 1 trang ,nếu thiếu hiển thị 1 trang 
                                    // print_r($totalRecords);exit;
                                
                                ?> 
                                <?php
                                   while ($row = mysqli_fetch_array($tin)) {
                                ?>
                                    <div class="col l-4 m-4 c-6">
                                        <div class="product_banner_okage">
                                            <div class="product_banner_img">
                                                <img src="images/<?=$row['image'] ?>" alt="">
                                            </div>
                                            <h4 class="product_banner_title"><?=$row['name'] ?></h4>
                                            <div class="product_banner_okage_1">
                                                <div class="product_banner_information">
                                                    <span class="product_banner_price">Giá từ: <?= number_format($row['price'], 0 ,",", "." ) ?> VND</span>
                                                    <ul class="product_price hide-on-mobile hide-on-tablet">
                                                        <li class="product_pice-item"><?=$row['news1'] ?></li>
                                                        <li class="product_pice-item"><?=$row['new2'] ?></li>                                                                                                                   
                                                    </ul>
                                                </div>
                                                <div class="product_banner_service">
                                                    <span class="product_banner_service_1">DỰ ĐOÁN | SO SÁNH</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                    <div class="col l-4 m-4 c-6">
                                        <div class="product_banner_okage">
                                            <div class="product_banner_img">
                                                <img src="./images/sanpham.png" alt="">
                                            </div>
                                            <h4 class="product_banner_title">COROLLA CROSS 1.8HV</h4>
                                            <div class="product_banner_okage_1">
                                                <div class="product_banner_information">
                                                    <span class="product_banner_price">Giá từ: 820,000,000 VND</span>
                                                    <ul class="product_price hide-on-mobile hide-on-tablet">
                                                        <li class="product_pice-item">• 5 chỗ  • SUV  • xăng  • xe nhập khẩu</li>
                                                        <li class="product_pice-item">• Hộp số tự động cấp CVT  • Dung tích 1798cm3</li>
                                                    </ul>
                                                </div>
                                                <div class="product_banner_service">
                                                    <span class="product_banner_service_1">DỰ ĐOÁN | SO SÁNH</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-4 m-4 c-6">
                                        <div class="product_banner_okage">
                                            <div class="product_banner_img">
                                                <img src="./images/sanpham.png" alt="">
                                            </div>
                                            <h4 class="product_banner_title">COROLLA CROSS 1.8HV</h4>
                                            <div class="product_banner_okage_1">
                                                <div class="product_banner_information">
                                                    <span class="product_banner_price">Giá từ: 820,000,000 VND</span>
                                                    <ul class="product_price hide-on-mobile hide-on-tablet">
                                                        <li class="product_pice-item">• 5 chỗ  • SUV  • xăng  • xe nhập khẩu</li>
                                                        <li class="product_pice-item">• Hộp số tự động cấp CVT  • Dung tích 1798cm3</li>
                                                    </ul>
                                                </div>
                                                <div class="product_banner_service">
                                                    <span class="product_banner_service_1">DỰ ĐOÁN | SO SÁNH</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-4 m-4 c-6">
                                        <div class="product_banner_okage">
                                            <div class="product_banner_img">
                                                <img src="./images/sanpham.png" alt="">
                                            </div>
                                            <h4 class="product_banner_title">COROLLA CROSS 1.8HV</h4>
                                            <div class="product_banner_okage_1">
                                                <div class="product_banner_information">
                                                    <span class="product_banner_price">Giá từ: 820,000,000 VND</span>
                                                    <ul class="product_price hide-on-mobile hide-on-tablet">
                                                        <li class="product_pice-item">• 5 chỗ  • SUV  • xăng  • xe nhập khẩu</li>
                                                        <li class="product_pice-item">• Hộp số tự động cấp CVT  • Dung tích 1798cm3</li>
                                                    </ul>
                                                </div>
                                                <div class="product_banner_service">
                                                    <span class="product_banner_service_1">DỰ ĐOÁN | SO SÁNH</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-4 m-4 c-6">
                                        <div class="product_banner_okage">
                                            <div class="product_banner_img">
                                                <img src="./images/sanpham.png" alt="">
                                            </div>
                                            <h4 class="product_banner_title">COROLLA CROSS 1.8HV</h4>
                                            <div class="product_banner_okage_1">
                                                <div class="product_banner_information">
                                                    <span class="product_banner_price">Giá từ: 820,000,000 VND</span>
                                                    <ul class="product_price hide-on-mobile hide-on-tablet">
                                                        <li class="product_pice-item">• 5 chỗ  • SUV  • xăng  • xe nhập khẩu</li>
                                                        <li class="product_pice-item">• Hộp số tự động cấp CVT  • Dung tích 1798cm3</li>
                                                    </ul>
                                                </div>
                                                <div class="product_banner_service">
                                                    <span class="product_banner_service_1">DỰ ĐOÁN | SO SÁNH</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="grid wide">
                <div class="pagination_nav">
                    <ul class="pagination_nav_item">
                        <!-- <li class="pagination_nav_link"><a class="pagination_12" href="">1</a></li>
                        <li class="pagination_nav_link" ><a class="pagination_12" href="#" onclick="pagination2()">2</a></li>
                        <li class="pagination_nav_link" ><a class="pagination_12" href="#" onclick="pagination3()">3</a></li>
                        <li class="pagination_nav_link" ><a class="pagination_12" href="#" onclick="pagination4()">4</a></li> -->
                        <!--đếm số sản phẩm xong chia ra số trang ta bằng num-->
                        <?php
                           
                            // print_r($param);exit; <?=$param
                        ?>
                        <?php for ($num = 1 ; $num <= $totalPages; $num++) { ?> 
                            <?php if ($num !=$current_page ) {?>
                                <li class="pagination_nav_link" ><a class="pagination_12" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$num ?>" ><?=$num ?></a></li>
                            <?php } else { ?>
                                <strong class="pagination_nav_link active pagination_12"><?=$num?></strong>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer_buttom hide-on-tablet hide-on-mobile">
        <div class="grid wide">
            <div class="footer_buttom_1">
                <div class="row">
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">Dịch vụ</h3>
                        <ul class="footer_link">
                            <li class="footer_label">Bảo hành</li>
                            <li class="footer_label">Bảo dưỡng</li>
                            <li class="footer_label">Sửa chũa chung</li>
                            <li class="footer_label">Kiểm tra/Triệu hồi</li>
                            <li class="footer_label">Phụ tùng và phụ kiện</li>
                        </ul>
                    </div>
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">Dịch vụ gia tăng</h3>
                        <ul class="footer_link">
                            <li class="footer_label">Xe đã qua sử dụng</li>
                            <li class="footer_label">Vay okage - Mua okage</li>
                            <li class="footer_label">Bảo hiểm okage</li>
                        </ul>
                    </div>
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">CÔNG CỤ HỖ TRỢ</h3>
                        <ul class="footer_link">
                            <li class="footer_label">So sánh sản phẩm</li>
                            <li class="footer_label">Dự toán chi phí</li>
                            <li class="footer_label">Hỗ trợ tài chính</li>
                            <li class="footer_label">Đăng ký lái thử</li>
                            <li class="footer_label">Đặt lịch hẹn dịch vụ</li>
                            <li class="footer_label">Tải catalogue</li>
                            <li class="footer_label">Tải bảng giá</li>
                        </ul>
                    </div>
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">TIN TỨC</h3>
                        <ul class="footer_link">
                            <li class="footer_label">Tin tức chung</li>
                            <li class="footer_label">Tuyển dụng</li>
                            <li class="footer_label">Khuyến mãi</li>
                            <li class="footer_label">Sự kiện</li>
                            <li class="footer_label">Báo chí viết về okage</li>
                        </ul>
                    </div>
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">LỜI KHUYÊN CHUYÊN GIA</h3>
                        <ul class="footer_link">
                            <li class="footer_label">Hướng dẫn sử dụng xe</li>
                            <li class="footer_label">Những chú ý tăng tuổi thọ lốp</li>
                            <li class="footer_label">Những chú ý tăng tuổi thọ ắc quy</li>
                            <li class="footer_label">Hướng dẫn lái xe an toàn</li>
                        </ul>
                    </div>
                    <div class="col l-2  m-0 c-0">
                        <h3 class="footer_item">HOẠT ĐỘNG ĐẠI LÝ</h3>
                        <ul class="footer_link">
                            <li class="footer_label">Khuyến Mãi</li>
                            <li class="footer_label">Tin tức</li>
                            <li class="footer_label">Sự kiện</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_buttom_2">
                <div class="row">
                    <div class="col l-6 m-0 c-0">
                        <div class="footer_butoom_item_1">
                            <h3 class="footer_item">Công ty ô tô okage việt nam</h3>
                            <ul class="footer_link">
                                <li class="footer_label">Số GCNĐKDN: 2500150335</li>
                                <li class="footer_label">Cấp lần đầu: Ngày 11/11/2020</li>
                                <li class="footer_label">Đăng ký thay đổi lần thứ 16: Ngày 12/11/2020</li>
                                <li class="footer_label">Cơ quan cấp: Sở kế hoạch và đầu tư tỉnh Nam Định</li>
                                <li class="footer_label">Địa chỉ: Mỏ Địa-Chất, Phường Phúc Thắng, Thành phố Hà nội, Việt Nam</li>
                                <a href="#" class="footer_img"><img  src="images/s.png"/></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-4 m-0 c-0">
                        <div class="footer_butoom_item_2">
                            <h3 class="footer_item">Công ty ô tô okage việt nam</h3>
                            <div class="footer_butoom_link">
                                <input type="text" name="user" class="footer_butoom_item_link" placeholder="User (*)">
                                <input type="password" name="pass" class="footer_butoom_item_link" placeholder="password(*)">
                            </div>
                            <button id="submit" class="information_button" name="submit">Đăng ký</button>
                        </div>
                    </div>
                    <div class="col l-2 m-0 c-0">
                        <div class="footer_butoom_item_3">
                            <h3 class="footer_item">Đường dây nóng</h3>
                            <div class="phone">
                                <img src="images/phone.png">
                                <ul class="footer_link">
                                    <li class="footer_label">1800 1524</li>
                                    <li class="footer_label">0399 961 768</li>
                                </ul>
                            </div>
                            <div class="mail">
                                <img src="images/@.png">
                                <ul class="footer_link">
                                    <li class="footer_label">nhom_13.com.vn</li>
                                </ul>
                            </div>
                            <div class="message">
                                <img src="images/thu.png">
                                <ul class="footer_link">
                                    <li class="footer_label">Thông tin liên hệ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_butoom_item_4 ">
                <ul class="footer_link">
                    <li class="footer_label">Sơ đồ trang | Chính sách và điều khoản | Chính sách bảo mật thông tin cá nhân</li>
                </ul>
                <ul class="footer_link">
                    <li class="footer_label">Bản quyền thuộc về Công ty ô tô okage Việt Nam</li>
                </ul>
            </div>
    </footer>
    <footer class="footer_1 hide-on-mobile-tablet">
        <div class="grid wide">
            <div class="footer_1_img">
                <span><i class="footer_1_img_fb fab fa-facebook"></i></span>
                <span><i class="footer_1_img_yt fab fa-youtube"></i></span>
            </div>
            <div class="footer_1_2">
                <ul class="footer_1_item">
                    <li class="footer_1_item_link">okage Việt Nam</li>
                    <li class="footer_1_item_link">Sơ đồ trang | chính sách và điều khoản | chính sách bảo mật thông tin cá nhân</li>
                    <li class="footer_1_item_link">@ bản quyền thuộc về nhóm 13</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="./javascrip/js.js"></script>
    <script src="javascrip/product.js"></script>
</body>
</html>