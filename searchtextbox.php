<html>
<head>
<title>Search for orphans by Id</title>
<style>
body{
    background-color: whitesmoke;
}
input{
    width:40%;
    height:5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px ;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px ;
}
</style>

</head>
<body>
    <center>
    <h1> Search for orphans by Id
    </h1>
<form action=" " method="POST">
  <input type="text" name="Id" placeholder="Enter Id to search"/> <br/>
  <input type="submit" name="search" value="Search">

</form>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'orphanage');

if(isset($_POST['search']))
{
    $Id = $_POST['Id'];
 
    $query="SELECT * FROM `orphans` where Id='$Id'";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))
    {
       ?>
    <form action="" method="POST">
            <input type="hidden" name="Id" value="<?php echo $row['Id']?>" />
            <input type="text" name="FullName" value="<?php echo $row['FullName']?>" />
            <input type="text" name="DOB" value="<?php echo $row['DOB']?>"/>
            <input type="text" name="Gender" value="<?php echo $row['Gender']?>"/>
            </form>
        <?php

    }
   // if(!$query_run)
   // {

     //   echo "Wrong id enterd"; 
       // header("Refresh:1;url=searchtextbox.php");
    //}
}

        ?>
    </center>
</body>
</html>