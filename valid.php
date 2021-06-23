<?php 
    session_start();

    include 'Connect.php';

    $uname=$_POST['exampleInputEmail1'];
    $password=$_POST['exampleInputPassword1'];
    
    $sql="Select * From login where EMAIL='$uname' AND PASSWORD='$password'";
    
    $result=mysqli_query($con,$sql);
    $print=mysqli_fetch_assoc($result);

    $_SESSION["Email"] = $print["EMAIL"];

    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully login";
        if($print["ROLE"] === "User") {
            header("refresh:2; url=user.php");
        }
        if($print["ROLE"] === "Watchman") {
            header("refresh:2; url=watchmanlist.php");
        }
    }
    else{
        echo " You Have Entered Incorrect Password";
        header("refresh:2; url=index.php");
        exit();
    }
    
?>