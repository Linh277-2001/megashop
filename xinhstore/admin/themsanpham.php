<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "demo";
	$conn = new mysqli($host, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connect fail: ".$conn->connect_error);
	} else {
		//echo 'Connect successfull!';
	}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["urlanh"])) { $urlanh = $_POST['urlanh']; }
    if(isset($_POST["hang"])) { $hang = $_POST['hang']; }
    if(isset($_POST["mota"])) { $mota = $_POST['mota']; }
    if(isset($_POST["gia"])) { $gia = $_POST['gia']; }

    $sql = "INSERT INTO product 
    VALUES (null,'$urlanh', '$hang', '$mota', '$gia')";

    if ($conn->query($sql) === TRUE) {
        // echo '<script language="javascript"> alert("Đã upload thành công!");</script>';
        header('Location: admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<form class="conterner" style="margin-left:400px ;margin-right:400px" action="" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">URL ảnh</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="urlanh">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Hãng</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="hang">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mô tả</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="mota">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Giá</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="gia">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Thêm sản phẩm</button>
</form>
</body>
</html>