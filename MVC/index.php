<?php
//require_once 'models/ConnectDatabase.php';
//$con = new ConnectDatabase();
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';
$cProduct = new ProductController();
$cProduct->getAllDataProduct();
//$getData = new Product();
//var_dump($getData->getAllProduct());
