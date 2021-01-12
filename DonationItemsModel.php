<?php
    class DonationItems
    {
        private $ItemId;
        private $ItemName;
        
        public function setItemId($id)
        {
            $this->ItemId = $id;
        }
        public function setItemName($name)
        {
            $this->ItemName = $name;
        }
        
        public function getItemId()
        {
            return $this->ItemId;
        }
        public function getItemName()
        {
            return $this->ItemName;
        }
        
        public function ViewItems()
        {
            include 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            /*$s = "select * from donation_items";
            $Result = mysqli_query($conn, $s);
            $items = array();
            while($row = mysqli_fetch_array($Result))
            {
                $Item = new DonationItems();
                $Item->setItemId(row['Item_id']);
                $Item->setItemName(row['Item_Name']);
                $items[] = $Item;
            }*/
            return $items;
        }
        public function AddItem($name)
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $reg = "insert into donation_items (Item_Name) values ('$name')";
            mysqli_query($conn,$reg);
            echo "Yes!";
            header("Refresh:1;url=AddDonType.html");
        }
    }
?>