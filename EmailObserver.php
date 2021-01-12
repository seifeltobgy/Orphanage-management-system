<?php
    interface Subject
    {
        public function NotifyUsers();
    }
    interface Observer
    {
        public function update($message);
    }
    class Message implements Subject
    {
        public function NotifyUsers()
        {
            /////////////////////WRITE IN FILE/////////////////////////
            $User = new UserInform();
            $User->update("Hi! ");
        }
    }
    class UserInform implements Observer
    {
        public function update($message)
        {
            $this->ProceedMessege($message);
        }
        public function ProceedMessege($message)
        {
            /////////////////////WRITE IN FILE/////////////////////////
            include_once 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $myfile = fopen("EmailMesseges.txt", "a") or die("Unable to open file!");
            $usertype = "user";
            $id = 2;
            $s = "select * from registration where UserType = '$usertype'";
            $s1 = "select message from messages where Id = '$id'";
            $Messege = mysqli_query($conn, $s1);
            $Text = mysqli_fetch_array($Messege);
            $Result = mysqli_query($conn, $s);
            while($row = mysqli_fetch_array($Result))
            {
                $txt = $message . $row['Name']. " " . $Text['message'] . "\n";
                fwrite($myfile, $txt);
            }
            fclose($myfile);
        }
    }
?>