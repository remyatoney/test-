<?php
    include 'navbar.inc.php';
?>
<div class="row">
</div>
<div class="container">  
    <div class="row mt-3">
        <h2 class="mr-auto mt-5">FILES</h2>
    </div>
    <div class="row row-content">    
        <?php
            $id = $_POST['id'];
            $fileObj = new FilesContr();
            $fileObj->filedelete($id);
            header("Location: ../deletionhistory.php");
        ?>       
    </div>
</div>
</html>