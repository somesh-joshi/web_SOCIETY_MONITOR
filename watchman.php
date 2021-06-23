<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body{
        background-color:#e3e3e3 ;
        font-family: "Times New Roman", Times, serif;
      }
       .color {
        text-align: center;
        background-color: #4BB543;
        margin-bottom: 5%;

      }
      h1 {
        text-align: center;
        color: #fff;
          font-family: "Times New Roman", Times, serif;
          
      }
      form {
        margin-left: 2%;
        margin-right: 2%;
      }
      .forms{
        margin-left: 20%;
        margin-right: 20%;
        box-shadow: 0px 5px 5px grey;
        padding: 15px;
        background-color: #fff;
     }
      h5 {
        text-align: center;
        padding-top: 2%;
      }
      .btn{
        
        display: block;
        margin-left: auto;
        margin-right: auto;
        cursor: pointer;
        padding-right: 25px;
        padding-left: 25px;
    }
     
      /* camera access button*/
    #video {
        border: 1px solid black;
        width: 180px;
        height: 180px;
    }

    #photo {
        border: 1px solid black;
        width: 180px;
        height: 180px;
    }

    #canvas {
        display: none;
    }

    .camera {
        width: 180px;
        display: inline-block;
    }

    .output {
        width: 200px;
        display: inline-block;
    }

    #startbutton {
        font-family: "Times New Roman", Times, serif;
        display: block;
        position: relative;
        margin-left: auto;
        margin-right: auto;
        bottom: 36px;
        padding: 5px;
        /*background-color: green;
        border: 1px solid rgba(255, 255, 255, 0.7);
        font-size: 14px;
        color: rgba(255, 255, 255, 1.0);*/
        cursor: pointer;
    }

    .contentarea {
        font-size: 16px;
        font-family: Arial;
        text-align: center;
    }
      </style>
      <!-- The core Firebase JS SDK is always required and must be listed first -->
    <title>Socity Monitor</title>
  </head>
  <body>
  <!--heading-->
    <h1 class="color">Socity Monitor</h1>
     <div class="forms">
      <h1></h1>
    <!-- Main div code-->
  
    <!--user form-->
    <form action="visit.php" method="Post">
    
    <br>
        <div class="form-group">
          
          <input type="text" class="form-control" name="exampleInputName1" placeholder="Name of Visitor" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" placeholder="Reason" name="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          
          <select class="form-control" name="exampleFormControlSelect1">
          <?php
                include 'Connect.php';

                $selectquery = "Select * From login where ROLE = 'User'";
                $query = mysqli_query($con,$selectquery);
                while($res = mysqli_fetch_array($query)) {
                echo '<option value='.$res['EMAIL'].'>'.$res['NAME'].'</option>'; 
                }
          ?>
          </select>
        </div>
       <!--button-->
        <div class="form-group">
          <button class="btn btn-success">Send</button>
          <br>
          <a class="btn btn-primary" href="./watchmanlist.php" role="button"> Cancle</a>
        </div>

   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>