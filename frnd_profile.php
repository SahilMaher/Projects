
<!-- <-Header-> -->
<?php
include("Header.html")
?>
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select u_pro_img,u_name,u_birthdate,u_email,u_bio from user_data where u_id='$id'");
$res=mysqli_fetch_array($query);


?>
<style>
    div{
        font-size: larger;
    }
    </style>
<center>
    <div>
       <a href="Profile_edit.php"> <img src="uploads/<?php echo $res[0]; ?>" width="150px" height="170px" alt="ProfilePhoto" style="border-radius: 360px; margin-top:20px;" /></a>

    </div>
    <div>
        <h2><?php echo$res[1]; ?></h2>
        <p><h4>BirthDate:-</h4><?php echo$res[2]; ?></p>
        <p><h4>Email:-</h4><?php echo$res[3]; ?></p>
        <p><h4>Bio</h4><br><?php echo$res[4]; ?></p>

    </div>
   


</center>