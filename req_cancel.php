<?php

if(isset($_GET['id3']))
{
    $id=$_GET['id3'];
    $id2=$_COOKIE['id'];

$con=mysqli_connect("localhost","root","","social_book");
$q2=mysqli_query($con,"delete from friend_data where my_id=$id and friend_id=$id2 or my_id=$id2 and friend_id=$id ");

if($q2)
{
    header("location:friend_data.php");
}

}


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $id2=$_COOKIE['id'];

$con=mysqli_connect("localhost","root","","social_book");
$q2=mysqli_query($con,"delete from request_send where to_id=$id and sender_id=$id2");

if($q2)
{
    header("location:friend_data.php");
}

}
if(isset($_GET['id2']))
{
    $id=$_GET['id2'];
    $id2=$_COOKIE['id'];

$con=mysqli_connect("localhost","root","","social_book");
$q2=mysqli_query($con,"delete from request_send where to_id=$id2 and sender_id=$id");

if($q2)
{
    header("location:friend_data.php");
}

}
?>