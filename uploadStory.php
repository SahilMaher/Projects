<?php
//for story image
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

if(isset($_POST['VAdd']))
{
    echo"k";
    if(isset($_POST['video'])==" ")
    {
        // echo"<script>alert('Video Not Find')</script>";
        // echo$_POST['video'];
        echo"f";
    }
    else{
    // $img=$_POST['video'];
    // echo $img;
    echo"l";
    }
}
?>
<?php
//for image post
if(isset($_POST['Add']))
{

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./uploads/".$filename;
    move_uploaded_file($tempname, $folder);
    $id=$_COOKIE['id'];
    $det=$_POST['detail'];
    $con=mysqli_connect("localhost","root","","social_book");
    $query=mysqli_query($con,"insert into post_data(post_id,post_detail,post_path,post_type) values($id,'$det','$filename','image')");
  
    if($query)
    {
        
        header('location:home.php');
    }
   
    
}
?>
