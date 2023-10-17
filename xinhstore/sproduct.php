<?php
    require "connect.php";
    require_once "header.php";
    $idsp = $_GET['id'];
?>

<?php
		$sql = "select * from product where idsanpham='$idsp'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
 ?>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/<?php echo $row['urlanh'] ?>" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/<?php echo $row['urlanh'] ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $row['urlanh'] ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $row['urlanh'] ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $row['urlanh'] ?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h4><?php echo $row['mota'] ?></h4>
            <h2><?php echo $row['gia'] ?>.000 VND</h2>
            <select>
                <option value="">Size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Small</option>
                <option value="">Large</option>
            </select>

            <form method="POST" action="cart.php?action=add">
                <input type="number" name="quantity[<?php echo $row['idsanpham']?>]" id="" min="1" value="1">
                 <!-- <button class="normal">Thêm vào giỏ</button> --><br>
                 <input style="width: 92px;margin-top: 10px;background-color: #088178;border: none;
                 border-radius: 4px;font-weight: 600;color: #fff; cursor:pointer" type="submit" value="Thêm"/>
            </form>
            
            <h4>Chi tiết sản phẩm</h4>
            <span>Thông số kĩ thuật <br>Thông tin sản phẩm<br> Nguồn gốc <br> Xuất sứ <br> Chất liệu</span>
        </div>
    </section>

	<?php
	 }
    }
	?>   

    <section id="product1" class="section-p1">
        <h2>Sản phẩm bán chạy</h2>
        <p>Giảm giá lên đến 20% cho mỗi sản phẩm</p>
        <div class="pro-container">
        <?php
                $sql= "
                    SELECT * FROM product
                    ORDER BY idsanpham ASC
                    LIMIT 0,4
                    ";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>
            
            <div class="pro">
                <a href="sproduct.php?id=<?php echo $row['idsanpham'] ?>" >
                <img src="img/products/<?php echo $row['urlanh'] ?>" alt="">
                </a>
                <div class="des">
                    <span><?php echo $row['hang'] ?></span>
                    <h5><?php echo $row['mota'] ?></h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4><?php echo $row['gia'] ?>.000 VND</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-bag-shopping"></i></a>
            </div>
           

            <?php
                }
            ?>

        </div>
    </section>
    <script>
        var mainImg = document.getElementById('MainImg');
        var smallImg = document.getElementsByClassName('small-img');

        smallImg[0].onclick = function () {
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function () {
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function () {
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function () {
            mainImg.src = smallImg[3].src;
        }
    </script>

    <script src="script.js"></script>

<?php
    require_once "footer.php";
?>