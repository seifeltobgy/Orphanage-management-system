<?php
$s = "select * from donations";
$Type = "Donation";
$id = $_SESSION['USERID'];
$reg = "insert into requests (RequesterId,ReqType) values ('$id','$Type')";
$req = "select * from requests ORDER BY ReqId DESC";
?>