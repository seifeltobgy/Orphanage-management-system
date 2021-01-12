<?php
    include_once 'HeaderAdmin.html';
    
    interface Report
    {
        public function GenerateReport();
    }

    abstract class ReportDecorater implements Report
    {
        private $report;

        public function __construct(Report $report)
        {
            $this->report = $report;
        }

        public function SetReport($report)
        {
            $this->report = $report;
        }

        public function GetReport()
        {
            return $this->report;
        }

        abstract public function GenerateReport();
    }

    class Manager
    {
        public function GenerateReport($Type,$SelectedOption)
        {
            if($Type == "ReportDonation")
            {
                    $report = new DonationsReport();
                    $reportOption = new DonationsReport();
                    if($SelectedOption == "DonationOption")
                    {
                        $reportOption = new DonationTypes($report);
                    }
                    $reportOption->GenerateReport();
            }
           //EventsReport
            if($Type == "ReportEvent")
            {
                 $report = new EventsReport();
                  $reportOption = new EventsReport();
                 if($SelectedOption == "EventOption")
            {
              $reportOption = new DonationTypes($report);
            }
                $reportOption->GenerateReport();
            }
            //EnrollmentsReport
            if($Type == "ReportEnroll")
            {
                 $report = new EnrollmentsReport();
                  $reportOption = new EnrollmentsReport();
                 if($SelectedOption == "EnrollOption")
                 {
              $reportOption = new DonationTypes($report);
                 }
                $reportOption->GenerateReport();
            }

            if($Type == "ReportOrphan")
            {
                 $report = new OrphansReport();
                  $reportOption = new OrphansReport();
                 if($SelectedOption == "OrphanOption")
                 {
              $reportOption = new DonationTypes($report);
                 }
                $reportOption->GenerateReport();
            }
            
            if($Type == "ReportDmov")
            {
                 $report = new DmovReport();
                  $reportOption = new DmovReport();
                 if($SelectedOption == "DmovOption")
                 {
              $reportOption = new DonationTypes($report);
                 }
                $reportOption->GenerateReport();
            }
         }
    }

    class DonationTypes extends ReportDecorater
    {
        public function GenerateReport()
        {
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            
            $report = $this->GetReport();

            $report->GenerateReport();
          
            $sql = "SELECT type FROM donation";
          
            $query = mysqli_query($conn, $sql);
    
            echo '<table border="3" cellspacing="2" cellpadding="2"> 
              <tr>  
              <td> <font face="Arial">Type</font> </td>    
              </tr>';
    
            if ($query) 
            {
                while ($row = $query->fetch_assoc()) 
                {
                    $field2name = $row["type"];
            
                    echo '<tr>
                        <td>'.$field2name.'</td>  
                        </tr>';
                }
        
                /* free result set */
                $query->free();
            }
        }
    }

    class DonationsReport implements Report
    {
        public function GenerateReport()
        {
            include 'singleton.php';
           // session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
          
            $sql = "SELECT Donation_Id,amount,created_at FROM donations";
          
            $query = mysqli_query($conn, $sql);
    
            echo '<table border="3" cellspacing="2" cellpadding="2" align="center"> 
              <tr>  
              <td> <font face="Arial"><b>Donation ID</b></font> </td> 
              <td> <font face="Arial"><b>Amount</b></font> </td>   
              <td> <font face="Arial"><b>Date Of donation</b></font> </td>   
              </tr>';
    
            if ($query) 
            {
                while ($row = $query->fetch_assoc())
                {
                    $field2name = $row["Donation_Id"];
                    $field3name = $row["amount"];
                    $field4name = $row["created_at"];
                    echo '<tr>  
                        <td>'.$field2name.'</td> 
                        <td>'.$field3name.'</td>  
                        <td>'.$field4name.'</td>  
                        </tr>';
                }
                $query->free();
            }
        }
    }
    
      class EventsReport implements Report
    {
        public function GenerateReport()
        {
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
          
            $sql = "SELECT id,Title,Date,content,Queue,Fees FROM event";
        
            $query = mysqli_query($conn, $sql);
    
            echo '<table border="3" cellspacing="2" cellpadding="2"  align="center"> 
              <tr>  
              <td> <font face="Arial"><b>ID</b></font> </td> 
              <td> <font face="Arial">Title</font> </td>   
              <td> <font face="Arial">Date</font> </td>
                    <td> <font face="Arial">content</font> </td>
                       <td> <font face="Arial">Queue</font> </td>
                          <td> <font face="Arial">Fees</font> </td>
              </tr>';
    
            if ($query) 
            {
                while ($row = $query->fetch_assoc())
                {
                    $var1 = $row["id"];
                    $var2 = $row["Title"];
                    $var3 = $row["Date"];
                    $var4 = $row["content"];
                    $var5 = $row["Queue"];
                       $var6 = $row["Fees"];
                        echo '<tr>  
                        <td>'.$var1.'</td> 
                        <td>'.$var2.'</td>  
                        <td>'.$var3.'</td>  
                        <td>'.$var4.'</td>  
                        <td>'.$var5.'</td>
                        <td>'.$var6.'</td>
                        </tr>';
                }
                $query->free();
            }
        }
    }
    //////
    class DmovReport implements Report
    {
    public function GenerateReport()
    {
        include 'singleton.php';
       // session_start();
        $Db= DbConnection::getInstance();
        $conn = $Db->getConnection();
      
        $sql = "SELECT Id,DmoId,Value,DonationId FROM donationmethodoptionsvalue";
      
        $query = mysqli_query($conn, $sql);

        echo '<table border="3" cellspacing="2" cellpadding="2" align="center"> 
          <tr>  
          <td> <font face="Arial"><b>ID</b></font> </td> 
          <td> <font face="Arial"><b>Donationmethod option id</b></font> </td>   
          <td> <font face="Arial"><b>Value</b></font> </td> 
          <td> <font face="Arial"><b>DonationId</b></font> </td> 
          </tr>';

        if ($query) 
        {
            while ($row = $query->fetch_assoc())
            {
                $field2name = $row["Id"];
                $field3name = $row["DmoId"];
                $field4name = $row["Value"];
                $field5name = $row["DonationId"];
                echo '<tr>  
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td>  
                    <td>'.$field4name.'</td>
                    <td>'.$field5name.'</td>
                    </tr>';
            }
            $query->free();
        }
    }
}

    class EnrollmentsReport implements Report
    {
        public function GenerateReport()
        {
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
          
            $sql = "SELECT EnrollID,Userid,Fees,EventName FROM enrollments";
        	
            $query = mysqli_query($conn, $sql);
    
            echo '<table border="3" cellspacing="2" cellpadding="2"  align="center"> 
              <tr>  
              <td> <font face="Arial"><b>EnrollID</b></font> </td> 
              <td> <font face="Arial">Userid</font> </td>   
              <td> <font face="Arial">Fees</font> </td>
                    <td> <font face="Arial">EventName</font> </td>
                    
              </tr>';
    
            if ($query) 
            {
                while ($row = $query->fetch_assoc())
                {
                    $var1 = $row["EnrollID"];
                    $var2 = $row["Userid"];
                       $var6 = $row["Fees"];
                           $var3 = $row["EventName"];
                        echo '<tr>  
                        <td>'.$var1.'</td> 
                        <td>'.$var2.'</td>  
                                 <td>'.$var6.'</td>
                        <td>'.$var3.'</td>  
            
               
                        </tr>';
                }
                $query->free();
            }
        }
    }
    class OrphansReport implements Report
    {
        public function GenerateReport()
        {
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
           
            $sql = "SELECT * FROM orphans";
          
            $query = mysqli_query($conn, $sql);
            
            echo '<table border="3" cellspacing="5" cellpadding="5"   align="center" collapse> 
              <tr>  
              <td> <align="center"><font face="Arial">Orphan ID</font> </td> 
              <td> <align="center"><font face="Arial">Orphan Name</font> </td>
              <td> <align="center"><font face="Arial">Date of birth</font> </td> 
              <td> <align="center"><font face="Arial">Gender</font> </td> 
              </tr>';
    
            if ($query) 
            {
                while ($row = $query->fetch_assoc())
                {
                    $f2name = $row['Id'];
                    $f3name = $row['FullName'];
                    $f4name = $row['DOB'];
                    $f5name = $row['Gender'];
            
                    echo '<tr>  
                        <td>'.$f2name.'</td> 
                        <td>'.$f3name.'</td>
                        <td>'.$f4name.'</td>
                        <td>'.$f5name.'</td>
                        </tr>';
                }
                $query->free();
            }
        }
    }
?>
<style>
    td:nth-child(even) {
  background-color: #dddddd;
}
</style>