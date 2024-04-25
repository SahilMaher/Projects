<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","social_book");
$query=mysqli_query($con,"select * from story_data where sender=$id");
while($row=mysqli_fetch_assoc($query))
{?>
    <div class="popstory">
<?php
$img=$row['story_path'];
echo"uploads/$img";
?>
    </div>
<?php
}


?>