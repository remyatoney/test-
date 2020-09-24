<?php
    include 'includes/navbar.inc.php';
?>
<div class="row">
</div>
<div class="container">  
    <div class="row mt-3">
        <h2 class="mr-auto mt-5">DELETED FILES</h2>
    </div>
    <div class="row row-content">    
        <?php
            $FilesObj = new FilesView();
            $FilesObj->showfiledeleteget();
        ?>       
    </div>
</div>
</html>