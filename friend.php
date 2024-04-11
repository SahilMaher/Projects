
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
$con=mysqli_connect("localhost","root","","social_book");
$c_id=$_COOKIE['id'];
$query=mysqli_query($con,"select * from friend_data");



$frnd1_arr=array();
$my_arr=array();
$i2=0;
while($row=mysqli_fetch_assoc($query))
{
   global $frnd1_arr;
   global $my_arr;
   $my_arr[$i2]=$row['my_id'];


  
   $frnd1_arr[$i2]=$row['friend_id'];
   $i2=$i2+1;


}

$frnd_id=array();
$i=0;


$q1=mysqli_query($con,"select * from request_send where sender_id=$c_id ");
if(mysqli_num_rows($q1)>0)
{
    while($row1=mysqli_fetch_assoc($q1))
    {
        $id_frnd=$row1['to_id'];
       global $frnd_id;
       $frnd_id[$i]=$id_frnd;
        $i=$i+1;


    }
   
   

}
$size=sizeof($frnd_id);
$q2=mysqli_query($con,"select * from user_data where u_id!=$c_id");

$num=mysqli_num_rows($q2);
if($num>0)
{
    
    while($row=mysqli_fetch_assoc($q2))
    {
       
          
                
        $id=$row['u_id']; 
        echo"<div class='user_data'><div class='user_div'>";
            $img=  $row['u_pro_img'];
              echo"<img class='user_data_img'  src='uploads/$img' width='150px' ></div><div class='user_data_name'>";
            $name=$row['u_name'];
            echo"$name";
           
             echo" </div>";
                 echo"<div>";
              

        
       
     
        if(in_array($id,$frnd1_arr) || in_array($id,$my_arr) and in_array($c_id,$frnd1_arr) || in_array($c_id,$my_arr) )
        {
            echo"<a href='req_cancel.php?id3=".$id."'><input type='button' value='Unfriend' class='btn_view'></a>";
        }
        else
        {
            if(in_array($id,$frnd_id))
            {
                echo"<a href='req_cancel.php?id=".$id."'><input type='button' value='Cencel' class='btn_view'></a>";
    
            }
            else{
            echo"<a href='request.php?id=".$id."'><input type='button' value='Add Friend' class='btn_view'></a>";
            }
        }
        
            echo" </div></div>";
       
        


    }
}
else
{
    echo "data not Fond";
}




?>


