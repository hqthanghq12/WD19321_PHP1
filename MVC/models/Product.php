<?php
require_once 'ConnectDatabase.php';
class Product{
    public $connect;
    public function __construct()
    {
        $this->connect = new ConnectDatabase();
    }
    // Mỗi một câu lệnh truy vấn hoăc thao tác (thêm, sửa, xóa)
    // Thì cần tạo 1 hàm(Phương thức mới)
    // Luôn thực hiện thứ trước khi đưa vào code
    // Lấy ra tất cả bản ghi của bảng
    public function getAllProduct(){
        // bước 1: Viết câu lệnh sql
        $sql = "SELECT * FROM products"; // Luôn chạy trên Mysql trước
        // Bước 2: Gọi hàm lưu trữ câu lệnh (câu nay là bắt buộc)
        $this->connect->setQuery($sql);
        // Bước 3: Chọn đúng định danh để thực thi
        // Nếu là truy vấn (Tất cả những câu lệnh bắt đầu bằng SELECT)
        // => Gọi đến hàm loadData()
        // + TH1: Nếu câu truy vấn trả ra nhiều bản ghi (Nhìn khi thực trên mysql)
        // => Thì hàm loadData() để nguyên
        // TH2: Nếu câu truy vấn trả ra 1 bản ghi (Nhìn khi thực trên mysql)
        //  => Thì hàm loadData() thêm như sau loadData([ts1,ts2,...], false)
        // Nếu như là thực hiện câu lệnh thao tác (Thêm, sửa, xóa) =>
        // gọi hàm execute()
        return $this->connect->loadData();
    }
    public function insertDataProduct($id, $name, $price, $image, $quantity, $status){
        $sql = "INSERT INTO `products` VALUES (?,?,?,?,?,?)";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id, $name, $price, $image, $quantity, $status]);
    }
    public function getIdDataProduct($id){
        $sql = "SELECT * FROM `products` WHERE id = ?";
        $this->connect->setQuery($sql);
//        nếu mà lấy 1 bản ghi hoặc chỉnh sửa dữ liệu nhớ phải truyê thêm false
        return $this->connect->loadData([$id], false);
    }
    public function updateDataProduct( $name, $price, $image, $quantity, $status, $id){
        $sql = "UPDATE `products` SET `name`= ?,`price`= ?,`image`= ?,`quantity`= ?,`status`= ? WHERE `id`= ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$name, $price, $image, $quantity, $status, $id], false);
    }
}