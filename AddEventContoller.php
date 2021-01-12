<?php
    include 'EmailObserver.php';
    include 'EventModel.php';
    include_once 'singleton.php';
    $Db= DbConnection::getInstance();
    $link = $Db->getConnection();
    
    $title = $_POST['EventTitle'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $fees = $_POST['fees'];
    $queue = $_POST['Queue'];
//////
$id=3;
    $Event = new Events($id);
    $Event->AddEvents($title,$date,$content,$queue,$fees);


    $Mess = new Message();
    $Mess->NotifyUsers();
    //$User = new UserInform();
    //$User->update("Hi! ");
?>