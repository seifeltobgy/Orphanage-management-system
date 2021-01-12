<?php
    include_once 'singleton.php';
    include 'DonationMethodModel.php';
    $Db= DbConnection::getInstance();
    $conn = $Db->getConnection();
    $name = $_POST['Name'];
    
    $adder = new DonationMethod(1);
    $adder->AddMethod($name);
?>