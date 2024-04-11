<?php
if(isset($_GET['id']) )
{
$accid=$_GET['id'];
$id=$_COOKIE['id'];
echo$accid;
echo $id;

$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"insert into friend_data(my_id,friend_id) values($id,$accid)");
$q2=mysqli_query($con,"delete from request_send where to_id=$id and sender_id=$accid");
if($query)
{
    header("location:friend_data.php");
}

    
}
else{
 
}
?>