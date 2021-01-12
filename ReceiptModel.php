<?php
    class Receipt
    {
        private $ReceiptId;
        private $Email;
        private $phonenumber;
        private $item;
        private $amount;
        private $Address;
        private $Name;
        private $created_at;
        private $updated_at;
        ////////SETS//////////
        public function setReceiptId($id)
        {
            $this->ReceiptId = $id;
        }
        public function setName($name)
        {
            $this->Name = $name;
        }
        public function setEmail($email)
        {
            $this->Email = $email;
        }
        public function setPhoneNumber($pn)
        {
            $this->phonenumber = $pn;
        }
        public function setitem($Item)
        {
            $this->item = $Item;
        }
        public function setamount($Amount)
        {
            $this->amount = $Amount;
        }
        public function setAddress($address)
        {
            $this->Address = $address;
        }
        public function setcreated_at($ct)
        {
            $this->created_at = $ct;
        }
        public function setupdated_at($ut)
        {
            $this->updated_at = $ut;
        }
        
        ////////GETS//////////
        public function getReceiptId()
        {
            return $this->ReceiptId;
        }
        public function getEmail()
        {
            return $this->Email;
        }
        public function getPhoneNumber()
        {
            return $this->phonenumber;
        }
        public function getitem()
        {
            return $this->item;
        }
        public function getamount()
        {
            return $this->amount;
        }
        public function getAddress()
        {
            return $this->Address;
        }
        public function getName()
        {
            return $this->Name;
        }
        public function getcreated_at()
        {
            return $this->created_at;
        }
        public function getupdated_at()
        {
            return $this->updated_at;
        }
        
        //////////////////////////////
        public function AddReceipt()
        {
            
        }
    }
////////////////////////////////////////////
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
            $s = "select * from donation_items";
            $Result = mysqli_query($conn, $s);
            $items = array();
            while($row = mysqli_fetch_array($Result))
            {
                $Item = new DonationItems();
                $Item->setItemId($row['Item_id']);
                $Item->setItemName($row['Item_Name']);
                $items[] = $Item;
            }
            return $items;
        }
    }
?>