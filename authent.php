<?php
if(isset($_COOKIE['user']) && isset($_COOKIE['id']))
{
    header("location:Profile_edit.php");
}
else{
if(isset($_POST['u_submit']))
{
    
    $unm=$_POST['unm'];
    $pass=$_POST['password'];
   

    
    $con=mysqli_connect("localhost","root","","social_book");
    if($con==false)
    {
        echo"Connection Error";
    }
    $query=mysqli_query($con,"select u_username  , u_password,u_id  from user_data where u_username='$unm'  ");
    $res=mysqli_fetch_array($query);

    if($query)
    {
        if($unm == $res[0] && $pass==$res[1])
        {
            setcookie("user", "$unm",   time() + (10 * 365 * 24 * 60 * 60));
            setcookie("id", "$res[2]",   time() + (10 * 365 * 24 * 60 * 60));
               

            header("location:Profile_edit.php");
        }
        else
        {
           echo"Incorrect Password <a href='login.php'>Try Again</a>";
            
        }
       
    }
    else
    {
        echo"Query Erroe";
    }

}

else
{
    echo "Page Not Found";
}
}
?>