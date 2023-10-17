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
                <li id="lg-bag"><a  href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-sharp fa-solid fa-xmark"></i></a>
                <li id="lg-login"><a class="active" href="login.php"><i class="fa-solid fa-user"></i></a></li>
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
                    <td>Người mua</td>
                    <td>Số điện thoại</td>
                    <td>Địa chỉ</td>
                    <td>Tổng tiền</td>
                    <td>Ngày đặt</td>
                    <td>Xem chi tiết</td>
                </tr>
            </thead>
            <tbody>
                <?php 
		            $sql = "select * from orders where iduser='$id1' ";
		            $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    
                ?>
                
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['total'] ?>.000 </td>
                    <td><?php $format = "%H:%M:%S %d-%m-%Y";$timestamp = $row['created_time'];echo $strTime = strftime($format, $timestamp )?></td>
                    <td><a style="text-decoration:none" href="donhang.php?id=<?php echo $row['id'] ?>">Xem</a></td>
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