<?php



include_once 'singleton.php';
//include 'DonationModel.php';
session_start();
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();
  
$ItemId=$_GET['rn'];
$userid =$_SESSION['USERID'];

$reg ="insert into userdonated (UserId, DonatedItemId) values ('$userid','$ItemId') " ;
// "insert into userdonated (Userid,Fees,EventName) values ('$userid','$fee','$title')";
//INSERT INTO `userdonated` (`Id`, `UserId`, `DonatedItemId`) VALUES ('10', '56', '1');
mysqli_query($conn,$reg);
/////

?>