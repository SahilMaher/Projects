<?php
setcookie("user",false);
setcookie("id",false);
if(isset($_COOKIE['user']))
{
    header("location:login.php");
}
else
{
  header("location:login.php");
}


?>