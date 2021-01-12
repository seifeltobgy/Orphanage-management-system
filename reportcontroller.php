<?php

    include 'DonationsReport.php';
    
    $Report = new manager();

    $Type = $_POST["Report"];
    
    if($Type == "ReportDonation")
    {
        if(isset($_POST["DonationOption"]))
        {
            $Option = $_POST["DonationOption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    else if ($Type == "ReportEvent")
    {
        //EventOption
        if(isset($_POST["EventOption"]))
        {
            $Option = $_POST["EventOption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    else if($Type == "ReportEnroll")
    {
        if(isset($_POST["EnrollOption"]))
        {
            $Option = $_POST["EnrollOption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    elseif($Type == "ReportOrphan")
    {
        if(isset($_POST["OrphanOption"]))
        {
            $Option = $_POST["OrphanOption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    elseif($Type== "ReportDmov")
    {
        if(isset($_POST["Dmovoption"]))
        {
            $Option = $_POST["Dmovoption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    else
    {
      $Option = null;
    }
    
?>