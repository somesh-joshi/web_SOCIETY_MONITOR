<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
       h4{
        text-align: center;
        color: #000;
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
        color:  #4BB543;
      }

      </style>
      <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-messaging.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <link href="firebase-messaging-sw.js">
<link rel="manifest" href="manifest.json">
    <title>Socity Monitor</title>
  </head>
  <body>
    <h1 class="color">Socity Monitor</h1>
    <div class="forms">
    <h4>Log In</h4>
    <form action="valid.php" method="Post">
      <div class="form-group">
        <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
      
        <input type="password" class="form-control" name="exampleInputPassword1" placeholder="Password" required>
      </div>
     
      <button type="submit" class="btn btn-success" >Submit</button>
    </form>
    <br>
    </div>
    <h5>Are you New here plz <a href="./logup.php">Log Up</a></h5>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>