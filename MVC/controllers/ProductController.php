<?php
class ProductController{
    //Mỗi một chức năng tưng ứng với 1 hàm (PT)
    // Hiện  danh sách sản phẩm
    public function getAllDataProduct(){
        $modelProduct = new Product();
//        var_dump($modelProduct->getAllProduct());
        $productList = $modelProduct->getAllProduct();
        // ghép giao diện lên controller
        include_once 'views/list.php';
    }
    public function addDataProduct(){
//        Để nhận dự dữ liệu từ PT Get
//        ta dùng $_GET['tenbien'];
//        Để nhận dự dữ liệu từ PT Post
//        ta dùng $_POST['tenbien'];
        // Đối với GET dữ lieu nhan qua thanh URL
        // Đối với POST dữ lieu nhan qua form
        // Đặt kiểm tra xem ngdung có bấm nut gửi hay không
        if(isset($_POST['btn-submit'])){
            echo $_POST['name'];
            echo $_POST['price'];
            echo $_POST['quantity'];
            // muốn lây được dự input file ta cần sử dụng
            var_dump($_FILES['image']);
            // Thông số khi images file
//            $_FILES['tenbien']['name']: Tên file images
//            $_FILES['tenbien']['type']: Định dạng file images
//            $_FILES['tenbien']['size']: Kich thuoc file images
//            $_FILES['tenbien']['tmp_name']: Tên file (Tạm thời) khi được lưu trữ trên máy chủ
//            $_FILES['tenbien']['error']: Mã lỗi
//            $_FILES['tenbien']['full_path']: Đường dẫn đầy đủ do trình duyệt gửi
            // Cách bước thực hiện upload file ảnh
//            B1: lấy địa chỉ thư mục lưu trữ file ảnh
                $target_dir = "images/";
//                B2: Lấy tên ảnh
            $name_img = time().$_FILES['image']['name'];
//            B3: Tạo 1 biến ghép thư mục chứa ảnh và tên anh
            $target_file = $target_dir. $name_img;
//            B4: Di chuyển file ảnh vào thư mục
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
//            Thêm lênh CSDL
//          Khởi tạo model Pro
            $modelProduct = new Product();
            $check = $modelProduct->insertDataProduct(null, $_POST['name'], $_POST['price'], $target_file, $_POST['quantity'], 1);
            if(!$check){
                echo "Them thành công";
            }else{
                echo "Them thất bại";
            }
        }
        include_once 'views/add.php';
    }
    public function editDataProduct(){
//      echo  $_GET['id'];
      // Thực hiện truy vân theo id để lấy ra thông tin
        if (isset($_GET['id'])){
            $modelProduct = new Product();
            $editPro = $modelProduct->getIdDataProduct($_GET['id']);
//            var_dump($editPro);
            if(isset($_POST['btn-submit'])){
//                echo $_POST['name'];
//                echo $_POST['price'];
//                echo $_POST['quantity'];
                // muốn lây được dự input file ta cần sử dụng
//                var_dump($_FILES['image']);
                // Thông số khi images file
//            $_FILES['tenbien']['name']: Tên file images
//            $_FILES['tenbien']['type']: Định dạng file images
//            $_FILES['tenbien']['size']: Kich thuoc file images
//            $_FILES['tenbien']['tmp_name']: Tên file (Tạm thời) khi được lưu trữ trên máy chủ
//            $_FILES['tenbien']['error']: Mã lỗi
//            $_FILES['tenbien']['full_path']: Đường dẫn đầy đủ do trình duyệt gửi
                // Cách bước thực hiện upload file ảnh
//            B1: lấy địa chỉ thư mục lưu trữ file ảnh
                $target_dir = "images/";
//                B2: Lấy tên ảnh
                $name_img = time().$_FILES['image']['name'];
//            B3: Tạo 1 biến ghép thư mục chứa ảnh và tên anh
                $target_file = $target_dir. $name_img;
//            B4: Di chuyển file ảnh vào thư mục
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
//            Thêm lênh CSDL
//          Khởi tạo model Pro
                $modelProduct = new Product();
                $check = $modelProduct->updateDataProduct( $_POST['name'], $_POST['price'], $target_file, $_POST['quantity'], 1,$_GET['id']);
                if(!$check){
                    echo "Them thành công";
                }else{
                    echo "Them thất bại";
                }
            }
        }
        include_once 'views/edit.php';
    }
}