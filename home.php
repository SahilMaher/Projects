<!-- Header Section -->
<?php
 include("Header.html");
?>
<!-- fething user image  -->
<?php
        $id=$_COOKIE['id'];

        $con=mysqli_connect("localhost","root","","social_book");
        $query=mysqli_query($con,"select u_pro_img from user_data where u_id='$id' ");
        $res=mysqli_fetch_array($query);
       
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .h_story
        {
           


          

            overflow: hidden; 

float: right;
display: inline-flex;
  border: solid 5px black;
  border-radius: 5px;
  height: 200px;
  width: 99%;

        } 
        .storydiv 
        {
            border: 2px solid red;
            width: 130px;
            margin-left: 5px;
            margin-top: 5px;
            height: 170px;
            border-radius: 200px;

}

       .imgs {
  overflow-x: hidden;  

 
  border: solid 5px black;
  border-radius: 5px;
  height: 675px;
  width: 99%;
}
.story_img
{
          width: 130px;
          border-radius: 200px;
            height: 170px;
}


       



        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
     
    <div class="imgs">
    <div class="h_story">
        <div class="storydiv">
            
        
        
        </div>   
        
        </div>
        <hr>
<div class="media">
    <?php include("add_media.php");?>
</div>




  <p>scroll down!</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>content</p>
  <p>scroll up!</p>
</div>

    
</body>
</html>