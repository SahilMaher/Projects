<!-- <-Header-> -->
<?php
include("Header.html")
?>
<?php
$id=$_COOKIE['id'];
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
        <p>BirthDate:-<?php echo$res[2]; ?></p>
        <p>Email:-<?php echo$res[3]; ?></p>
        <p>Bio<br><?php echo$res[4]; ?></p>

    </div>
   <a href="Profile_edit.php"> <input type="button" value="Edit"  style=" padding:10px;background-color:cadetblue;width:150px;font-size:20px;border-radius:20px;color:aliceblue; margin-top:8px; "></a>


</center>