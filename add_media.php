<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Story</title>
<style>
    .media
    {
        width: 60px;
        height: 50px;
        font-size: 30px;
        background-color: blue;
        color: white;
        float: right;
        border-radius: 360px;

    }
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    
    .popup {
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        padding: 20px;
        width: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body>
<button class="media" onclick="AddMedia()">+</button>

<div id="addmedia" class="overlay">
    <div class="popup">
        <span class="close" onclick="CloseAddMedia()">&times;</span>
        <h2>Add </h2>
        <button onclick="openAddStoryPopup()">Add Story</button>
        <button onclick="AddPost()">Add Post</button>
    </div>
</div>
<div id="Addpost" class="overlay">
    <div class="popup">
        <span class="close" onclick="ClosePost()">&times;</span>
        <h2>Add </h2>
        <button onclick="Addimagepost()">Image</button>
        <button onclick="Addvideopost()">Video</button>
    </div>
</div>
<div id="Addimagepost" class="overlay">
    <div class="popup">
        <span class="close" onclick="Closeimagepost()">&times;</span>
        <h2>Add Image </h2>
        <input type="file" name="image">
    </div>
</div><div id="Addvideopost" class="overlay">
    <div class="popup">
        <span class="close" onclick="Closevideopost()">&times;</span>
        <h2>Add Video</h2>
       <input type="file" name="video">
    </div>
</div>


<div id="addStoryPopup" class="overlay">
    <div class="popup">
        <span class="close" onclick="closeAddStoryPopup()">&times;</span>
        <h2>Add Story</h2>
        <button onclick="openImagePopup()">Add Image</button>
        <button onclick="openVideoPopup()">Add Video</button>
    </div>
</div>


<div id="imagePopup" class="overlay">
    <div class="popup">
        <form method="post" action="uploadStory.php" enctype="multipart/form-data">
        <span class="close" onclick="closeImagePopup()">&times;</span>
        <h2>Select Image</h2>
        <input type="file" name="image" >
        <input type="submit" value="Add" name="iadd"/>
        
    </div>
</div>


<div id="videoPopup" class="overlay">
    <div class="popup">
        <form method="get" action="#">
        <span class="close" onclick="closeVideoPopup()">&times;</span>
        <h2>Select Video</h2>
        <input type="file" name="video" accept=".mp4, .avi, .mov, .mkv, .wmv">
        <input type="submit" value="Add" name="vadd"/>
        </form>
    </div>
</div>

<script>
    
    function openAddStoryPopup() {
        document.getElementById("addStoryPopup").style.display = "block";
    }

    
    function closeAddStoryPopup() {
        document.getElementById("addStoryPopup").style.display = "none";
    }

    function AddMedia() {
        document.getElementById("addmedia").style.display = "block";
    }

    
    function CloseAddMedia() {
        document.getElementById("addmedia").style.display = "none";
    }


    
    function openImagePopup() {
        document.getElementById("imagePopup").style.display = "block";
    }

    
    function closeImagePopup() {
        document.getElementById("imagePopup").style.display = "none";
    }

    
    function openVideoPopup() {
        document.getElementById("videoPopup").style.display = "block";
    }

    
    function closeVideoPopup() {
        document.getElementById("videoPopup").style.display = "none";
    }
    
    function AddPost() {
        document.getElementById("Addpost").style.display = "block";
    }

    
    function ClosePost() {
        document.getElementById("Addpost").style.display = "none";
    }

    function Addimagepost() {
        document.getElementById("Addimagepost").style.display = "block";
    }

    
    function Closeimagepost() {
        document.getElementById("Addimagepost").style.display = "none";
    }
    function Addvideopost() {
        document.getElementById("Addvideopost").style.display = "block";
    }

    
    function Closevideopost() {
        document.getElementById("Addvideopost").style.display = "none";
    }
</script>

</body>
</html>
<?php

?>