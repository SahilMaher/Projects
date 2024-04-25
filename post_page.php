<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      .img_data
      {
        width:90px;
        border-radius: 300px;
      }
      .hr1
      {
        width: 100%;
      }
        .post {
  background-color: #f0f2f5;
  padding: 20px;
  width: 50%;
  padding: 10px;
  margin: auto;
}
.post_fetch
{
    padding: 20px;
  width: 50%;
  padding: 10px;
  margin: auto;

}

.post-content {
  
  padding: 20px;
  width: 50%;
  padding: 10px;
  margin: auto;
}
.buttons
{
  display: flex;
}

.like-btn, .share-btn, .comment-btn {
  margin-right: 10px;
}

.comments {
  margin-top: 10px;
}

.comment-form input[type="text"] {
  width: 100%;
  padding: 5px;
  margin-bottom: 5px;
}
.user_data
{
    display: flex;
}
.hr1
{
  width:290px;
  border-bottom-style:solid;
  box-shadow: 20px;
}

.comment-form button {
  padding: 5px 10px;
}
.txt_div
{
    margin-top: 40px;
    margin-left: 20px;
    font-size: 20px;
  
}
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
  const commentForm = document.querySelector('.comment-form');
  const commentBtn = document.querySelector('.comment-btn');

  commentBtn.addEventListener('click', function() {
    commentForm.style.display = 'block';
  });

  commentForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const commentInput = commentForm.querySelector('input[name="comment"]');
    const commentText = commentInput.value;
    addComment(commentText);
    commentInput.value = '';
  });

  function addComment(commentText) {
    const commentsContainer = document.querySelector('.comments');
    const commentElement = document.createElement('div');
    commentElement.textContent = commentText;
    commentsContainer.appendChild(commentElement);
  }
});

            </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook-like Post</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="post">
  <?php
  $con=mysqli_connect("localhost","root","","social_book");

  $qf=mysqli_query($con,"select * from friend_data");
  $frnd1_arr=array();
  $my_arr=array();
  $i2=0;
  while($r3=mysqli_fetch_assoc($qf))
  {
     global $frnd1_arr;
     global $my_arr;
     $my_arr[$i2]=$r3['my_id'];
  
  
    
     $frnd1_arr[$i2]=$r3['friend_id'];
     $i2=$i2+1;
  
  
  }
  
  $id=$_COOKIE['id'];
        $con=mysqli_connect("localhost","root","","social_book");
        $query=mysqli_query($con,"select * from post_data  where post_id");
        
        while($row=mysqli_fetch_assoc($query))
        {
          $post_id=$row['id'];
            $pid=$row['post_id'];
            $q=mysqli_query($con,"select * from user_data where u_id=$pid");
            $r=mysqli_fetch_assoc($q);
            if(in_array($pid,$frnd1_arr) || in_array($pid,$my_arr) and in_array($id,$frnd1_arr) || in_array($id,$my_arr) || $pid==$id )
            {
                
            
        
        
        
        ?>
    <div class="post-content">
        <div class="user_data">
            <?php
            $img1=$r['u_pro_img'];
            echo"<img src='uploads/$img1' width='80%'  class='img_data'>";
            echo"<div class='txt_div'>".$r['u_name']."</div>";
            
            
            ?>
        </div>
        <hr width="300px">
      <p><?php
      echo$row['post_detail'];
      ?></p>
      <div class="post_fetch">
  
        <?php
       $img= $row['post_path'];
      
        echo"<img src='uploads/$img' width='250px' height='300px'> ";
       
              echo"<hr width='300px' class='hr1'>";
              echo" <div class='buttons'>";
            
             $q_p=mysqli_query($con,"select * from like_data where post_id=$pid");
             echo mysqli_num_rows($q_p);
             
            
             echo" <a href='like_data.php?id=$post_id'><button class='like-btn'>Like</button></a>
              <button class='share-btn'>Share</button>
              <button class='comment-btn'>Comment</button>
              </div>
              <div class='comments'>
                <!-- Comments will be loaded dynamically -->
                </div>";
                echo" <form class='comment-form' style='display: none;'>
                <input type='text' name='comment'placeholder='Write a comment...'>
                <button type='submit'>Submit</button>
              </form>";
      }
    //           if($pid==$id)
    //           {
    //           $img1=$r['u_pro_img'];
    //         echo"<img src='uploads/$img1' width='30%'  class='img_data'>";
    //         echo"<div class='txt_div'>".$r['u_name']."</div>";
    //         echo$row['post_detail'];
    
    //  echo" <div class='post_fetch'>";
  
       
    //    $img= $row['post_path'];
    //     echo"<img src='uploads/$img' width='70%'> ";
    //     echo" <div class='buttons'>
    //     <button class='like-btn'>Like</button>
    //     <button class='share-btn'>Share</button>
    //     <button class='comment-btn'>Comment</button>
    //     </div>
    //     <div class='comments'>
    //       <!-- Comments will be loaded dynamically -->
    //       </div>";

    //           }
            
        ?>
       
     
    </div>
   
      <?php
      }?>
     
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
