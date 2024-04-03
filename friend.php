
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
    padding: 15px;
        height: 55%;
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
if(isset($_COOKIE['id']))
{
$con=mysqli_connect("localhost","root","","social_book");
if($con==false)
{
    echo"Connection Error";
}

$query=mysqli_query($con,"select u_id,u_name,u_pro_img from user_data  ");
$c_id=$_COOKIE['id'];
if(mysqli_num_rows($query)>0)
{
    $reqquery=mysqli_query($con,"select frnd_id,req_id from req_data where req_id=$c_id");
    while($row=mysqli_fetch_assoc($query))
    {
        $u_id=$row['u_id'];
        
        if($row['u_id']==$_COOKIE['id'] )
        {
            continue;
        }
 

       if(mysqli_num_rows($reqquery)>0)
       {
        while($reqdata=mysqli_fetch_assoc($reqquery))
    {
        $id=$reqdata['req_id'];
       
        $req_id=$reqdata['req_id'];
        $frnd_id=$reqdata['frnd_id'];
      
            if($req_id==$_COOKIE['id']  )
            {
               continue;
        
            }
            else{
            
               

           
        echo"<div class='user_data'><div>";
      $img=  $row['u_pro_img'];
        echo"<img class='user_data_img'  src='uploads/$img'  ></div><div class='user_data_name'>";
      $name=$row['u_name'];
      echo"$name";
      $id=$row['u_id'];
       echo" </div>";
           echo"<div>
       <a href='frnd_profile.php?id=".$id."'><input type='button' value='View' class='btn_view'></a>
       <a href='request.php?id=".$id."'><input type='button' value='Request' class='btn_view'></a>
       </div></div>";
            }
            
         }
        }
        else
        {
            echo"<div class='user_data'><div>";
            $img=  $row['u_pro_img'];
              echo"<img class='user_data_img'  src='uploads/$img' width='150px' ></div><div class='user_data_name'>";
            $name=$row['u_name'];
            echo"$name";
            $id=$row['u_id'];
             echo" </div>";
                 echo"<div>
             <a href='frnd_profile.php?id=".$id."'><input type='button' value='View' class='btn_view'></a>
             <a href='request.php?id=".$id."'><input type='button' value='Request' class='btn_view'></a>
             </div></div>";

        }
  
        
    }
       
    }
}

else
{
    echo"<script>alert('Page Not Found')</script>";
}
?>

