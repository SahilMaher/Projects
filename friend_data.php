
<?php
include("Header.html")

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
            overflow:hidden;

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends_Nav</title>
</head>

<body>
    <div >

    </div>

    <div class="main_div">
  
    <div class="frnd_div">
    <h3>Users</h3>
    <?php
    include("friend.php");
    ?>
       
</div>
<hr>
<h3 style="float: right;">Requested</h3>
<div class="req_data">
<?php include("requested.php");?>
</div>    

</div>

    
</body>
</html>