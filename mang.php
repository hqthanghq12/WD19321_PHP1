<?php
//mảng tuần tự
// Key sẽ tự động tăng theo số lượng phần tử
// Key sẽ chạy từ 0 -> n-1 (với n là tổng số phần tử có trong mảng)
// Khai báo
// Cách 1: $tenmang = array(gt1, gt2, ...., gtn);
// Cách 2: $tenmamg = [gt1, gt2, ...., gtn];
// Mảng giá trị là số nguyên
$arraySN = [2,3,4,5,6,7,8,9];
// Hiển thị mảng
echo "<pre>";
print_r($arraySN);
// Lấy trị trong mảng
// $tenmang[vị trí];
//echo $arraySN[3];
//duyệt mảng
// (tuần tự có thể sử for để duyệt mảng)
//echo count($arraySN);
// for
//    for($i= 0; $i < count($arraySN); $i++){
//        echo $arraySN[$i];
//    }
// Khai báo 1 mảng có 10 pt (giá trị pt tự chọn)
// hiện thị mảng
// lấy ra ngẫu nhiêu giá trị của 5 pt
//-------------------------------------------------
// Mảng liên hợp
// Khai báo
// $tenmang = [key1 => gtr1, key2 => gtr2, ...., keyn => gtrin];
$arrayLH = ["a"=>5, "b"=>"HIHI", 5 => "Xinh Xinh"];
    print_r($arrayLH);
//    Lấy giá trị
// $tenmang[vị trí];
//echo $arrayLH["b"];
// foreach($tenmang as $vitri => $giatri){
//  KL
//}
//foreach ($arrayLH as $key => $value){
//    echo $value;
//}
// Mảng 2 chiều
$arrayDC = [
    [1,2,3,4,6,7,9],
    ["adc"=>123, 456 => "xyz"]
];
print_r($arrayDC);
// Lấy phaanf tử
echo $arrayDC[0][6];
