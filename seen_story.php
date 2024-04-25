<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Popup</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f1f1f1;
    }
    
    .popupstory {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        cursor: pointer;
    }
    
    .popupstory img {
        display: block;
        margin: auto;
        max-width: 90%;
        max-height: 90%;
    }
    .storyimg2
    {
      border-radius: 200px;
      height: 180px;
      width: 170px;

    }
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from story_data");

$c_id=$_COOKIE['id'];
$qq=mysqli_query($con,"select * from user_data where u_id=$c_id");
$rr=mysqli_fetch_assoc($qq);
$q=mysqli_query($con,"select * from friend_data");
$frnd1_arr=array();
$my_arr=array();
$i2=0;
while($row=mysqli_fetch_assoc($q))
{
   global $frnd1_arr;
   global $my_arr;
   $my_arr[$i2]=$row['my_id'];


  
   $frnd1_arr[$i2]=$row['friend_id'];
   $i2=$i2+1;
}
if(mysqli_num_rows($query)>0)
{
while($r1=mysqli_fetch_assoc($query))
{
  $id=$r1['sender'];
   if(in_array($id,$frnd1_arr) || in_array($id,$my_arr) and in_array($c_id,$frnd1_arr) || in_array($c_id,$my_arr) )
   {
    $img=$r1['path'];
   echo" <img src='uploads/$img' alt='Image' class='storyimg2' id='myImage'>";
      
   }
   else
   {
    $img=$rr['u_pro_img'];
    echo" <img src='uploads/$img' alt='Image' class='storyimg2' id='myImage'>";

   }
  }
}
else
{
    $img=$rr['u_pro_img'];
    echo" <img src='uploads/$img' alt='Image' class='storyimg2' id='myImage'>";

}



?>


<div class="popupstory" id="popup">
    <img src="" alt="Popup Image" id="popupImg">
</div>

<script>
    // Get the image element and popup element
    var img = document.getElementById('myImage');
    var popup = document.getElementById('popup');
    var popupImg = document.getElementById('popupImg');

    // When the image is clicked, show the popup with the clicked image
    img.onclick = function() {
        popup.style.display = 'block';
        popupImg.src = this.src;
    }

    // When the popup is clicked, hide the popup
    popup.onclick = function() {
        popup.style.display = 'none';
    }
</script>

</body>
</html>
