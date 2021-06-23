<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
  echo "Not Connected";
}

if(!mysqli_select_db($con,'socity'))
{
 echo " DB Not Selected ";
}
 ?>