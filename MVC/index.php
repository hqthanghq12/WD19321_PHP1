<?php
//require_once 'models/ConnectDatabase.php';
//$con = new ConnectDatabase();
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';
$cProduct = new ProductController();
//$cProduct->getAllDataProduct();
//$getData = new Product();
//var_dump($getData->getAllProduct());
//$cProduct->addDataProduct();
//$cProduct->editProduct();
// Tính năng điều hướng
$luaChon = isset($_GET['act'])?$_GET['act']:"/" ;
switch ($luaChon){
    case 'listProduct':
        $cProduct->getAllDataProduct();
        break;
    case 'addProduct':
        $cProduct->addDataProduct();
        break;
    case 'editProduct':
        $cProduct->editDataProduct();
        break;
    default:
        $cProduct->getAllDataProduct();
        break;
}