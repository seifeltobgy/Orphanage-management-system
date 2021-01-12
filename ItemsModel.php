<?php
    class Item
    {
        private $Item_id ;
        private $Item_Name;
        private $CreatedAt;
        private $UpdatedAt;
        private $IsDeleted;
        ///////////////////////////////////////////// SET & GET
        public function setItem_id($Iid)
        {
            $this->Item_id=$Iid;
        }
        public function setItem_Name($IN)
        {
            $this->Item_Name=$IN;
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
        public function getItem_Name()
        {
            return $this->Item_Name;
        }
        public function getItem_id()
        {
            return $this->Item_id;
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
                $sql="select * from donation_items where Item_id=$id";
                $IDataSet=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($row=mysqli_fetch_array($IDataSet))
                {
                    $this->Item_id=$id;
                    $this->Item_Name=$row['Item_Name'];
                    $this->CreatedAt=$row['CreatedAt'];
                    $this->UpdatedAt=$row['UpdatedAt'];
                    $this->IsDeleted=$row['IsDeleted'];    
                }
            }            
        }
        
        ////////////////////////////////////////////////// FUNCTION BTRAGA3 MN EL DB
        public static function SelectAllitemsInDB()
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            
            $sql="select * from donation_items order by Item_id ";
            $IDataSet=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $i=0;
            $Result = array();
            while($row=mysqli_fetch_array($IDataSet))
            {
                $MyObj=new Item($row['Item_id']);
                //exit(0);
                $Result[$i]=$MyObj;
                $i++;
            }
            return $Result;
        }
    }
?>