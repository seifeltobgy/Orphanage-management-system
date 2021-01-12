<?php

/////////////
$link = mysqli_connect("127.0.0.1" , "root" , "" , "orphanage");
// check connection
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}

    $Id=mysqli_real_escape_string($link,$_POST['Id']);
    $FullName=mysqli_real_escape_string($link,$_POST['FullName']);
    $dob=mysqli_real_escape_string($link,$_POST['dob']);
    $Gender=mysqli_real_escape_string($link,$_POST['Gender']);
    $sql ="INSERT INTO `orphans`(`Id`, `FullName`, `DOB`, `Gender`) VALUES ('$Id','$FullName','$dob','$Gender')";
   // ('$Id','$name','$username',' $NationalID','$password')";
    if(mysqli_query($link,$sql)){
        echo"Records added successfully";
        header("Refresh:1;url=ListOrphans.php");
    }else{
        echo"Error : Could not able to execute $sql." . 
        mysqli_error($link);
       header("Refresh:1;url=AddOrphan.html");

}


?>
