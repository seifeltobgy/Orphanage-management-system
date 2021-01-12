<?php
    class Emails
    {
        private $id;
        private $Email;
        private $userid;
        
        public function setid($ID)
        {
            $this->id = $ID;
        }
        public function setoEmail($em)
        {
            $this->Email = $em;
        }
        public function setuserid($UID)
        {
            $this->userid = $UID;
        }
        
        public function getid()
        {
            return $this->id;
        }
        public function getEmail()
        {
            return $this->Email;
        }
        public function getuserid()
        {
            return $this->userid;
        }
        
        public function SearchEmail()
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $id = $_SESSION['USERID'];
            $s = "select * from emails where UserId = '$id'";
            $Result = mysqli_query($conn, $s);
            while($row = mysqli_fetch_array($Result))
            {
                if($id == $row['UserId'])
                {
                    $email = $row['Email'];
                    break;
                }
            }
            return $email;
        }
    }
?>