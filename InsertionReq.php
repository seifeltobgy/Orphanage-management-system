<?php
    include 'singleton.php';
    include 'RequestModel.php';
    include 'Notifications.php';
    $Db= DbConnection::getInstance();
    $conn = $Db->getConnection();
    $result = mysqli_query($conn,$req) or die("Error: " . mysqli_error($conn));
    $ct=0;
    $array = array();
    while($row = mysqli_fetch_array($result))
    {
        $Notific = new Request();
        $Notific->setRequesterId($row['RequesterId']);
        $Notific->setReqType($row['ReqType']);
        $array[] = $Notific;
        $ct++;
    }
?>