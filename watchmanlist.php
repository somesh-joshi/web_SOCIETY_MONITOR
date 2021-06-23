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
      <div class="forms">
      <a class="btn btn-primary" href="./watchman.php" role="button">ADD VISITOR</a>
      <br>
      <br>
      <table class="table">
      <tr>
        <th>Visitor Name</th>
        <th>Reason</th>
        <th>Status</th>
        
      </tr>
      <?php
        session_start(); 
        include 'Connect.php';

        $sql="Select * From visit";

        $result=mysqli_query($con,$sql);

        while($res = mysqli_fetch_array($result)) {
          echo '<tr>';
            echo '<td>'.$res['NAME'].'</td>';
            echo '<td>'.$res['REASON'].'</td>';
            echo '<td>'.$res['STATUS'].'</td>';
          echo '</tr>';
        }

      ?>
       </table>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>