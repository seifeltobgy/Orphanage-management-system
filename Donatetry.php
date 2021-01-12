<?php
    session_start();
    /////////////GETEMAIL///////////
    include 'Emails.php';
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
        //$reg = "insert into receipt (Email,PhoneNumber,items,amount) values ('$email','$phonenumber','$DonateType','$amount')";
        //mysqli_query($conn,$reg);
    
    
    
?>