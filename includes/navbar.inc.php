<?php
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes')!==false){
        include 'class-autoload.inc.php';
    }
    else {
        include 'includes/class-autoload.inc.php';
    }
?>
<!doctype html>
<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <link rel="stylesheet" href="/test/css/bootstrap.min.css">
    <link rel="stylesheet" href="/test/css/font-awesome.min.css">
    <link rel="stylesheet" href="/test/css/styles">
    <link rel="stylesheet" href="/test/css/bootstrap-social.css">
</head>
<body>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color: black;">
        <div class="container">
           <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/test/index.php"><span class="fa fa-list fa-lg"></span> Directory </a></li>
                    <li class="nav-item"><a class="nav-link" href="/test/uploadshistory.php"><span class="fa fa-upload fa-lg"></span> Uploads history</a></li>
                    <li class="nav-item"><a class="nav-link" href="/test/deletionhistory.php"><span class="fa fa-eraser fa-lg"></span> Deletion history </a></li>
                </ul>     
                <form action="search.php" method="POST" class="mr-5">
                    <input type="text" name="search" placeholder="Search in directory">
                    <button type="submit" name="submit-search">Search</button>
                </form>
                <a href="/test/upload.php">
                    <button type="submit" id="uploadbutton">
                    <span class="fa fa-upload"></span>Upload file
                </button></a>   
            </div>   
        </div>
    </nav>
    
</html>
