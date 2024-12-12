<?php
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
    </head>
    <body>
<!--        header start-->
        <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3" >
            <div class="container" style="background-color:black">
                <a class="navbar-brand d-flex align-items-center" href="#" >
                    <img src="img/logo.jpg" alt="Logo" style="height: 50px;width: 50px">
                    <span style="color: orange;font-weight: bold;font-size: 25px">UWU Digital Library</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-5">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="HomePage.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="font-weight: bold" href="genre.php">COLLECTIONS</a>
                        </li>
                        
                        
                        <li class="nav-item">
                          <a class="nav-link" href="packagehome.php">DOWNLOAD</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">ABOUT US</a>
                    </li>
                    </ul>
                    <a class="btn btn-primary ms-md-2" style="background-color: orange;border: orange" role="button" href="logout.php">Log out</a>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!--        header end-->
    </body>
</html>
