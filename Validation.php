<?php
include 'UserModel.php';
//$conn = mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'orphanage');
$username = $_POST['username'];
$_SESSION['UserName'] = $username;
$pass = $_POST['password'];
$usertype = "user";

$Obj = new users();
$Obj->Login($username,$pass,$usertype);

?>