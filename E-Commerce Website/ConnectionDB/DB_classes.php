<?php
require_once("DB_business.php");

// hiển thị dạng <table> dữ liệu từ 1 bảng trong database 
function show_DataBUS_as_Table($bus)
{
    echo "<table cellspacing='15'>";
    foreach ($bus->select_all() as $rowname => $row) {
        echo "<tr>";
        foreach ($row as $colname => $col) {
            echo "<td>" . $col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Lớp sản phẩm
class SanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("SanPham", "MaSP");
    }

    function capNhapTrangThai($trangthai, $id) {
        $sanpham = $this->select_by_id("*", $id);
        $sanpham["TrangThai"] = $trangthai;

        return $this->update_by_id($sanpham, $id);
    }

    function themDanhGia($id) {
        // cập nhật số lượt đánh giá
        $sanpham = $this->select_by_id("*", $id);
        $sanpham["SoDanhGia"] = $sanpham["SoDanhGia"] + 1;

        // cập nhật số sao trung bình
        $dsbl = (new DB_driver())->get_list("SELECT * FROM danhgia WHERE MaSP=$id");
        $tongSoSao = 0;
        for($i = 0; $i < sizeof($dsbl); $i++) {
            $tongSoSao += $dsbl[$i]["SoSao"];
        }
        $sanpham["SoSao"] = $tongSoSao / sizeof($dsbl);

        return $this->update_by_id($sanpham, $id);
    }
}

// Lớp loại sản phẩm
class LoaiSanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("LoaiSanPham", "MaLSP");
    }
    function capNhapTrangThai($trangthai, $id) {
        $loaisp = $this->select_by_id("*", $id);
        $loaisp["TrangThai"] = $trangthai;

        return $this->update_by_id($loaisp, $id);
    }

}

// Lớp chi tiết sản phẩm
class ChiTietSanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("ChiTietSanPham", "MaSP");
    }
}

// Lớp khuyến mãi
class KhuyenMaiBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("KhuyenMai", "MaKM");
    }
}


