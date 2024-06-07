<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm mới</title>
</head>
<body>
<h1>Sua</h1>
<form action="" method="post" enctype="multipart/form-data">
    <!--action: mới dự liệu được đưa đến-->
    <!--       enctype="multipart/form-data": muốn gửi file trong form bắt
                phải có dòng đó-->
    <label>Name</label>
    <input type="text" name="name" id="" value="<?php echo $editPro->name ?>">
    <label>Price</label>
    <input type="text" name="price" id="" value="<?php echo $editPro->price ?>">
    <label>Image</label>
    <input type="file" name="image" id="">
    <img src="<?php echo $editPro->image ?>" style="width: 100px; height: 100px">
    <label>Quantity</label>
    <input type="text" name="quantity" id="" value="<?php echo $editPro->quantity ?>">
    <input type="submit" name="btn-submit" value="Gửi">
</form>
</body>
</html>