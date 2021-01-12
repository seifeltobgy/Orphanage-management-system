<?php
    session_start();
    /////////////GETEMAIL///////////
    include 'Emails.php';
    include 'DonationMethodModel.php';
    $Eobj = new Emails();
    $email = $Eobj->SearchEmail();
    /////////////GETPHONENUMBER///////////
    include 'PhoneNumbers.php';
    $Pobj = new PhoneNumbers();
    $phonenumber = $Pobj->SearchPhoneNumber();
    ///////////////////////////////////////////
    $qty = $_POST['OptionsItems'];
    //$Result = array();
    $i=0;
    $ct=0;
    $index = array();
    $Amounts = array();
    foreach($qty as $value)
    {
        if($value!="")
        {
            $Amounts[$ct] = $value;
            $index[$ct] = ($i+1) ;
            $ct++;
        }
        $i++;
    }
   /* if(isset($_Result['Id']))
    {
    $roman = $Result['Id'] ;
    }*/
   // $roman = $_POST['donmethod'];

    $DonMethod = 8;
    $donorid = $_SESSION['USERID'];

    include 'DonationModel.php';
        for($i=0;$i<$ct;$i++)
        {
            
            if($Amounts[$i] > 0)
            {
                $Donation = new Donations();
                $Donation->AddDonation($email,$Amounts[$i],$phonenumber,$index[$i],$DonMethod,$donorid);
            }
            else
            {
                echo "Amount can't be a negative number!!";
            }
        }
      //  echo $_POST['cardnumber'];
      /*  if(isset($_POST['cardnumber']))
        {
            $DmoId=1;
            $CN=$_POST['cardnumber'];
            $date=$_POST['dob'];
            $sec=$_POST['sec'];
            $pay1 = new Donations();
            $pay1-> AddPaymentVisa($DmoId,$CN,$date,$sec,$DonId);
        }
        if(isset($_POST['Phonenumber']))
        {
            $PhoneN=$_POST['Phonenumber'];
            $amount=$_POST['Amount'];
            $pay1 = new Donations();
            $pay1-> AddPaymentVodafone($PhoneN,$amount);
        }*/
        //$reg = "insert into receipt (Email,PhoneNumber,items,amount) values ('$email','$phonenumber','$DonateType','$amount')";
        //mysqli_query($conn,$reg);
    
    
    
?>