<?php
include 'singleton.php';
session_start();
//$Db= DbConnection::getInstance();
$Db= DbConnection::getInstance();
    $conn = $Db->getConnection();

$userid =$_SESSION['USERID'];

$Id=$_GET['rn'];

$fee=$_GET['fe'];
$title=$_GET['en'];
$query = "UPDATE `event` SET `Queue`=`Queue`-1 WHERE id ='$Id' ";
//$sql = " UPDATE 'event' SET 'Fees'='$fee'+100 WHERE id ='$Id '";
//$sql =" SELECT 'Fees' Into $fees  FROM 'event' WHERE id = '$Id '  ";


$data=mysqli_query($conn,$query);
if($data)
{
echo"<font color='green'>Record updated";
header("Refresh:1;url=EVENTATK.php");
}
else
{
    echo"<font color='red'>Record deleted";
    header("Refresh:1;url=EVENTATK.php");
}
$reg = "insert into Enrollments (Userid,Fees,EventName) values ('$userid','$fee','$title')";
//$reg = "insert into Enrollments (UserName,Fees,EventName) values ('$user','$fees','$title')";
mysqli_query($conn,$reg);

?>