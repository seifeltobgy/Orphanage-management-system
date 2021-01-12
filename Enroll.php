<?php
        
        session_start();
        include_once 'singleton.php';
        $Db= DbConnection::getInstance();
        $conn = $Db->getConnection();
        $user = $_SESSION['UserName'];
       
        $id = $_SESSION['USERID'];
        $s = "select * from emails where UserId = '$id'";
        $Result = mysqli_query($conn, $s);
      //  $fees = $_SESSION['Fees'];
       // $title = $_SESSION['Title'];
        //$query = "select * from event ORDER BY id ASC";
        //$result = mysqli_query($connect,$query);
                        
        /*while($row = mysqli_fetch_array($result))
        {
            if($row)
        }*/
               $reg = "insert into Enrollments (UserName,Userid) values ('$user','$id')";
        //$reg = "insert into Enrollments (UserName,Fees,EventName) values ('$user','$fees','$title')";
        mysqli_query($conn,$reg);
?>
