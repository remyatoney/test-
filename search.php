<?php 
    include_once './includes/navbar.inc.php';
?>

<div class="container mt-4">
    <div class="row mt-3">
        <h2 class="mr-auto mt-4">Search Page</h2>
    </div>
    <?php
        if(isset($_POST['submit-search'])) {
            $mysqli = new mysqli("localhost1", "root", "", "testdb");
            $search = $mysqli->real_escape_string($_POST['search']);
            $searchObj = new FilesView();
            $searchObj->searchfile($search);
        }
    ?>
</div>
