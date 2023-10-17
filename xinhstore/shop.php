<?php
    require "connect.php";
    require_once "header.php";
?>


    <section id="page-header">
        <h2>#Sơmi</h2>
        <p>Giảm giá toàn bộ các sản phẩm nhân dịp cuối năm!</p>
    </section>

    <section id="product1" class="section-p1">
    <div class="pro-container">
            <?php
                $sql= "
                    SELECT * FROM product
                    ORDER BY idsanpham DESC
                    LIMIT 0,8
                    ";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>
            <!-- <a href="sproduct.html" > -->
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
            <!-- </a> -->

            <?php
                }
            ?>
        </div>
    </section>


<?php
    require_once "footer.php";
?>  