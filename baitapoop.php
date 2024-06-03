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
//class Crush{
//    // Khai bao thuộc tính
//    public $ten;
//    public $namSinh;
//    public $moiQuanHe;
//    public $diaChi;
//    public $email;
//    // Khai báo phương thuc
//    public function  tinhTuoi(){
//        return date('Y') - $this->namSinh;
//    }
//    public function kiemTraDoTuoiLayChong(){
//        // cach 1: if else
//        if($this->tinhTuoi() >= 18){
//            echo "Dủ tuổi  lấy chồng";
//        }else{
//            echo "No tuổi  lấy chồng";
//        }
//        // toan tu 3 ngoi
//       echo $checkLayCK = $this->tinhTuoi() >= 18 ? "Dủ tuổi  lấy chồng" : "No tuổi  lấy chồng";
//    }
//    // Hien thi thong tin
//    public function hienThiTT(){
//        echo $this->ten;
//        echo $this->namSinh;
//        echo $this->moiQuanHe;
//        echo $this->email;
//        echo $this->diaChi;
//        echo $this->tinhTuoi();
//        $this->kiemTraDoTuoiLayChong();
//    }
//}
// tạo 1 class là CongDan:
class CongDan{
// Có những thuộc tính sau
// hoTen, soDT, soCMT, chieuCao, canNang
// => Khai bao thuộc tính
    public $hoTen;
    public $soDT;
    public $soCMT;
    public $chieuCao;
    public $canNang;
// yêu cầu:
// xây dựng phương thức checkSCMT (hàm không trả về)
// + Nếu 2 cuối của soCMT là số chẵn thì hiển thị => Số chứng minh thư là số chẵn
// + Nếu 2 cuối của soCMT là số lẻ thì hiển thị => Số chứng minh thư là số lẻ
    public function checkSCMT(){
        $arraySCMT = str_split($this->soCMT);
        if($arraySCMT[count($arraySCMT)-1] % 2 == 0){
            echo "Số chứng minh thư là số chẵn";
        }else{
            echo "Số chứng minh thư là số lẻ";
        }
    }
// Xây dựng phương thức tính chiSoBMI (hàm có trả về) => cân năng(kg)/ chiều cao * chiều cao (m)
//    public function
// Xây dựng phương thức hiện thị trangThaiCoThe (hàm không trả về)
// + Nếu chỉ số BMI < 18 => Gầy
// + Nếu chỉ số 18 >= BMI < 25 => Bình thường
// + Nếu chỉ số BMI > 24 => Thừa cân
// xây dựng hàm hiển thị thongTinCongDan :
// hoTen, soDT, soCMT, chieuCao, canNang, checkSCMT, chiSoBMI, trangThaiCoThe
}
// tạo 1 class là SinhVien có những thuộc tính sau :
// maSV, hoTen, soCMT, diemLab, diemQuiz, diemASM, diemThi, soBuoiNghi
// yêu cầu:
// xây dựng phương thức checkDKthi (hàm có trả về)
// + Trả về 1 nếu được đi thi => soBuoiNghi < 4 và (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 >= 3
// + Trả về 0 nếu không được đi thi => soBuoiNghi > 4 hoặc (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 < 3
// Xây dựng phương thức tính checkPassMon (hàm có trả về)
// + Trả về 1 nếu pass môn 
//  - Được đi thi và diemThi > 5 và (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 + diemThi*0.4 >= 5
// + Trả về 0 nếu không pass môn
//  - Không được đi thi hoặc diemThi < 5 hoặc (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 + diemThi*0.4 < 5
// Xây dựng phương thức hiện thị checkDiemSo (hàm không trả về)
// + Nếu không được đi thi hoặc không Pass môn => Xin chia buồn nhé
// + Nếu được đi thi và Pass môn thì kiểm tra xem điểm thi có phải số hoàn hảo hay không
// xây dựng hàm hiển thị thongTinSinhVien :
// maSV, hoTen, soCMT, diemLab, diemQuiz, diemASM, diemThi, soBuoiNghi, 
// Và hiện thị có được đi thi và pass môn hay không
////////////////////////////////////////////////////////////////////////////////////////
// hoTen, soDT, soCMT, chieuCao, canNang
// yêu cầu:
// xây dựng phương thức checkSCMT (hàm không trả về)
// + Nếu 2 cuối của soCMT là số chẵn thì hiển thị => Số chứng minh thư là số chẵn
// + Nếu 2 cuối của soCMT là số lẻ thì hiển thị => Số chứng minh thư là số lẻ
// Xây dựng phương thức tính chiSoBMI (hàm có trả về) => cân năng(kg)/ chiều cao * chiều cao (m)
// Xây dựng phương thức hiện thị trangThaiCoThe (hàm không trả về)
// + Nếu chỉ số BMI < 18 => Gầy
// + Nếu chỉ số 18 >= BMI < 25 => Bình thường
// + Nếu chỉ số BMI > 24 => Thừa cân
// xây dựng hàm hiển thị thongTinCongDan :
// hoTen, soDT, soCMT, chieuCao, canNang, checkSCMT, chiSoBMI, trangThaiCoThe
////////////////////////////////////////////////////////////////
// tạo 1 class là SinhVien có những thuộc tính sau :
// maSV, hoTen, soCMT, diemLab, diemQuiz, diemASM, diemThi, soBuoiNghi
// yêu cầu:
// xây dựng phương thức checkDKthi (hàm có trả về)
// + Trả về 1 nếu được đi thi => soBuoiNghi < 4 và (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 >= 3
// + Trả về 0 nếu không được đi thi => soBuoiNghi > 4 hoặc (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 < 3
// Xây dựng phương thức tính checkPassMon (hàm có trả về)
// + Trả về 1 nếu pass môn 
//  - Được đi thi và diemThi > 5 và (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 + diemThi*0.4 >= 5
// + Trả về 0 nếu không pass môn
//  - Không được đi thi hoặc diemThi < 5 hoặc (diemLab * 0.3 +   diemQuiz * 0.2 + diemASM * 0.2)*0.6 + diemThi*0.4 < 5
// Xây dựng phương thức hiện thị checkDiemSo (hàm không trả về)
// + Nếu không được đi thi hoặc không Pass môn => Xin chia buồn nhé
// + Nếu được đi thi và Pass môn thì kiểm tra xem điểm thi có phải số hoàn hảo hay không
// xây dựng hàm hiển thị thongTinSinhVien :
// maSV, hoTen, soCMT, diemLab, diemQuiz, diemASM, diemThi, soBuoiNghi, 
// Và hiện thị có được đi thi và pass môn hay không
// tạo 1 class là HinhHoc có những thuộc tính sau
// ten