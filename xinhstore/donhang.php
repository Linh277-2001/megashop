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
    <title>Giỏ hàng</title>
    <script src="https://kit.fontawesome.com/b8b512a770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-sharp fa-solid fa-xmark"></i></a>
                <li id="lg-login"><a  href="login.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a  href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i  id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>

    <!--Ảnh của trang -->
    <section id="page-header" class="about-header">
    </section>

    <!--BODY CỦA TRANG-->
    <section id="cart" class="section-p1">
        <table style="width: 100% ;">
            <thead>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td>Số lượng</td>
                    <td>Giá</td>
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
    </section>
        <!--Kết thúc TABLE-->
     
<?php
    require_once "footer.php";
?>