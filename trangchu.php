<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"></script>
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="css/trangchu.css"> <!-- Liên kết với file CSS -->
</head>
<body>
    
    <div id="wrapper">
        <div id="banner">
            <div class="box-left">
                <h1>
                    <span>GIÀY ĐÁ BÓNG CHÍNH HÃNG</span>
                </h1>
            </div>
        </div>
        <div id="wp-products">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <ul id="list-products">
                <?php
                require 'indexgiap.php';
                $tblTable = "products";
                $stt = 1;
                //loi van chay
                $data = $db->getAllData($tblTable);
                foreach($data as $value){
                ?>
                <div class="item">
                    <a href="javascript:void(0);"
                        onclick="<?php echo isset($_SESSION['user_id']) ?
                            "redirectToInformation('". $value['img'] . "')" : "redirectToLogin()"; ?>">
                        <img src="<?php echo $value['img']; ?>" alt="">
                    </a>
                    <div class="name"><?php echo $value['name']; ?></div>

                </div>
                <?php
                    $stt++;
                }
                ?>
            </ul>
        </div>
    </div>
    <input type="hidden" id="productImage" name="productImage" value=""> <!-- Input hidden để lưu đường dẫn ảnh -->
    <?php
    if(isset($_SESSION['user_id'])){
        // Nếu user đã đăng nhập, thực hiện chuyển hướng
        echo "<script>
                    function redirectToInformation(imageSrc) {
                        // Chuyển hướng người dùng đến trang information.php và truyền đường dẫn ảnh
                        window.location.href = 'information.php?img=' + encodeURIComponent(imageSrc);
                    }
                </script>";
    } else {
        // Nếu user chưa đăng nhập, chuyển hướng đến trang đăng nhập
        echo "<script>
                        function redirectToLogin() {
                            window.location.href = 'login/loginform.php ';
                        }
                    </script>";

    }
    ?>
</body>
</html>
<?php include "inc/footer.php"; ?>


