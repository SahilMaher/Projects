<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];


$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"delete from req_data where frnd_id=$id");
if($query)
{
    header("location:friend_data.php");
}
}
if(isset($_GET['id2']))
{
    $id=$_COOKIE['id'];


$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"delete from req_data where req_id=$id");
if($query)
{
    header("location:friend_data.php");
}

}
?>