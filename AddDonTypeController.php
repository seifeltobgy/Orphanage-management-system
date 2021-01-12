<?php
    include_once 'singleton.php';
    include 'DonationItemsModel.php';
    $Db= DbConnection::getInstance();
    $conn = $Db->getConnection();
    $name = $_POST['ItemName'];
    
    $adder = new DonationItems();
    $adder->AddItem($name);
?>