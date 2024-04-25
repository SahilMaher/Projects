<?php
$cid=$_COOKIE['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from chat_data where sender_id=$cid or reciver_id=$cid ");
$i=0;
$sender_id=array();
$reciver_id=array();
while($row=mysqli_fetch_assoc($query))
{
    global $sender_id;
    global $reciver_id;
    $sender_id[$i]=$row['sender_id'];
    $reciver_id[$i]=$row['reciver_id'];
    $i=$i+1;
}
$query2=mysqli_query($con,"select * from user_data where u_id!=$cid");
while($row2=mysqli_fetch_assoc($query2))
{
    $uid=$row2['u_id'];
    if(in_array($uid,$sender_id) or in_array($uid,$reciver_id))
    {
        echo"$uid";
    }

}
?>