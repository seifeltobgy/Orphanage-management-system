<?php
    class PhoneNumbers
    {
        private $id;
        private $Phone_no;
        private $userid;
        
        public function setid($ID)
        {
            $this->id = $ID;
        }
        public function setoPhone_no($pn)
        {
            $this->Phone_no = $pn;
        }
        public function setuserid($UID)
        {
            $this->userid = $UID;
        }
        
        public function getid()
        {
            return $this->id;
        }
        public function getoPhone_no()
        {
            return $this->Phone_no;
        }
        public function getuserid()
        {
            return $this->userid;
        }
        
        public function SearchPhoneNumber()
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $id = $_SESSION['USERID'];
            $s = "select * from phonenumber where UserId = '$id'";
            $Result = mysqli_query($conn, $s);
            while($row = mysqli_fetch_array($Result))
            {
                if($id == $row['UserId'])
                {
                    $ph_no = $row['Phone_No'];
                    break;
                }
            }
            return $ph_no;
        }
    }
?>