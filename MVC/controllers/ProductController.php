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
}