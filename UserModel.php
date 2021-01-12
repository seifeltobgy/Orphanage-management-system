<?php
    class users
    {
        private $username;
        private $pass;
        private $fullname;
        private $nat_id;
        
        //////SETS//////
        public function setUsername($user)
        {
            $this->username = $user;
        }
        public function setPassword($password)
        {
            $this->pass = $password;
        }
        public function setFullname($FullName)
        {
            $this->fullname = $FullName;
        }
        public function setNationalId($NID)
        {
            $this->nat_id = $NID;
        }
        
        //////GETS//////
        public function getUsername()
        {
            return $this->username;
        }
        public function getPassword()
        {
            return $this->pass;
        }
        public function getFullname()
        {
            return $this->fullname;
        }
        public function getNationalId()
        {
            return $this->nat_id;
        }
        
        //////Functions//////
        public function Login($user,$pass,$usertype)
        {
            //include 'UserModel.php';
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
           // $dbname = $Db->getdb_name();
            $s = "select * from registration where Username = '$user' && Password = '$pass' && UserType = '$usertype'";
            $Command = "SELECT";
            $Type2 = "admin";
            
            $Login = "Login";
            
            $result = mysqli_query($conn,$s);
            
            
            while($row = mysqli_fetch_array($result))
            {
                if($row['Username'] == $user)
                {
                    $_SESSION['UserName']=$user;
                    $_SESSION['USERID'] = $row['Id'];
                    $id = $_SESSION['USERID'];
                    break;
                }
            }
            
            $num = mysqli_num_rows($result);
            
            if($num == 1)
            {
             //   $reg = "insert into changelog (DatabaseName,EventType,LoginName,SqlCommand) values ('$dbname','$Login','$id','$Command')";
               // mysqli_query($conn,$reg);
                header('location:Visitor-index.html');
            }
            else
            {
                $s1 = "select * from registration where Username = '$user' && Password = '$pass' && UserType = '$Type2'";
                $result1 = mysqli_query($conn,$s1);
                $num1 = mysqli_num_rows($result1);
                
                if($num1 == 1)
                {
                    //$reg = "insert into changelog (DatabaseName,EventType,LoginName,SqlCommand) values ('$dbname','$Login','$id','$Command')";
                    //mysqli_query($conn,$reg);
                    header('location:Admin-index.php');
                }
                else
                {
                    header('location:Login.html');
                }
            }
        }
        public function Registration($username,$pass,$fullname,$nat_id,$usertype,$pno,$email)
        {
            include 'singleton.php';
            session_start();
            $Db= DbConnection::getInstance();
            $conn = $Db->getConnection();
            $s = "select * from registration where Username = '$username'";

            $result = mysqli_query($conn,$s);
            
            $num = mysqli_num_rows($result);
            
            if($num == 1)
            {
                echo"Username Already Taken";
            }
            else
            {
                $reg = "insert into registration (Username,Password,Name,National_Id,UserType) values ('$username','$pass','$fullname','$nat_id','$usertype')";
                mysqli_query($conn,$reg);
                
                $sel = "select * from registration where Username ='$username'";
                $result1 = mysqli_query($conn,$sel);
                while($row = mysqli_fetch_array($result1))
                {
                    if($username == $row['Username'])
                    {
                        $id = $row['Id'];
                        break;
                    }
                }
                $reg2 = "insert into emails (UserId,Email) values ('$id','$email')";
                mysqli_query($conn,$reg2);
                $reg3 = "insert into phonenumber (UserId,Phone_No) values ('$id','$pno')";
                mysqli_query($conn,$reg3);
                header('location:Login.html');
            }
        }
    }
?>