<?php 
    session_start();
    include 'Connect.php';

    $Time = $_POST['time'];
    $Date = $_POST['date'];
    $Permit = $_POST['exampleFormControlSelect1'];
    $Note = $_POST['exampleFormControlTextarea1'];
   
    $sql = "Update visit Set STATUS = '$Permit', NOTE = '$Note' Where TIME = '$Time' AND DATE ='$Date' ";

    if(!mysqli_query($con,$sql))    
    {
        echo "Your Permition and Note is not Submit";
    }
    else
    {
        echo "Your Permition and Note is Submit";
    }

    header("refresh:2; url=userlist.php");

?>