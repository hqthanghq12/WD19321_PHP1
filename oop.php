<?php
//// bắt buộc phải khai báo class trước
//// Khai báo class
//class SinhVien{
//    // khai báo thuộc tính (Biến)
//    public $maSV;
//    public $tenSV;
//    public $namSinh;
////    Khai báo phương thuc (hàm)
//    public function di(){
//        echo "di hoc php";
//    }
//    //....
//    public function noi($tenSV){
//        echo $this->tenSV = $tenSV;
//        $this->di();
//    }
//}
//// Khởi tạo đối tượng
//$sv = new SinhVien();
//// Gaán gtr cho thuộc tính
//$sv->tenSV = "Nguyen Van A";
//// Gọi phuong thuc
//$sv->di();
// Khai báo class giảng vieen
// Có những thuoc tinh sau
// maGV, tenGV, namSinh, gioiTinh, soGioDay, luongCoban
// Co phuong thưc sau
// Tinh tuoi (băng nam hie tai - nam sinh)
// hien thi thong tinh (Lay ra tat cả thong tinh mà gv có)
// Khoi tao doi tuong gv
// và gán trị cho các thuoc tinh, hien thi thong tin sau khi gan
class GiangVien{
    // Khai bao thuoc tinh
    public $maGV;
    public $tenGV;
    public $namSinh;
    // những thuộc tính khác tương tự
    // Khai báo phương thuc
    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }
    // Hiển thi thông tin
    public function hienThiThongTin(){
        echo $this->maGV;
        echo $this->tenGV;
        echo $this->namSinh;
        echo $this->tinhTuoi();
        // Tương tu
    }
}
$gv = new GiangVien();
$gv->maGV = "000001";
$gv->tenGV = "Nguyen Văn A";
$gv->namSinh = 2000;
$gv->hienThiThongTin();
