<?php
            $id=$_COOKIE['id'];
            if(isset($_COOKIE[$id]))
            {
               $con=mysqli_connect("localhost","root","","social_book");
               $query=mysqli_query($con,"select * from story_data where sender=$id");
               while($row=mysqli_fetch_assoc($query))
               {
                $img=$row['path'];
                echo"<img class='story_img' src='uploads/$img'>";
               }
            }

            else{
        echo"<img src='uploads/$res[0]' alt='ProfilePhoto' width='130px' height='100%' />";
            }
          ?>