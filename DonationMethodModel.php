<?php
    class DonationMethod
    {
        private $DId ;
        private $Name;
        private $CreatedAt;
        private $UpdatedAt;
        private $IsDeleted;
        ///////////////////////////////////////////// SET & GET
        public function setDId($did)
        {
            $this->DId=$did;
        }
        public function setName($N)
        {
            $this->Name=$N;
        }
        public function setCreatedAt($CA)
        {
            $this->CreatedAt=$CA;
        }public function setUpdatedAt($UA)
        {
            $this->UpdatedAt=$UA;
        }public function setIsDeleted($ISD)
        {
            $this->IsDeleted=$ISD;
        }
        
        public function getName()
        {
            return $this->Name;
        }
        public function getDId()
        {
            return $this->DId;
        }
        public function getCreatedAt()
        {
            return $this->CreatedAt;
        }
        public function getUpdatedAt()
        {
            return $this->UpdatedAt;
        }
        public function getIsDeleted()
        {
            return $this->IsDeleted;
        }
        
        ////////////////////////////////////////// MODEL CONSTRUCTOR
        public function __construct($id)
        {
            if($id!="")
            {
                include_once 'singleton.php';
                $Db= DbConnection::getInstance();
                $conn = $Db->getConnection();
                $sql="select * from donationmethod where Id=$id";
                $PDataSet=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($row=mysqli_fetch_array($PDataSet))
                {
                    $this->DId=$id;
                    $this->Name=$row['Name'];
                    $this->CreatedAt=$row['CreatedAt'];
                    $this->UpdatedAt=$row['UpdatedAt'];
                    $this->IsDeleted=$row['IsDeleted'];
                }
            }
        }
        
        ////////////////////////////////////////////////// FUNCTION BTRAGA3 MN EL DB
        public static function SelectAllMethodsInDB()
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            
            $sql="select * from donationmethod order by Name ";
                $PDataSet=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $i=0;
            $Result = array();
            $ct=0;
            //echo"HI";
            while($row=mysqli_fetch_array($PDataSet))
            {
                $MyObj=new donationmethod ($row['Id']);
                
                //exit(0);
                $Result[$i]=$MyObj;
                $i++;
                $ct++;
            }
            return $Result;
        }
        
        public function AddMethod($name)
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $reg = "insert into donationmethod (Name) values ('$name')";
            mysqli_query($conn,$reg);
            echo "Yes!";
            header("Refresh:1;url=AddDonMethod.php");
        }
    }
?>