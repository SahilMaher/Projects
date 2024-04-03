<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
   
     $reqid=$_COOKIE['id'];
    
    $con=mysqli_connect("localhost","root","","social_book");
    $query=mysqli_query($con,"insert into req_data(req_id,frnd_id) values($reqid,$id)");
    if($query)
    {
        header("location:friend_data.php");
    }
    else{
        echo"Query not working";
    }
    

}
else
{
    echo"Data Not Found";
}
?>