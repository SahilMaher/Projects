
<style>
        .main_div
        {
            margin-top: 20px;
            display: flex;
        }
        .frnd_div
        {

           
            width: 45%;
            height: 670px;
            overflow:auto;
            overflow-y: hidden;
        }
        .req_data
        {
           
            padding:5%;
            width: 45%;
            overflow:auto;

        }
    </style><?php
$id=$_COOKIE['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select frnd_id,req_id from req_data where req_id=$id");
if(mysqli_num_rows($query)>0)
{

while($res=mysqli_fetch_assoc($query))
{
    $id2=$res['frnd_id'];
    $frnd_id=$res['req_id'];
    if($frnd_id==$id)
    {
    $query2=mysqli_query($con,"select u_id,u_name,u_pro_img from user_data where u_id=$id2");
    while($row=mysqli_fetch_assoc($query2))
    {
           
        echo"<div class='user_data'><div>";
      $img=  $row['u_pro_img'];
        echo"<img class='user_data_img'  src='uploads/$img'  ></div><div class='user_data_name'>";
      $name=$row['u_name'];
      echo"$name";
      $id=$row['u_id'];
       echo" </div>";
           echo"<div>
       <a href='req_cancel.php?id=".$id2."'><input type='button' value='Cancel' class='btn_view'></a>
      
       </div></div>";
    }
}

}
}
?>
<?php
$id=$_COOKIE['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select req_id,frnd_id from req_data where frnd_id=$id");
if(mysqli_num_rows($query)>0)
{
    while($row2=mysqli_fetch_assoc($query))
    {
 $req1_id=$row2['req_id'];
 
    echo"Friend Requests";
    $query2=mysqli_query($con,"select u_id,u_name,u_pro_img from user_data where u_id=$req1_id ");
    while($row2=mysqli_fetch_assoc($query2))
    {
        echo"<div class='user_data'><div>";
        $img=  $row2['u_pro_img'];
          echo"<img class='user_data_img'  src='uploads/$img'  ></div><div class='user_data_name'>";
        $name=$row2['u_name'];
        echo"$name";
        $id=$row2['u_id'];
         echo" </div>";
             echo"<div>
         <a href='req_cancel.php?id=".$id."'><input type='button' value='Cancel' class='btn_view'></a>
         <a href='req_cancel.php?id=".$id."'><input type='button' value='Confirm' class='btn_view'></a>
        
         </div></div>";

    }
    }

}

?>