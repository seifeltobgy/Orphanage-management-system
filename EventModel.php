<?php
   
   class Events
   {
       private $Eventid;
       private $Title;
       private $Date;
       private $content;
       private $Queue;
       private $Fees;
       private $Images;
       private $CreatedAt;
       private $UpdatedAt;
       private $IsDeleted;
       
       ///////SETS/////////
       public function setEvent_id($ID)
       {
           $this->Eventid=$ID;
       }
       public function setTitle($title)
       {
           $this->Title=$title;
       }
       public function setDate($date)
       {
           $this->Date=$date;
       }
       public function setContent($content)
       {
           $this->content=$content;
       }
       public function setQueue($Q)
       {
           $this->Queue=$Q;
       }
       public function setFees($fees)
       {
           $this->Fees=$fees;
       }
       public function setImages($img)
       {
           $this->Images=$img;
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
       
       ///////GETS/////////
       public function getEvent_id()
       {
           return $this->Eventid;
       }
       public function getTitle()
       {
           return $this->Title;
       }
       public function getDate()
       {
           return $this->Date;
       }
       public function getContent()
       {
           return $this->content;
       }
       public function getQueue()
       {
           return $this->Queue;
       }
       public function getFees()
       {
           return $this->Fees;
       }
       public function getImages()
       {
           return $this->Images;
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
       
       public function __construct($id)
       {
           if($id!=" ")
           {
               include_once 'singleton.php';
               $Db= DbConnection::getInstance();
               $conn = $Db->getConnection();
               $sql="select * from event where id=$id";
               $EDataSet=mysqli_query($conn,$sql) or die(mysqli_error($conn));
               if($row=mysqli_fetch_array($EDataSet))
               {
                   $this->Eventid=$id;
                   $this->Title=$row['Title'];
                   $this->Date=$row['Date'];
                   $this->Content=$row['content'];       
                   $this->Queue=$row['Queue'];
                   $this->Fees=$row['Fees'];
                   $this->Images=$row['Images'];
                  // $this->CreatedAt=$row['CreatedAt'];
                   //$this->UpdatedAt=$row['UpdatedAt'];
                   //$this->IsDeleted=$row['IsDeleted'];
               }
           }            
       }
       public function SelectAllEvInDB()
       {
           include_once 'singleton.php';
           $Db= DbConnection::getInstance();
           $conn = $Db->getConnection();
           $sql="SELECT * FROM event ORDER BY id";
           $EventDataSet = $conn->query($sql);
            $i=0;
           $Result = array();
           while ($row= mysqli_fetch_array($EventDataSet))
           {
               $MyObj=new Events($row['id']);
               $Result[$i]=$MyObj;
               $i++;   
           }
           return $Result;
       }
       public function MinimizeEv($Result,$x)
       {
           include_once 'singleton.php';
           $Db= DbConnection::getInstance();
           $conn = $Db->getConnection();
           $sql = "UPDATE `event` SET `Queue`=`Queue`-1 WHERE id ='$x' ";
           $EventDataSet = $conn->query($sql);
           /*$i=0;
           $v;
           while(!empty($Result[$i]))
           {
               if($Result[$i]->getEvent_id()==$x)
               {
                  // $n=new Events();
                   $v=SelectAllEvInDB();
                   break;
               }
               $i++;
           }
           return $v;*/
       }
       public function AddEvents($title,$date,$content,$queue,$fees)
       {
           include_once 'singleton.php';
           $Db= DbConnection::getInstance();
           $conn = $Db->getConnection();
           $img = "sport.jpg";
           $reg = "insert into event (Title,Date,Queue,Fees,Images) values ('$title','$date','$queue','$fees','$img')";
           mysqli_query($conn,$reg);
           echo "Yes!";
           header("Refresh:1;url=AddEvent.php");
       }
   }

        //////FunctionViewEvents///////////
     /*
        public function ViewEvents()
        {
            include 'singleton.php';
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $sql="SELECT * FROM `event` ORDER BY id";
            $StudentDataSet = $conn->query($sql);
            
            echo "<table border=3 align=center Height=200 Width=fit >
            <tr bgcolor=white height=40 >
            
            <th>Id</th>
            <th>Title</th>
            <th>Date </th> 
            <th>content</th>
            <th>Queue</th>
            <th>fees</th>
            <th> </th>
            " ;
            
            while ($Result= mysqli_fetch_array($StudentDataSet))
            {
                
                
                echo"<tr bgcolor=white ><td>".$Result[0]."</td><td>".$Result[1]."</td><td>".$Result[2]."</td><td>".$Result[3]."</td><td>".$Result[4]."</td><td>".$Result[5]."</td><td>"."<h><a href='UpdateEnroll.php?rn=$Result[id]&fe=$Result[Fees]&en=$Result[Title]'> Enroll</h></td></tr>";
                
            }
        }
        */
    
?>