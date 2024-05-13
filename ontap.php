<!-- Câu điều kiện -->
<!-- Bài 1 -->
<!-- - Khai báo những biến sau: hoTen, namSinh, noiSinh, soDT
- Hiển thị những thông tin sau ra màn hình
- Họ tên, Tuổi, Nơi Sinh, Số Điện Thoại, Tình trạng
- Tình trạng + Trên 18 và dưới 27 -> Đã đủ điều kiện đi nghĩa vụ
        + Ngoài ra thì hiện thị -> Chưa đủ điều kiện đi nghĩa vụ -->
        <!-- Giải -->
<?php
// Khai báo biến
$hoTen = "Nguyễn Thành Trung";
$namSinh = 2005;
$noiSinh = "Việt Nam";
$soDT = "0987654321";
// Dùng if else
$tuoi = 2024 - $namSinh;
if($tuoi>= 18 && $tuoi<= 27){
    echo "Đã đủ điều kiện đi nghĩa vụ";
}else{
    echo "Chưa đủ điều kiện đi nghĩa vụ";
}
// Toán tử 3 ngôi
// Biến chứa = Dk ? Kq đúng : Kq sai
$tinhTrang =  ($tuoi>= 18 && $tuoi<= 27) ? "Đã đủ điều kiện đi nghĩa vụ" : "Chưa đủ điều kiện đi nghĩa vụ";

?>
<!-- Bài 2 -->
<!-- Thực hiện menu nhà hàng -->
<!-- Khai báo biến sau: luaChon
Nếu khách hàng chọn 1 thi hiện thị là Cafe đen
(Làm cho thầy 20 lựa chọn nhé )
Tạm thời 2 bài này khởi động -->
<?php
// Cộng điểm: Hải Dương
$luachon = 1;
switch ($luachon){
    case 1:
        echo "bạn chọn cafe đen";
        break;
    case 2:
        echo "bạn chọn cafe đen";
        break;
    case 3:
        echo "bạn chọn cafe đen";
        break;
    case 4:
        echo "bạn chọn cafe đen";
        break;
    case 5:
        echo "bạn chọn cafe đen";
        break;
    case 6:
        echo "bạn chọn cafe đen";
        break;
    case 7:
        echo "bạn chọn cafe đen";
        break;
    case 8:
        echo "bạn chọn cafe đen";
        break;
    case 9:
        echo "bạn chọn cafe đen";
        break;
    case 10:
        echo "bạn chọn cafe đen";
        break;
    default: 
        echo " Bạn nên chọn lại";
        break;
}
    for($i = 0;$i<10;$i++){
        echo " anh xin lỗi";
    }
// Bài tập
// Hiển thị ra tất các số theo yêu cầu sau
// Số chẵn (Từ 1 - 100)
// Số nguyên tố (Từ 1 - 100)
//  dùng for
//  while, do while 

?>
