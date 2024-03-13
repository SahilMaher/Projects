<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            font-size: large;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfileEdit</title>
</head>

<body>
    <center>
        <form action="#" method="post" enctype="multipart/form-data">

            <h2>Edit Information</h2>
            <div style="border: 2px solid black;border-radius:20px; width:550px; height:730px;">
                <div>
                    <h5>Hello Welcome </h5>
                    <?php
                    $id = $_COOKIE['id'];
                    $con = mysqli_connect("localhost", "root", "", "social_book");
                    $query = mysqli_query($con, "select u_name,u_pro_img,u_bio,u_phone,u_email,u_birthdate from user_data where u_id='$id' ");
                    $res = mysqli_fetch_array($query);
                    echo "<h3>$res[0]</h3>";


                    ?>
                </div>
                <div class="p_img">
                    <img src="uploads/<?php echo $res[1]; ?>" alt="Profile" width="180px" />
                </div>
                <div>
                    Edit:-
                    <input type="file" accept="image/png, image/jpeg" name="uploadfile" id="fileToUpload"  />
                </div>
                <div style="margin-top:10px ;">
                    Name:-<input type="text"  value="<?php echo $res[0]; ?>" name="name" /><br><br>
                    BirthDate(<?php echo $res[5]; ?> ):-<input type="date" name="bdate"><br><br>
                    Email:-<input type="text" value="<?php echo $res[4]; ?>" name="mail" ><br><br>
                    Number:-<input type="number" value="<?php echo $res[3]; ?>" name="phone" ><br><br>
                </div>
                <br>
                Add Bio:-<br>
                <input type="textarea" name="bio" value="<?php echo $res[2]; ?>" style="margin-top:5px; padding:30px; border-radius:30px; font-size:20px;width:300px;" /><br>
                <input type="submit" value="Submit" name="upl" style=" padding:10px;background-color:blue;width:150px;font-size:20px;border-radius:20px;color:aliceblue; margin-top:8px; " />

            </div>
    </center>
</body>

</html>
<?php
error_reporting(0);
if (isset($_POST['upl'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    $id = $_COOKIE['id'];
    $bio = $_POST['bio'];
    $num = $_POST['phone'];
    $bd = $_POST['bdate'];
    $ml = $_POST['mail'];
    $name = $_POST['name'];
 

    $con = mysqli_connect("localhost", "root", "", "social_book");
    $query = mysqli_query($con, "update user_data set u_pro_img='$filename',u_bio='$bio',u_birthdate='$bd' ,
    u_phone='$num',u_email='$ml',u_name='$name'

    
    where u_id='$id' ");







    if (move_uploaded_file($tempname, $folder)) {
        header("location:home.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}

?>
<a href="home.php"><input type="button" style="float: right;margin-top:20px; padding:10px;background-color:chocolate;width:150px;font-size:20px;border-radius:20px;" value="Skip" /></a>