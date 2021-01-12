<?php
include 'NotifyModel.php';
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();
mysqli_query($conn,$reg);
?>