<?php
include_once('connect.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM product WHERE idsanpham='$id'";
if ($conn->query($sql) === TRUE) {
    header('Location: admin.php');
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>