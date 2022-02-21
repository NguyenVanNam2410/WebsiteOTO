
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKAGE VN</title>
    <link rel="shortcut icon" href="images/oto.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/base.css"><!--style chung-->
    <link rel="stylesheet" href="css/gird.css"><!--giới hạn with, height, chia các cột -->
    <link rel="stylesheet" href="css/responsive.css"><!--sử dụng ẩn hiện trên pc, ipad, mobie -->
    <link rel="stylesheet" href="css/style.css"><!--style tổng trang web-->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="./css1/css/all.min.css"><!--Thư viện icon lấy trên font awesome-->
    <!-- <link rel="stylesheet" href="./css1/js.all.min.js"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>

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
            function product(){
                $.ajax({
                    url : "dongxe.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         
                    },
                    success : function (app1){
                        $('#app1').html(app1);
                    }
                });
            }
    </script> -->

</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="nav_navbar">
                    <div class="nav_image">
                        <img src="./images/oto.png" alt="ô tô">
                    </div>
                    <div class="123 hide-on-mobile hide-on-tablet">
                        <ul class="nav_navbar_menu ">
                            <li class="nav_navbar_item nav_navbar_item_list">
                                <a href="" class="nav_navbar_link">Về OKAGE</a>
                            </li>
                            <li class="nav_navbar_item nav_navbar_item_list">
                                <a href="dongxe.php" class="nav_navbar_link">Sản phẩm</a>
                                <div class="nav_tong">
                                    <div class="nav_tong_cua1">
                                        <ul class="nav_tong_1">
                                            <li class="nav_navbar_1 ative12" onclick="sanpham('sp1',this)">
                                                <a href="#" class="nav_navbar_1_label">Yari(6)</a>
                                            </li>
                                            <li class="nav_navbar_1 " onclick="sanpham('sp2',this)">
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
        <div id="app1">
            <div class="container">
                <div class="grid wide">
                    <div class="row container_icon">
                        <div class="col l-3 m-3 c-3">
                            <a class="list_icon">
                                <span class="list_icon-img">
                                    <img src="./images/item_1.png" alt="" class="list_icon-img-1">
                                </span>
                                <div class="list_icon-text">
                                    <p>KHUYẾN MÃI</p>
                                </div>
                            </a>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <a class="list_icon">
                                <span class="list_icon-img">
                                    <img src="./images/item_2.png" alt="" class="list_icon-img-1">
                                </span>
                                <div class="list_icon-text">
                                    <p>BẢNG GIÁ</p>
                                </div>
                            </a>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <a class="list_icon">
                                <span class="list_icon-img">
                                    <img src="./images/item_3.png" alt="" class="list_icon-img-1">
                                </span>
                                <div class="list_icon-text">
                                    <p>DỰ ĐOÁN CHI TIẾT</p>
                                </div>
                            </a>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <a class="list_icon">
                                <span class="list_icon-img">
                                    <img src="./images/item_4.png" alt="" class="list_icon-img-1">
                                </span>
                                <div class="list_icon-text">
                                    <p>ĐĂNG KÍ LÁI THỬ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="xe" class="product">
                <div class="product_1">
                    <div class="grid wide">
                        <div class="heading">
                            <span class="heading-item">Các dòng xe</span>
                        </div>
                        <nav class="product_menu">
                            <ul class="product_menu-item">
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label product_menu-label_active">Tất cả</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">Hatchback</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">Sedan</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">SUV</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">Đa dụng</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">Thương mại</a>
                                </li>
                                <li class="product_menu-link">
                                    <a href="#" class="product_menu-label">Bán tải</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="row product_app">
                            <div class="col l-3 m-4 c-6">
                                <div class="product_item">
                                    <div class="product_item-img" style="background-image: url('images/5.png');"></div>
                                    <div class="product_pice_img">
                                        <span class="product_item-label">Wigo</span>
                                        <p class="product_item-label_1">Giá từ: 352,000,000 VND</p>
                                        <ul class="product_price hide-on-mobile hide-on-tablet">
                                            <li class="product_pice-item">• 5 chỗ ngồi</li>
                                            <li class="product_pice-item">• Số sàn 5 cấp</li>
                                            <li class="product_pice-item">• Động cơ xăng dung tích 1.97 cm3</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-4 c-6">
                                <div class="product_item">
                                    <div class="product_item-img" style="background-image: url('images/9.png');"></div>
                                    <div class="product_pice_img">
                                        <span class="product_item-label">vigo</span>
                                        <p class="product_item-label_1">Giá từ: 470,000,000 VND</p>
                                        <ul class="product_price hide-on-mobile hide-on-tablet">
                                            <li class="product_pice-item">• 5 chỗ ngồi</li>
                                            <li class="product_pice-item">• Số sàn 5 cấp</li>
                                            <li class="product_pice-item">• Động cơ xăng dung tích 1.97 cm3</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-4 c-6">
                                <div class="product_item">
                                    <div class="product_item-img" style="background-image: url('images/h3.png');"></div>
                                    <div class="product_pice_img">
                                        <span class="product_item-label">camyi</span>
                                        <p class="product_item-label_1">Giá từ: 1,029,000,000 VND</p>
                                        <ul class="product_price hide-on-mobile hide-on-tablet">
                                            <li class="product_pice-item">• 5 chỗ ngồi</li>
                                            <li class="product_pice-item">• Số sàn 5 cấp</li>
                                            <li class="product_pice-item">• Động cơ xăng dung tích 1.97 cm3</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-4 c-6 hide-on-tablet">
                                <div class="product_item">
                                    <div class="product_item-img" style="background-image: url('images/sanpham5.png');"></div>
                                    <div class="product_pice_img">
                                        <span class="product_item-label">Land cruiser prado</span>
                                        <p class="product_item-label_1">Giá từ: 2,379,000,000 VND</p>
                                        <ul class="product_price hide-on-mobile hide-on-tablet">
                                            <li class="product_pice-item">• 5 chỗ ngồi</li>
                                            <li class="product_pice-item">• Số sàn 5 cấp</li>
                                            <li class="product_pice-item">• Động cơ xăng dung tích 1.97 cm3</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product_imag">
                            <div class="col l-6 m-6 c-6 animation" >
                                <img src="images/1.jpg" alt="" class="product_imag_1">
                            </div>
                            <div class="col l-6 m-6 c-6 animation1">
                                <img src="images/2.png" alt="" class="product_imag_1">
                            </div>
                            <div class="col l-6 m-6 c-6 animation">
                                <img src="images/3.png" alt="" class="product_imag_1">
                            </div>
                            <div class="col l-6 m-6 c-6 animation1">
                                <img src="images/4.png" alt="" class="product_imag_1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dichvu" class="service">
                <div class="grid wide">
                    <div class="heading">
                        <span class="heading-item">Dịch vụ</span>
                    </div>
                    <div class="row service_app">
                        <div class="col l-3 m-6 c-6">
                            <div class="service_item service_item_back">
                                <div class="service_item-img">
                                    <a href="#" class="service_item-img-1">
                                        <img src="images/n.png" alt="dịch vụ">
                                    </a>
                                </div>
                                <div class="service_item-text ">
                                    <h3 class="service_item-link">CHÍNH SÁCH BẢO HÀNH</h3>
                                    <span class="service_item-link-label hide-on-mobile hide-on-tablet ">Chính sách mang lại những sửa chữa cần thiết, sử dụng những phụ tùng mới hoặc những phụ tùng tái chế cho xe của Khách hàng nằm trong chế độ được bảo hành.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="service_item service_item_back">
                                <div class="service_item-img">
                                    <a href="#" class="service_item-img-1">
                                        <img src="images/o.png" alt="dịch vụ">
                                    </a>
                                </div>
                                <div class="service_item-text ">
                                    <h3 class="service_item-link">DỊCH VỤ BẢO DƯỠNG</h3>
                                    <span class="service_item-link-label hide-on-mobile hide-on-tablet">Dịch vụ kiểm tra, bảo dưỡng một cách định kỳ để đảm bảo chiếc xe của Khách hàng luôn được vận hành hiệu quả.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="service_item service_item_back">
                                <div class="service_item-img">
                                    <a href="#" class="service_item-img-1">
                                        <img src="images/p.png" alt="dịch vụ">
                                    </a>
                                </div>
                                <div class="service_item-text  ">
                                    <h3 class="service_item-link">DỊCH VỤ SỬA CHỮA</h3>
                                    <span class="service_item-link-label hide-on-mobile hide-on-tablet">Ngoài dịch vụ bảo dưỡng và sửa chữa những hiện tượng bất thường trên xe, Toyota cũng cung cấp dịch vụ sửa chữa đối với những hư hỏng do va chạm mà chiếc xe của Khách hàng gặp phải trong quá trình sử dụng.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="service_item service_item_back">
                                <div class="service_item-img">
                                    <a href="#" class="service_item-img-1">
                                        <img src="images/z.png" alt="dịch vụ">
                                    </a>
                                </div>
                                <div class="service_item-text ">
                                    <h3 class="service_item-link">KIỂM TRA VÀ TRIỆU HỒI</h3>
                                    <span class="service_item-link-label hide-on-mobile hide-on-tablet">Khách hàng có thể kiểm tra xem xe của mình có thuộc các chương trình kiểm tra & triệu hồi hay không.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dichvugiatang"class="added_service">
                <div class="added_service_1">
                    <div class="grid wide ">
                        <div class="heading">
                            <span class="heading-item">Dịch vụ gia tăng</span>
                        </div>
                        <div class="row service_app">
                            <div class="col l-3 m-6 c-6">
                                <div class="service_item added_service_item">
                                    <div class="service_item-img">
                                        <a href="#" class="service_item-img-1">
                                            <img src="images/ab.png" alt="dịch vụ">
                                        </a>
                                    </div>
                                    <div class="service_item-text ">
                                        <h3 class="service_item-link">VAY OKAGE - MUA OKAGE</h3>
                                        <span class="service_item-link-label hide-on-mobile hide-on-tablet">Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu tài chính của khách hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-6 c-6">
                                <div class="service_item added_service_item">
                                    <div class="service_item-img">
                                        <a href="#" class="service_item-img-1">
                                            <img src="images/bc.png" alt="dịch vụ">
                                        </a>
                                    </div>
                                    <div class="service_item-text ">
                                        <h3 class="service_item-link">PHỤ TÙNG & PHỤ KIỆN</h3>
                                        <span class="service_item-link-label hide-on-mobile hide-on-tablet">Tất cả các phụ tùng, phụ kiện chính hãng, được nhập khẩu từ Nhật Bản, Thái Lan và các nước trong khu vực.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-6 c-6">
                                <div class="service_item added_service_item">
                                    <div class="service_item-img">
                                        <a href="#" class="service_item-img-1">
                                            <img src="images/ac.png" alt="dịch vụ">
                                        </a>
                                    </div>
                                    <div class="service_item-text ">
                                        <h3 class="service_item-link">XE ĐÃ QUA SỬ DỤNG</h3>
                                        <span class="service_item-link-label hide-on-mobile hide-on-tablet">Xe Toyota đã qua sử dụng với chất lượng đảm bảo, giá cả hợp lý.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-3 m-6 c-6">
                                <div class="service_item added_service_item">
                                    <div class="service_item-img">
                                        <a href="#" class="service_item-img-1">
                                            <img src="images/o.png" alt="dịch vụ">
                                        </a>
                                    </div>
                                    <div class="service_item-text ">
                                        <h3 class="service_item-link">BẢO HIỂM OKAGE</h3>
                                        <span class="service_item-link-label hide-on-mobile hide-on-tablet">Sản phẩm dành riêng cho khách hàng Toyota, với dịch vụ 1 cửa về Bảo hiểm, quy trình xử lý chất lượng cao, nhanh chóng.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="video"class="technology">
                <div class="grid wide ">
                    <div class="heading">
                        <span>Công nghệ</span>
                        <nav class="technology_item_lable">
                            <ul class="menu">
                                <li class="menu_1 a">Hybrid & TSS
                                </li>
                                <li class="menu_1"> Động cơ & vận hành
                                </li>
                                <li class="menu_1"> An toàn
                                </li>
                                <li class="menu_1">Công nghệ khác
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="technology_1">
                        <div class="row ">
                            <div class="col l-3 m-3 c-6">
                                <div class="technology_video">
                                    <iframe  src="https://www.youtube.com/embed/_2sBbzICjsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col l-3 m-3 c-6">
                                <div class="technology_video">
                                    <iframe  src="https://www.youtube.com/embed/_2sBbzICjsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col l-3 m-3 c-6">
                                <div class="technology_video">
                                    <iframe  src="https://www.youtube.com/embed/_2sBbzICjsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col l-3 m-3 c-6">
                                <div class="technology_video">
                                    <iframe  src="https://www.youtube.com/embed/_2sBbzICjsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div id="new" class="news">
                <div class="news_3">
                    <div class="grid wide ">
                        <div class="heading">
                            <span>Tin tức</span>
                            <nav class="technology_item_lable">
                                <ul class="menu_2">
                                    <li class="menu_3  a" onclick="hientintuc('tinchung',this)" >Tin tức chung</li>
                                    <li class="menu_3 " onclick="hientintuc('khuyenmai',this)" >Khuyến mãi</li>
                                    <li class="menu_3 " onclick="hientintuc('sukien',this)" >Sự kiện </li>
                                </ul>
                            </nav>
                        </div>
                    <?php
                        include 'cofig.php';
                        $tin= mysqli_query($conn, "SELECT * FROM `tbl_tintuc` ORDER BY ID ASC");
                                    // var_dump($tin);
                    ?> 
                        <div id="tinchung" class="news_1">
                            <div class="row ">
                                
                            
                            <?php
                                   while ( $row = mysqli_fetch_array($tin)) {
                                       ?>
                                <div class="col l-3 m-3 c-12">
                                    <div class="news_2">
                                        <div class="news_border">
                                            <div class="product_item-img" style="background-image: url('images/<?=$row['image'] ?>');"></div>
                                            <div class="news_item_link">
                                                <span class="news_item_label"><?=$row['tin']?></span>
                                                <p class="news_item_label_1"><?=$row['ngay']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
    <?php
        include 'cofig.php';
        $khuyenmai= mysqli_query($conn, "SELECT * FROM `tbl_khuyenmai` ORDER BY 'ID' ASC");
    
     ?> 
                        <div id="khuyenmai" class="news_1">
                            <div class="row ">
                                
                            <?php
                                   while ( $row = mysqli_fetch_array($khuyenmai)) {
                            ?>
                                <div class="col l-3 m-3 c-12">
                                    <div class="news_2">
                                        <div class="news_border">
                                            <div class="product_item-img" style="background-image: url('images/<?=$row['image'] ?>');"></div>
                                            <div class="news_item_link">
                                                <span class="news_item_label"><?=$row['tin']?></span>
                                                <p class="news_item_label_1"><?=$row['ngay']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>                           
                            </div>
                        </div>
                        <?php
        include 'cofig.php';
        $sukien= mysqli_query($conn, "SELECT * FROM `tbl_sukien` ORDER BY 'ID' ASC");
    
     ?> 
                        <div  id="sukien" class="news_1">
                            <div class="row ">
                                
                            <?php
                                   while ( $row = mysqli_fetch_array($sukien)) {
                            ?>
                                <div class="col l-3 m-3 c-12">
                                    <div class="news_2">
                                        <div class="news_border">
                                            <div class="product_item-img" style="background-image: url('images/<?=$row['image'] ?>');"></div>
                                            <div class="news_item_link">
                                                <span class="news_item_label"><?=$row['tin']?></span>
                                                <p class="news_item_label_1"><?=$row['ngay']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <div class="information_people">
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-6 m-12 c-12">
                                <div class="heading">
                                    <span class="heading-item">Trao đổi với chúng tôi</span>
                                   </div>
                                <div class="information_item">
                                    <div class="information_1">
                                        <select  id="" name="new" class="information_new">
                                            <option value="">Thông tin khách hàng</option>
                                            <option value="">Bán hàng</option>
                                            <option value="">Dịch vụ</option>
                                            <option value="">Tư vấn tài chính</option>
                                            <option value="">Đại lý</option>
                                        </select>
                                        <div class="information_link">
                                            <input type="text" name="name1" class="information_link_label" placeholder="Họ tên (*)">
                                            <input type="text" name="phone" class="information_link_label" placeholder="Điện thoại (*)">
                                        </div>
                                        <input type="text" name="mail"  class="information_label" placeholder="Email">
                                        <textarea  id="" name="ghichu" cols="28" rows="10" class="information_textarea" placeholder="Nội dung"></textarea>
                                        <button name="insert" class="information_button" id="click_1">Gửi</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-1 m-0 c-0"></div>
                            <div class="col l-5 m-12 c-12">
                                <div class="heading">
                                    <span class="heading-item">Đại lý của bạn</span>
                                </div>
                                <div class="information_item">
                                    <div class="information_1">
                                        <input type="text" class="information_label active" placeholder="Khu Vực">
                                        <input type="text" class="information_label" placeholder="Tỉnh / Thành phố">
                                        <input type="text" class="information_label" placeholder="Quận / Huyện">
                                        <button class="information_button">Tìm đại lý</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h3 class="footer_item" >CÔNG CỤ HỖ TRỢ</h3>
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
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="./javascrip/js.js"></script>
</body>
</html>