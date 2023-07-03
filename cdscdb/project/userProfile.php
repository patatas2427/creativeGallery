<?php
include_once 'header-profile.php' ;
?>

<section class="profile">
   <div class="userProfile">
        <div class="userdescription">
            <div class="picture">
                <div class="picture-1">
                    <i class="fa-sharp fa-solid fa-user-tie"></i>
                </div>
                <div class="descriptionprofile"> 
                    <p>Edit profile</p><br>
                    <label for="bio">Enter your bio here:</label><br>
                    <input type="text" name="">
                    <br>
                    <label for="address"> Address:</label><br>
                    <input type="text" name="">
                    <br>
                    <label for="number">Number: </label><br>
                    <input type="text" name="">
                    <br>
                </div>
 
            </div>
        </div>
        <div class="upload-1">
            <div class="upload-text">
                <h2>Upload Here!</h2>
            </div>
            <div class="uploadform">
                <form action="includes/userUpload-inc.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <label for="file">Upload a file here:</label><br>
                    <input type="file" name="image" accept=".jpg, .jpeg, .png" placeholder="">
                    <br>
                    <label for="title">Enter a title</label><br>
                    <input type="text" name="title" placeholder="">
                    <br>
                    <label for="desc">Add a Description</label><br>
                    <input type="text" name="desc" placeholder="">
                    <br>
                    <button type="submit" name="submit">Submit </button>      
                </form>
            </div>
        </div>
   </div>
</section>
   
    
    
<?php
include_once 'footer-profile.php';
?>