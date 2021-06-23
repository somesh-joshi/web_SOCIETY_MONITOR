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
      h4 {
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
      <!-- The core Firebase JS SDK is always required and must be listed first -->
    <title>Socity Monitor</title>
  </head>
  <body>
    <h1 class="color">Socity Monitor</h1>
    <div class="forms">
    <h4>Log UP</h4>
    <form action="Registor.inc.php" method="Post">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" name="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="exampleInputPassword1" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" name="exampleFormControlSelect1">
          <option value="Watchman">Watchman</option>
          <option value="User" selected>User</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <br>
    </div>
    <h5>Are you from here plz <a href="./index.php">Log In</a></h5>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>