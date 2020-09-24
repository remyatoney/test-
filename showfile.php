<?php 
    include_once './includes/navbar.inc.php';
    $id = $_GET['id']; 
?>
<div class="container">  
    <div class="row row-content offset-sm-1">
        <?php
            $fileObj = new FilesView();
            $fileObj->showfile($id);
        ?>
    </div>
</div>