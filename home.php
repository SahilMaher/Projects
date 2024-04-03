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

}
       .imgs {
  overflow-x: hidden;  

 
  border: solid 5px black;
  border-radius: 5px;
  height: 675px;
  width: 99%;
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
        <img src="uploads/<?php echo$res[0]?>" alt="ProfilePhoto" width="130px" height="100%" />
           <div class="upload_story" style="margin-left: 10px;"><a  style=" text-decoration: none;" href="#">+Add Story</a></div>
        </div>   
        
        </div>
        <hr>
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