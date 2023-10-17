<?php
    session_start();
    require "connect.php";
    $u= $_SESSION['username'];
$sql= "select * from user where username = '$u' ";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $id1= $row['idkhach'];
    // var_dump($id1);
    // exit;
}
$don = $_GET['id'];
?>
<?php
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <script src="https://kit.fontawesome.com/b8b512a770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="admin/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>

<body>

    <section id="header">
        <a href="index.php"><img src="img/xinhstore.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Áo sơ mi</a></li>
                <li><a href="#">Quần short</a></li>
                <li><a href="#">Áo thun</a></li>
                <li><a href="#">Bộ sưu tập</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-sharp fa-solid fa-xmark"></i></a>
                <li id="lg-login"><a class="active" href="login.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a  href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i  id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>


    <section id="page-header" class="about-header">
    </section>

 <!-- BẮT ĐẦU NỘI DUNG CỦA TRANG -->
   <!-- <div style="font-weight: bold; text-align: center;font-family: 'Spartan', sans-serif">
        <h2> Thông tin tài khoản</h2>
        <h4>Tên đăng nhập:<?php echo $_SESSION['username'] ;?></h4>
        <h4>Họ và tên: Nguyễn Văn Linh</h4>
        <h4>Số điện thoại: 0987654321</h4>
        <h4>Địa chỉ : Hà Nội</h4>
   </div> -->

   <h2 style="font-weight: bold; text-align: center;font-family: 'Spartan', sans-serif"> Chi tiết</h2>
    <div style="margin: 20px 20px;">
           <!-- TABLE -->
           <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th >Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                </tr>
              </thead>
              <tbody>
              <?php
		              $sql = "select * from order_detail where order_id=$don ";
		              $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      while ($row1 = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td>Sản phẩm <?php echo $row1['product_id'] ?></td>
                  <td><?php echo $row1['quantity'] ?></td>
                  <td><?php echo $row1['price'] ?>.000 </td>
                </tr>
                <?php
                }
              }
                ?>
              </tbody>
            </table>
    <!-- TABLE -->
    </div>


    <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Đăng Kí để nhận nhiều ưu đãi</h4>
            <p>
            Nhận thông tin cập nhật qua E-mail về sản phẩm mới nhất của cửa hàng chúng tôi.
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Địa chỉ email">
            <button class="normal">Đăng ký</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Liên Hệ</h4>
            <p><strong>Địa chỉ:</strong> 562 - Nguyễn Trãi, Quận Thanh Xuân, Hà Nội</p>
            <p><strong>Điện thoại:</strong> 0123456789</p>
            <p><strong>Mở cửa:</strong> 9:00 - 18:00 Mon - Sat</p>
            <div class="follow">
                <h4>Mạng xã hội</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">Chính sách đổi trả</a>
            <a href="#">Thông tin vận chuyển</a>
            <a href="#">Chính sách bảo mật</a>
            <a href="#">Liên hệ</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
            <a href="#">Giỏ hàng</a>
            <a href="#">Theo dõi đơn</a>
            <a href="#">Trợ giúp</a>
        </div>
        <div class="col install">
            <h4>Tải App</h4>
            <p>Tải app trên App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Phương thức thanh toán</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>2022, Shop Xinh Store</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>