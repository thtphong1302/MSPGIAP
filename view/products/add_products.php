<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm - Quản lý sản phẩm</title>
</head>
<link rel="stylesheet" type="text/css" href="../style.css">

<body>
    <div class="container">
        <div class="dangkysanpham">
            <a href="indexgiap.php?controller=dbproducts&action=list"></a>
            
            <h3>Add Products</h3>

            <form action="indexgiap.php?controller=dbproducts&action=add" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td><input type="text" id="name" name="name" placeholder="Enter name product"></td>
                    </tr>
                    <tr>
                        <td><label for="category">Category:</label></td>
                        <td><input type="text" id="category" name="category" placeholder="Enter category"></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price:</label></td>
                        <td><input type="text" id="price" name="price" placeholder="Enter price"></td>
                    </tr>
                    <tr>
                        <td><label for="size">Size:</label></td>
                        <td><input type="text" id="size" name="size" placeholder="Enter size"></td>
                        
                    </tr>
                    <tr>
                        <td><label for="quantity">Quantity:</label></td>
                        <td><input type="text" id="quantity" name="quantity" placeholder="Enter quantity"></td>
                    </tr>
                    <tr>
                        <td><label for="information">Information:</label></td>
                        <td><input type="text" id="information" name="information" placeholder="Enter information"></td>
                    </tr>
                    <tr>
                        <td><label for="img">Image:</label></td>
                        <td><input type="file" id="img" name="img" accept="image/*"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" name="add_products" value="Save"></td>
                    </tr>
                </table>
            </form>
            <?php

if(isset($thanhcong) && in_array('add_success', $thanhcong)) {
    $_SESSION['add_success'] = true;
} elseif (isset($thanhcong) && in_array('add_fail', $thanhcong)) {
    $_SESSION['add_fail'] = true;
}

if(isset($_SESSION['add_success'])) {
    echo "<p style='color: green; text-align: center'>Add success.</p>";
    unset($_SESSION['add_success']); // Xóa biến session sau khi hiển thị thông báo
} elseif(isset($_SESSION['add_fail'])) {
    echo "<p style='color: red; text-align: center'>Add fail.</p>";
    unset($_SESSION['add_fail']); // Xóa biến session sau khi hiển thị thông báo
} else {
    // Không có thông báo
}
?>

        </div>
    </div>
<!--    --><?php
//    require 'inc/footer.php';
//    ?>
</body>
    <?php
    require 'inc/footer.php';
    ?>
</html>
