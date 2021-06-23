<?php 

    include 'Connect.php';

    $Name = $_POST['exampleInputName'];
    $Email = $_POST['exampleInputEmail1'];
    $Password = $_POST['exampleInputPassword1'];
    $Role = $_POST['exampleFormControlSelect1'];

    $sql = "INSERT INTO login (NAME,EMAIL,PASSWORD,ROLE) VALUES ('$Name','$Email','$Password','$Role')";

    if(!mysqli_query($con,$sql))    
    {
        echo "NOT INSERTED";
    }
    else
    {
        echo "INSERTED";
    }

    header("refresh:2; url=index.php");

?>
