<?php 

    include 'Connect.php';

    date_default_timezone_set('Asia/Kolkata');

    $Email = $_SESSION("Email")
    $Name = $_POST['exampleInputName1'];
    $Reason = $_POST['exampleFormControlTextarea1'];
    $Userid = $_POST['exampleFormControlSelect1'];
    $date = date("d/m/Y");
    $Time = date("h:i:se");

    $sql = "INSERT INTO visit (NAME,REASON,USERID,STATUS,TIME,DATE,NOTE) VALUES ('$Name','$Reason','$Userid','Waiting','$Time','$date','')";

    if(!mysqli_query($con,$sql))    
    {
        echo "VISITOR IS NOT INSERTED";
    }
    else
    {
        echo "VISITOR IS INSERTED";
        mail("$Email","NEW VISITOR","There is New Visitor at your doorstep.");
    }
    header("refresh:2; url=watchman.php");

?>