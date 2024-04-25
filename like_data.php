<?php
$id=$_GET['id'];
$uid=$_COOKIE['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from like_data where post_id=$id and user_id=$uid ");
if(mysqli_num_rows($query)>0)
{
    $q=mysqli_query($con,"delete from like_data where post_id=$id and user_id=$uid ");
    header("location:home.php"); 
}
else
{
    $q1=mysqli_query($con,"insert into like_data(like_count,user_id,post_id) values(1,$uid,$id) ");
    
    header("location:home.php"); 

}
?>