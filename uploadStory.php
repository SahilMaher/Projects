<?php
if(isset($_POST['iadd'] ))
{
 

       
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./uploads/".$filename;
        move_uploaded_file($tempname, $folder);
        $id=$_COOKIE['id'];
        $con=mysqli_connect("localhost","root","","social_book");
        $query=mysqli_query($con,"insert into story_data(path,type,sender) values('$filename','image',$id)");
        setcookie($id, $id,   time() + (24 * 60 * 60));
        if($query)
        {
            
            header('location:home.php');
        }
    }


?>
<?php

if(isset($_GET['vadd']))
{
    if(isset($_GET['video'])==" ")
    {
        echo"<script>alert('Video Not Find')</script>";
        echo$_GET['video'];
    }
    else{
    $img=$_GET['video'];
    echo $img;
    }
}


?>