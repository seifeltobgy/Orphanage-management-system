<?php
    class Donations
    {
        private $Donation_Id;
        private $amount;
        private $created_at;
        private $updated_at;
        private $Email;
        private $PhoneNumber;
        private $DonationMethodId;
        private $DonorID;
        private $DonorName;
        
        // SETS //
        public function setDonation_Id($DID)
        {
            $this->Donation_Id=$DID;
        }
        public function setamount($amount)
        {
            $this->amount=$amount;
        }
        public function setEmail($email)
        {
            $this->Email=$email;
        }
        public function setPhoneNumber($PN)
        {
            $this->PhoneNumber=$PN;
        }
        public function setDonationMethodId($DMID)
        {
            $this->DonationMethodId=$DMID;
        }
        public function setDonorID($DonId)
        {
            $this->DonorID=$DonId;
        }
        public function setDonorName($DonName)
        {
            $this->DonorName = $DonName;
        }
        
        // GETS //
        
        public function getDonation_Id()
        {
            return $this->Donation_Id;
        }
        public function getamount()
        {
            return $this->amount;
        }
        public function getEmail()
        {
            return $this->Email;
        }
        public function getPhoneNumber()
        {
            return $this->PhoneNumber;
        }
        public function getDonationMethodId()
        {
            return $this->DonationMethodId;
        }
        public function getDonorID()
        {
            return $this->DonorID;
        }
        public function getDonorName()
        {
            return $this->DonorName;
        }
        
        // Add // 
        public function AddDonation($email,$amount,$phonenumber,$DonateType,$DonMethod,$donorid)
        {
            include_once 'singleton.php';
            //session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $reg = "insert into donations (Email,amount,PhoneNumber,DonationTypeId,DonationMethodId,DonorID) values ('$email','$amount','$phonenumber','$DonateType','$DonMethod','$donorid')";
            mysqli_query($conn,$reg);
            include 'Notify.php';
        }

       /* public function AddPaymentVisa($DmoId,$CN,$date,$sec,$DonId)
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $DmoId='1';
            $reg = "insert into donationmethodoptionsvalue (DmoId,Value,DonationId) values (1,'$CN','$DonId'),(2,$date,'$DonId'),(3,'$sec','$DonId')";
            mysqli_query($conn,$reg);
        }
        public function AddPaymentVodafone($PhoneN,$amount)
        {
            include_once 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $reg = "insert into donationmethodoptionsvalue (DmoId,Value,DonationId) values (6,'$PhoneN','$DonId') , (7,'$amount','$DonId')";
            mysqli_query($conn,$reg);

        }*/
    
    }
?>