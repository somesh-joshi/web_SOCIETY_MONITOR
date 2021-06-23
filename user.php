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
        background-color: #4bb543;
        margin-bottom: 5%;

      }
      h1 {
        text-align: center;
        color: #fff;
          font-family: "Times New Roman", Times, serif;   
      }

      .black{
        color: black;
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
        padding-left: 20px;
        padding-right: 20px;
        
         }
      input {
        color: #fff;
        padding-left: 20px;
        padding-right: 20px;
      }

      table, td, th {  
        border: 1px solid #ddd;
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        padding: 15px;
      }
      </style>
  
      <title>Socity Monitor</title>
      </head>
      <body>
      <!--heading-->
      <h1 class="color">Socity Monitor</h1>
      <h5>Are you New here plz <a href="./userlist.php">userlist</a></h5>
      <div class="forms">
      <!--user form-->
      <form action="permit.php" method="Post">
        <div class="form-group">
        <?php
                session_start();
                include 'Connect.php';
                $Email =  $_SESSION["Email"];
                $selectquery = "Select * From visit where USERID = '$Email' AND STATUS = 'Waiting'";
                $query = mysqli_query($con,$selectquery);
                while($res = mysqli_fetch_assoc($query)) {
                echo '<input type="text" class="form-control" value="'.$res['NAME'].'" required readonly>';
                }
                
          ?>
        </div>
        <div class="form-group">
        <?php
                include 'Connect.php';
                $Email =  $_SESSION["Email"];
                $selectquery = "Select * From visit where USERID = '$Email' AND STATUS = 'Waiting'";
                $query = mysqli_query($con,$selectquery);
                while($res = mysqli_fetch_assoc($query)) {
                echo '<input type="text" class="form-control" value="'.$res['DATE'].'" required readonly name="date">';
                }
                
          ?>
        </div>
        <div class="form-group">
        <?php
                include 'Connect.php';
                $Email =  $_SESSION["Email"];
                $selectquery = "Select * From visit where USERID = '$Email' AND STATUS = 'Waiting'";
                $query = mysqli_query($con,$selectquery);
                while($res = mysqli_fetch_assoc($query)) {
                echo '<input type="text" class="form-control" value="'.$res['TIME'].'" required readonly name="time">';
                }
                
          ?>
        </div>
        <div class="form-group">
        <?php
                include 'Connect.php';
                $Email =  $_SESSION["Email"];
                $selectquery = "Select * From visit where USERID = '$Email' AND STATUS = 'Waiting'";
                $query = mysqli_query($con,$selectquery);
                if($res = mysqli_fetch_assoc($query)) {
                echo '<textarea class="form-control" placeholder="Reason" rows="3" readonly>'.$res['REASON'].'</textarea>';
                echo '
                      </div>
                      <!--button-->
                      <div class="form-group">
                      <label for="exampleFormControlSelect1">Give permation</label>
                      <select class="form-control" name="exampleFormControlSelect1">
                        <option value="Denay">Denay</option>
                        <option value="Allow">Allow</option>
                      </select>
                    </div>
                    <br>
                    <textarea class="form-control" placeholder="Note or Reason of denied" name="exampleFormControlTextarea1" rows="3"></textarea>
                    <br>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-success">Send</button>
                      </div>
                      ';
                  }else{
                    echo '<h1 class="black">NO Request here!!!</h1>';
                    header("refresh:2; url=userlist.php");
                  }
          ?>
          </form>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>