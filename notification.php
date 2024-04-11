
<style>
    .user_data
    {
       
        max-width:100%;
        margin: 5px ;
        font-size: 20px;
        display:flex;
       

    }
    .user_data_img
    {
        border-radius: 90px ;
    padding: 20px;
        height: 45%;
       width: 90px;
        margin-top: 5px;
        margin-left: 5px;
       
    }
    .user_data_name
    {
      
       text-align: center;
       margin-top: 40px;
       margin-left: 20px;
        

    }
    .btn_view
    {
        color:white;
        background-color:dodgerblue;
        padding: 10px;
       
        border-radius: 30px;
        max-width: 100%;
        margin-top: 40px;
       margin-left: 20px;
       cursor:pointer;
    }

</style> 

<?php
include("Header.html")

?>
<?php
$c_id=$_COOKIE['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from request_send where to_id=$c_id ");
$frnd_arr=array();
$i=0;
while($row=mysqli_fetch_assoc($query))
{
   global $frnd_arr;
   $frnd_arr[$i]=$row['sender_id'];
   $i=$i+1;


}
echo"there are ".sizeof($frnd_arr)."Request Available";
$q2=mysqli_query($con,"select * from user_data ");

while($r=mysqli_fetch_assoc($q2))
{
$id=$r['u_id'];
  if(in_array($id,$frnd_arr))  
  {
    echo"<div class='user_data'><div class='user_div'>";
            $img=  $r['u_pro_img'];
              echo"<img class='user_data_img'  src='uploads/$img' width='150px' ></div><div class='user_data_name'>";
            $name=$r['u_name'];
            echo"$name";
           
             echo" </div>";
                 echo"<div>";
                 echo"<a href='req_cancel.php?id2=".$id."'><input type='button' value='Cencel' class='btn_view'></a>";
                 echo"<a href='req_accept.php?id=".$id."'><input type='button' value='Confirm' class='btn_view'></a>";
                 echo" </div></div>";
            
  }
 


}

?>