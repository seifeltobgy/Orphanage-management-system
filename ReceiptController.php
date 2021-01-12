<?php
    include 'singleton.php';
    include 'ReceiptModel.php';
    //session_start();
    $Db= DbConnection::getInstance();
    $conn = $Db->getConnection();
    $sql ="SELECT * FROM `donations` WHERE Donation_Id = ( SELECT MAX(Donation_Id) ) ORDER BY Donation_Id DESC LIMIT 1";
    $Result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($Result))
    {
        $Receipt = new Receipt();
        $Receipt->setEmail($row['Email']);
        $Receipt->setPhoneNumber($row['PhoneNumber']);
        $Receipt->setitem($row['DonationTypeId']);
        $Receipt->setamount($row['amount']);
        $Receipt->setAddress($row['Address']);
        $Receipt->setName($row['DonorName']);
        $Receipt->setcreated_at($row['created_at']);
    }
    /////////////////////////////////
    $s = "select * from donation_items";
    $Result = mysqli_query($conn, $s);
    $items = array();
    while($row = mysqli_fetch_array($Result))
    {
        $Item = new DonationItems();
        $Item->setItemId($row['Item_id']);
        $Item->setItemName($row['Item_Name']);
        $items[] = $Item;
    }
?>