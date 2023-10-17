<?php
    session_start();
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $p= md5($p);
    $db= mysqli_connect("localhost","root","","demo");
    $sql= "select * from user where username = '$u' and password ='$p'";
    $rs = mysqli_query($db,$sql);
    if(mysqli_num_rows($rs) >0){
        $_SESSION['username'] = $u;
        header('Location: user.php');
    }else{
        header('Location: login.php');
    }
?>