<?php
session_start();

// Thêm topnav vào trang
function addTopNav()
{
    echo '
	<div class="top-nav group">
        <section>
            <div class="social-top-nav">
                <a href="https://www.facebook.com/shopgiaythethao.fan/" target="_blank" class="fa fa-facebook"></a>
                <a class="fa fa-twitter"></a>
                <a class="fa fa-google"></a>
                <a class="fa fa-youtube"></a>
            </div> <!-- End Social Topnav -->

            <ul class="top-nav-quicklink flexContain">
                <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href=""><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                <li><a href=""><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href=""><i class="fa fa-phone"></i> Liên hệ</a></li>
            </ul> <!-- End Quick link -->
        </section><!-- End Section -->
    </div><!-- End Top Nav  -->';
}

// Thêm header
function addHeader()
{
    echo '        
	<div class="header group">
        <div class="smallmenu" id="openmenu" onclick="smallmenu(1)">≡</div>
        <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="Trang chủ Shoes Shop" title="Trang chủ Shoes Shop">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header">
                <form class="input-search" method="get" action="index.php">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Từ khóa: </strong>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember hide">
                        <a href="nguoidung.php">Trang người dùng</a>
                        <a onclick="checkDangXuat();">Đăng xuất</a>
                    </div>
                </div> <!-- End Member -->

                <div class="cart">
                    <a href="giohang.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div>  -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div> <!-- End Header -->';
}

// thêm home
function addHome()
{
    echo '
    <div class="banner">
        <div class="owl-carousel owl-theme"></div>
    </div> <!-- End Banner -->
    
    <div class="smallbanner" style="width: 100%;"></div>';
}

// Thêm footer
function addFooter()
{
    echo '
    <!-- ============== Alert Box ============= -->
    <div id="alert">
        <span id="closebtn">&otimes;</span>
    </div>

    <!-- ============== Footer ============= -->
    <div class="copy-right">
        <p>
            All rights reserved © ' . date("Y") . ' - Designed by
            <span style="color: #eee; font-weight: bold">Trần Thái Phúc & Vũ Tùng Lâm</span>
        </p>
    </div>';
}

// Thêm contain Taikhoan
function addContainTaiKhoan()
{
    echo '
	<div class="containTaikhoan">
    <span class="close" onclick="showTaiKhoan(false);">&times;</span> 
        <div class=" taikhoan">
            <ul class="tab-group">
                <li class="tab active"><a href="#login">Đăng nhập</a></li>
                <li class="tab"><a href="#signup">Đăng kí</a></li>
            </ul> <!-- /tab group -->
            <div class="tab-content">
                <div id="login">
                    <h1>Chào mừng bạn trở lại!</h1>
                    <!-- <form onsubmit="return logIn(this);"> -->
                    <form action="" method="post" name="formDangNhap" onsubmit="return checkDangNhap();">
                        <div class="field-wrap">
                            <label>
                                Tên đăng nhập<span class="req">*</span>
                            </label>
                            <input name="username" type="text" id="username" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Mật khẩu<span class="req">*</span>
                            </label>
                            <input name="pass" type="password" id="pass" required autocomplete="off" />
                        </div> <!-- pass -->
                        <p class="forgot"><a href="#">Quên mật khẩu?</a></p>
                        <button type="submit" class="button button-block" >Tiếp tục</button>
                    </form> <!-- /form -->
                </div> <!-- /log in -->
                <div id="signup">
                    <h1>Đăng kí miễn phí</h1>
                    <!-- <form onsubmit="return signUp(this);"> -->
                    <form action="" method="post" name="formDangKy" onsubmit="return checkDangKy();">
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Họ<span class="req">*</span>
                                </label>
                                <input name="ho" type="text" id="ho" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Tên<span class="req">*</span>
                                </label>
                                <input name="ten" id="ten" type="text" required autocomplete="off" />
                            </div>
                        </div> <!-- / ho ten -->
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Điện thoại<span class="req">*</span>
                                </label>
                                <input name="sdt" id="sdt" type="text" pattern="\d*" minlength="10" maxlength="12" required autocomplete="off" />
                            </div> <!-- /sdt -->
                            <div class="field-wrap">
                                <label>
                                    Email<span class="req">*</span>
                                </label>
                                <input name="email" id="email" type="email" required autocomplete="off" />
                            </div> <!-- /email -->
                        </div>
                        <div class="field-wrap">
                            <label>
                                Giới tính<span class="req">*</span>
                            </label>
                            <input name="gioitinh" id="gioitinh" type="text" required autocomplete="off" />
                        </div>
                        <div class="field-wrap">
                            <label>
                                Địa chỉ<span class="req">*</span>
                            </label>
                            <input name="diachi" id="diachi" type="text" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Tên đăng nhập<span class="req">*</span>
                            </label>
                            <input name="newUser" id="newUser" type="text" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Mật khẩu<span class="req">*</span>
                            </label>
                            <input name="newPass" id="newPass" type="password" required autocomplete="off" />
                        </div> <!-- /pass -->
                        <button type="submit" class="button button-block" >Tạo tài khoản</button>
                    </form> <!-- /form -->
                </div> <!-- /sign up -->
            </div><!-- tab-content -->
        </div> <!-- /taikhoan -->
    </div>
';
}

// Thêm plc (phần giới thiệu trước footer)
function addPlc()
{
    echo '
    <div class="plc">
        <section>
            <ul class="flexContain">
                <li>Giao hàng nhanh chóng</li>
                <li>Thanh toán linh hoạt</li>
                <li>Sản phẩm đa dạng</li>
                <li>Lỗi đổi tại nhà</li>
                <li>Hỗ trợ kịp thời
                    <br>Hotline:
                    <a href="tel:12345678" style="color: #288ad6;">1234.5678</a>
                </li>
            </ul>
        </section>
    </div>';
}