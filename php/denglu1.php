<?php
   header('content-type:text/html;charset=utf-8');
$name = $_GET['username'];
$pw = $_GET['password'];
$conn = mysqli_connect('localhost','root','root','music');
$sql = "SELECT * FROM `user` WHERE `username`='$name' AND `password`='$pw'";
$res = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($res);
if($row){
   header('location:/xiaomi/pages/goodgood.html');
}else{
    echo "登录失败";
}
?>