<?php
include 'UserModel.php';
$username = $_POST['username'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$nat_id = $_POST['nationalid'];
$email = $_POST['Email'];
$pno = $_POST['PhoneNumber'];
$usertype = "user";

$Obj = new users();
$Obj->Registration($username,$pass,$fullname,$nat_id,$usertype,$pno,$email);
?>