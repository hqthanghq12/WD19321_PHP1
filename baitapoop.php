<?php
// tạo 1 class là Crush có những thuộc tính sau :
//$ten,$namSinh,$moiQuanHe,$diaChi,$email
// yêu cầu
// xây dựng hàm tính tuổi có trả về = năm hiện tại - năm sinh
//xây dựng hàm kiemTraDoTuoiLayChong như sau
// nếu tuổi của crush >= 18  => đủ tuổi  lấy chồng
//nếu tuổi của crush < 18 Không đủ tuổi lấy chồng
// xây dựng hàm hiển thị thông tin crush  gồm :
//$ten-$namSinh-$moiQuanHe-$diaChi-$email-tuổi- đủ tuổi lấy chồng
class Crush{
    // Khai bao thuộc tính
    public $ten;
    public $namSinh;
    public $moiQuanHe;
    public $diaChi;
    public $email;
    // Khai báo phương thuc
    public function  tinhTuoi(){
        return date('Y') - $this->namSinh;
    }
    public function kiemTraDoTuoiLayChong(){
        // cach 1: if else
        if($this->tinhTuoi() >= 18){
            echo "Dủ tuổi  lấy chồng";
        }else{
            echo "No tuổi  lấy chồng";
        }
        // toan tu 3 ngoi
       echo $checkLayCK = $this->tinhTuoi() >= 18 ? "Dủ tuổi  lấy chồng" : "No tuổi  lấy chồng";
    }
    // Hien thi thong tin
    public function hienThiTT(){
        echo $this->ten;
        echo $this->namSinh;
        echo $this->moiQuanHe;
        echo $this->email;
        echo $this->diaChi;
        echo $this->tinhTuoi();
        $this->kiemTraDoTuoiLayChong();
    }
}