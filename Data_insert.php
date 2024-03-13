<?php
if(isset($_POST['u_submit']))
{
$email=$_POST['email'];
$phone=$_POST['phone'];
$name=$_POST['name'];
$unm=$_POST['unm'];
strtolower($unm);
$bdate=$_POST['bdt'];
$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","","Social_Book");
if($con ==false)
{
    echo"Connection Error";
}
$query=mysqli_query($con,"insert into user_data(u_email,u_phone,u_name,u_username,u_birthdate,u_password,u_pro_img,u_bio) 
values('$email',$phone,'$name','$unm','$bdate','$pass','d_user.avif','Hello There') ");
if($query)
{
    header("location:login.php");
}
else
{
    echo"query is not working";
}
}
else
{
    echo"Page Note Found";
}
?>