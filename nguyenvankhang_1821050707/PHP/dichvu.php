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
    <script>
        $(document).ready(function(){
            $("#click").click(function() {
                
                $.ajax({
                    type: "post",
                    url: "ajax.php",
                    data: {
                        "vin": $("input[name=vin]").val(),
                        "so_khung": $("input[name=so_khung]").val(),
                    },
                    success: function() {
                       
                    },


                })
            });
        });
    </script>
    <script language="javascript">
        function annut(){
            $.ajax({
                url : "1.php",
                type : "post",
                dataType:"text",
                data : {
                        
                },
                success : function (hienthithongbao){
                    $('#hienthithongbao').html(hienthithongbao);
                }
            });
        }
    </script>
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
                            <a href="dongxe.php" class="nav_navbar_link">Sản phẩm</a>
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
                        <li class="nav_navbar_item nav_navbar_item_list ">
                            <a href="dichvu.php" class="nav_navbar_link active_dv">Dịch vụ</a>
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
    <div class="banner_img">
        <div class="banner_img_1">
            <img src="./images/dichvu_banner.jpg" alt="">
        </div>
        <div class="banner_content">
            <div class="grid wide">
                <div class="banner_container">
                    <div class="banner_product_label_item">
                        <span class="banner_product_label1">OKAGE Việt Nam </span>
                    </div>
                    <div class="banner_product_label_item1">
                        <span class="banner_product_label2">Dịch vụ sau bán hàng</span>
                    </div>
                    <div class="banner_buttom">
                        <input class="banner_button" type="button" value="Đặt lịch hẹn dịch vụ">
                    </div>
                </div>

            </div>
        </div>
        <div class="thu_2">
            <div class="grid wide">
                <div class="banner_2">
                    <p>
                        nhìn tao đ
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container_dv">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-6 c-6">
                    <div  class="dv_okage dv_1">
                        <div href="#content_dv_1" class="dv_banner">
                            <div class="dv_img">
                                <img src="./images/dichvu_icon_s_01.png" alt="">
                            </div>
                            <div class="dv_label">
                                <p>Chính sách bảo hành</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-6">
                    <div  href="service_security_1" class="dv_okage">
                        <div href="#" class="dv_banner">
                            <div class="dv_img">
                                <img src="./images/dichvu_icon_s_02.png" alt="">
                            </div>
                            <div class="dv_label">
                                <p>Dịch vụ bảo dưỡng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-6">
                    <div class="dv_okage dv_1">
                        <div href="#" class="dv_banner">
                            <div class="dv_img">
                                <img src="./images/dichvu_icon_s_03.png" alt="">
                            </div>
                            <div class="dv_label">
                                <p>Dịch vụ sửa chữa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6 c-6">
                    <div class="dv_okage dv_2">
                        <div href="#" class="dv_banner">
                            <div class="dv_img">
                                <img src="./images/dichvu_icon_s_04.png" alt="">
                            </div>
                            <div class="dv_label">
                                <p>Kiểm tra và triệu hồi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_dv_1" class="content_dv">
        <div class="grid wide">
            <div class="content_heading">
                <span>Chính sách bảo hành</span>
            </div>
            <div class="content_banner">
                <div class="row">
                    <div class="col l-3 m-0 c-0">
                        <nav class="content_banner_nav">
                            <ul class="content_banner_item_1">
                                <li class="nav_banner_product_item_1 nav_product_nav active_0">
                                    <a href="#" class="content_banner_label_1 active_01">Những gì được bảo hành</a>
                                    <i class="nav_banner_icon fas fa-chevron-right"></i>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class=" content_banner_label_1">Những gì không được bảo hành</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Trách nhiệm chủ xe</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Những thông tin cần thiết</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-9 m-12 c-12">
                        <div class="content_label">
                            <span class="content_label_1">
                                1.Thời hạn bảo hành
                            </span>
                            <p class="content_label_2">Chế độ bảo hành bắt đầu được tính ngay kể từ thời điểm xe được giao cho chủ xe đầu tiên. Trong vòng 36 tháng hoặc 100.000 km, tùy thuộc điều kiện nào đến trước, okage đảm bảo sẽ sửa chữa hoặc thay thế bất kỳ phụ tùng nào của xe okage mới bị hỏng hóc.</br>
                                - Bảo hành ắc quy: Thời hạn bảo hành cho ắc quy là 12 tháng hoặc 20.000 km tùy điều kiện nào tới trước.</br>
                                
                                - Bảo hành ắc quy hybrid: Thời hạn bảo hành ắc quy hybrid là 36 tháng hoặc 100.000 km, tùy điều kiện nào đến trước.</br>
                                
                                - Bảo hành lốp: Bảo hành lốp: Ðược bảo hành theo chế độ riêng của nhà sản xuất lốp. Để biết thêm chi tiết, xin quý khách vui lòng tham khảo những trang web sau: Bridgestone, Dunlop, Michelin.
                                
                            </p>
                            <span class="content_label_1">
                                2.Điều kiện bảo hành
                            </span>
                            <p class="content_label_2">okage chỉ đảm bảo sửa chữa, thay thế các phụ tùng của xe okage mới bị hỏng hóc trong điều kiện:</br>
                                - Xe hoạt động trong điều kiện bình thường</br>
                                - Nguyên liệu phụ tùng không tốt</br>
                                - Lỗi lắp ráp</br>
                                - Trừ những điều kiện ghi trong mục NHỮNG GÌ KHÔNG ĐƯỢC BẢO HÀNH<br>
                                <strong><em>Chú ý:</em></strong>
                                    Bảo hành vẫn áp dụng khi xe được chuyển nhượng cho những chủ xe khác.
                            </p>
                            <span class="content_label_1">
                                3.Vi phạm áp dụng bảo hành 
                            </span>
                            <p class="content_label_2 label_3">Bảo hành chỉ áp dụng trong phạm vi nước Cộng hòa Xã hội chủ nghĩa Việt Nam.
                            </p>
                            <span class="content_label_1">
                                4.Bảo hành miễn phí
                            </span>
                            <p class="content_label_2">Mọi sửa chữa thuộc chế độ bảo hành (phụ tùng, công lao động) là miễn phí.                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div id="service_security_1" class="service_security">
        <div class="grid wide">
            <div class="content_heading service_security_heading">
                <span>Dịch vụ bảo dưỡng</span>
            </div>
            <div class="content_banner">
                <div class="row">
                    <div class="col l-3 m-0 c-0">
                        <nav class="content_banner_nav">
                            <ul class="content_banner_item_1">
                                <li class="nav_banner_product_item_1 nav_product_nav active_0">
                                    <a href="#" class="content_banner_label_1 active_01">Lợi ích của việc bảo dưỡng định kì</a>
                                    <i class="nav_banner_icon fas fa-chevron-right"></i>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Tiêu chuẩn bảo dưỡng định kì</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Bảo dưỡng nhanh</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Vệ sinh giàn lạnh điều hòa</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Chi phí bảo dưỡng</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-5 m-12 c-12">
                        <p class="service_security_p">                         
                        Trong quá trình vận hành, nhiều chi tiết trên xe bị mài mòn hoặc hư hỏng theo thời gian sử dụng. Điều này xảy ra với bất kỳ cơ cấu máy móc nào.
                        </p>
                        <p class="service_security_p">
                        Do đó, bạn cần mang xe đi kiểm tra, bảo dưỡng một cách định kỳ để đảm bảo từng chi tiết cấu thành nói riêng và tổng thể chiếc xe nói chung luôn được vận hành tốt.
                        </p>
                    </div>
                    <div class="col l-4 m-12 c-12">
                        <img class="service_security_img" src="./images/h08.png" alt="">
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div id="Repair_Services_1" class="Repair_Services">
        <div class="grid wide">
            <div class="content_heading service_security_heading">
                <span>Dịch vụ sửa chữa</span>
            </div>
            <div class="content_banner">
                <div class="row">
                    <div class="col l-3 m-0 c-0">
                        <nav class="content_banner_nav">
                            <ul class="content_banner_item_1">
                                <li class="nav_banner_product_item_1 nav_product_nav active_0">
                                    <a href="#" class="content_banner_label_1 active_01">Sửa chữa thân xe & sơn</a>
                                    <i class="nav_banner_icon fas fa-chevron-right"></i>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Sửa chữa chung</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-9 m-12 c-12">
                        <p class="service_security_p">                         
                            Ngoài dịch vụ bảo dưỡng và sửa chữa những hiện tượng bất thường trên xe, okage cũng cung cấp dịch vụ sửa chữa đối với những hư hỏng do va chạm mà chiếc xe của bạn gặp phải trong quá trình sử dụng. Dịch vụ đó được gọi là Sửa chữa Thân xe và Sơn.
                        </p>
                        <p class="service_security_p">
                            Với kỹ thuật sửa chữa theo tiêu chuẩn toàn cầu, trang thiết bị, vật tư vật chất lượng cao (được chỉ định bởi okage Nhật Bản), các Đại Lý của okage sẽ phục hồi hình dạng cũng như diện mạo lớp sơn trên chiếc xe của bạn về điều kiện ban đầu.
                        </p>
                        <p class="service_security_p">
                            [Quy trình sửa chữa thân xe và sơn]
                        </p>
                        <div class="dv_item">
                            <div class="row">
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_1.jpg" alt="">
                                    <p class="dv_1_1">1. kéo nắn</p>
                                </div>
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_2.jpg" alt="">
                                    <p class="dv_1_1">2. Gò tấm</p>
                                </div>
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_3.jpg" alt="">
                                    <p class="dv_1_1">3. Bà matit</p>
                                </div>
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_4.jpg" alt="">
                                    <p class="dv_1_1">4. Sơn lót</p>
                                </div>
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_5.jpg" alt="">
                                    <p class="dv_1_1">5. Sơn màu</p>
                                </div>
                                <div class="col l-4 m-4 c-6">
                                    <img class="dv_1" src="./images/dv_6.jpg" alt="">
                                    <p class="dv_1_1">6. Đánh bóng</p>
                                </div>
                            </div>
                        </div>
                        <p class="service_security_p">
                            Ngoài ra, nhằm đảm bảo chất lượng và rút ngắn thời gian sửa chữa, chúng tôi xây dựng và áp dụng quy trình quản lý chất lượng trong từng công đoạn, quy trình sửa chữa vết xước trong 4 giờ...để không ngừng đem đến sự hài lòng cho khách hàng đối với dịch vụ sửa chữa Thân xe và Sơn của okage.
                        </p>
                        <p class="service_security_p">
                            Để được tư vấn chi tiết về nội dung sừa chữa, xin liên hệ với  <a><strong> Các Đại Lý </strong></a>  chính hãng của okage Việt Nam trên toàn quốc.
                        </p>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div id="service_security_1" class="service_security">
        <div class="grid wide">
            <div class="content_heading service_security_heading">
                <span>Kiểm tra và triệu hồi</span>
            </div>
            <div class="content_banner">
                <div class="row">
                    <div class="col l-3 m-0 c-0">
                        <nav class="content_banner_nav">
                            <ul class="content_banner_item_1">
                                <li class="nav_banner_product_item_1 nav_product_nav active_0">
                                    <a href="#" class="content_banner_label_1 active_01">Công cụ kiểm tra</a>
                                    <i class="nav_banner_icon fas fa-chevron-right"></i>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Chương trình kiểm tra miễn phí</a>
                                </li>
                                <li class="nav_banner_product_item_1">
                                    <a href="#" class="content_banner_label_1">Chương trình triệu hồi</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-9 m-12 c-12">
                        <p class="service_security_p">                         
                            Để kiểm tra xe bạn có thuộc các chương trình kiểm tra & triệu hồi hay không, vui lòng điền các thông tin sau:
                        </p>
                        <div class="customer_information">
                            <label  for="">Nhập số VIN <i class="far fa-question-circle"></i></label>
                            <input type="text" name="vin" class="input_vin">
                        </div>
                        <div class="customer_information">
                            <label for="">Nhập số Khung <i class="far fa-question-circle"></i></label>
                            <input type="text" name="so_khung" class="input_vin">
                        </div>
                        <button type="submit" id="click" class="button_vin" onclick="annut()">Kiểm tra</button>
                        <div id="hienthithongbao">
                                
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
</body>
</html>