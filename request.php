<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
   
     $reqid=$_COOKIE['id'];
    
    $con=mysqli_connect("localhost","root","","social_book");
   
  

    $q2=mysqli_query($con,"insert into request_send(to_id,sender_id) values($id,$reqid)");
    if($q2)
    {
        header("location:friend_data.php");
    }   
}
    
   ?>