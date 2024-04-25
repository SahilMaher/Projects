<style>
.imgdiv
{
 border:solid black;
 overflow: hidden;
    width: 130px;
height: 130px;
border-radius: 360px;

}
.main_footer
{
  border: solid black;
   display:flex; 
}

.text
{
  width:100px;
  border: solid black;
}
.content_div
{
    overflow-x:hidden ;  

 
  border: solid 5px black;
  border-radius: 5px;
  height: 450px;
  width: 99%;
    margin: auto;
 
}
.main_div
{
   
  border: 3px solid green;
  padding: 10px;

    display:flex;
}
h3
{
    font-size: 50px;
    margin-left: 30px;
    margin-top: 50px;
}
.txt_d
{
  margin-top: 20px;
  width: 50%;
  height: 30px;
  margin: 20px;
}
.btn
{
  border-radius: 90px;
  margin-top: 15px;
  width: 150px;
  height: 40px;
}
.img
{
width: 130px;
height: 130px;
border-radius: 360px;
}
    </style>
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from user_data where u_id=$id");
$row=mysqli_fetch_assoc($query);
$img=$row['u_pro_img'];
$name=$row['u_name'];
echo"<div class='main_div'>";
echo"<div class='imgdiv'><img class='img' src='uploads/$img'></div>";
echo"<h3>$name</h3></div>";
echo"<div class='content_div'>



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
</div>";

echo"</div>";
echo"<form method='get' action='#'><div class='main_footer'>


<input type='text' class='txt_d' name='msg' placeholder='Send Message'>


<input type='submit' class='btn' value='Send'>





</div></form>";

?>