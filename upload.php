<?php
include 'includes/navbar.inc.php';
echo '<div class="contact container mt-4">
    <h4 class="mt-5">Upload</h4>';
    
    echo '<form action="includes/file-upload.inc.php" method="POST" enctype="multipart/form-data">
            <p>
            <label for="exampleFileName3">File Name</label>
            <input type="text" name="filename" id="exampleFileName3" placheholder="New file name" style="width: 250px;"><br> 
            </p>
            <p>
            <p>
            <label for="exampleDescription3">Description</label>
            <input type="text" name="description" id="exampleDescription3" placeholder="File Description" style="width: 250px;"><br> 
            </p>
            <p class="ml-5">
            <input type="file" name="file">
            </p>
            <p>
            <button type="submit" name="submit" class="btn btn-sm ml-1" style="background-color: grey;">Upload</button>
            </p>    
        </form>';
        if (isset($_GET["error"])) {
            if($_GET["error"] == "emptyfields") {
                echo '<p class="signuperror">Fill in all fields!</p>';
            }
            elseif($_GET["error"] == "bigfile") {
                echo '<p class="signuperror">File Size is too big!</p>';
            }
            elseif($_GET["error"] == "fileerror") {
                echo '<p class="signuperror">File is erroneous!</p>';            
            }
            elseif($_GET["error"] == "improperfiletype") {
                echo '<p class="signuperror">You need to upload a proper file type(txt, doc, pdf, jpg, jpeg or png)!</p>';            
            }
        }
        elseif (isset($_GET["upload"])) {
            if ($_GET["upload"] == "success") {
                echo '<p class="signupsuccess">Upload successful!</p>';
            }
        }
        
    echo '</div>';