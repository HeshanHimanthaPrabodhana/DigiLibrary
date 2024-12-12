<?php 
include('header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
          <img src="img/slide1.jpg" alt="Los Angeles" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>FREE AND DISCOUNTED FORM DIGI LIBRARY</h3>
          <p>Join 50,000+ fellow readers. Get free and discounted bestsellers straight to your inbox with the Many Books eBook deals newsletter.</p>
        </div>
      </div>
      <div class="carousel-item c-item">
          <img src="img/slide2.jpg" alt="Chicago" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>LOTS OF EBOOKS. 100% FREE</h3>
          <p>Welcome to your friendly neightborhood library. We have more than 50,000 free ebooks waiting to be discovered. </p>
        </div> 
      </div>
      <div class="carousel-item c-item">
          <img src="img/slide0.jpg" alt="New York" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>THE ULIMATE WAY TO FREE READ BOOKS</h3>
          <p>Welcome to your read next? Explore our catelog of public domain books with our editors. Some real gems are hidden in our library.</p>
        </div>  
      </div>
      <div class="carousel-item c-item">
          <img src="img/slide3.jpg" alt="Chicago" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>ENJOY WITH BOOKS</h3>
          <p>Explore new things using books</p>
        </div> 
      </div>
      <div class="carousel-item c-item">
        <img src="img/slide-4.jpg" alt="Chicago" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>SIGN UP</h3>
          <p>If you are UWU university student can free use these resourse. And other users also have special offers for libray access in differnet categories.</p>
        </div> 
      </div>
      <div class="carousel-item c-item">
        <img src="img/slide-5.jpg" alt="Chicago" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div> 
      </div>
      <div class="carousel-item c-item">
        <img src="img/slide6.jpg" alt="Chicago" class="d-block c-img" style="width:100%">
        <div class="carousel-caption">
          <h3>READING MAKES A FULL MAN</h3>
          <p>Life will change if you use library success</p>
        </div> 
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  
    <div class="content">
            <h1>Welcome to UWU Digital<br><span>Library</span> Site</h1>
            <p class="par">Uva Wellassa University provides the facility for Different kind of so many category of books for university students and outside readers as well. <br> And also UWU university provides so many category of books, journels, research papers. 
                <br> You can read explore the so many kind of books in here </p>

                <button class="cn"><a href="#">JOIN US</a></button>
    </div>
                   
        </div>

    </div>

    <!--container-->
    
    <!--  Content-->
  <div class="container">

    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h3>BROWSE CATEGORIES</h3>
        </div>
    </div>



    <!-- Book cards -->
    <div class="row">
      <div class="col2" width="50" height="50">
        <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/romance.jfif" alt="Card image cap" width="100" height="200">
          <div class="middle">
            <div class="text"> ACTION & ADVENTURE</div>
          </div>
          <div class="card-body">
            <h5 class="card-title">Books</h5>
            
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
          </div>
        </div>
      </div>
      <div class="col2" width="50" height="50">
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="img/article.jpg" alt="Card image cap" width="100" height="200"">
          <div class=" card-body">
          <h5 class="card-title">Articles</h5>
          
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col2" width="50" height="50">
      <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/researchpapers.jpg" alt="Card image cap" width="100" height="200">
        <div class="card-body">
          <h5 class="card-title">Research Papers</h5>
          
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
   
  </div>
  <br>
  <!-- Line 02( not responsived for other devices)-->
  <div class="row">
    <div class="col2" width="50" height="50">
      <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/reports.jfif" alt="Card image cap" width="100" height="200">
        <div class="card-body">
          <h5 class="card-title">Reports</h5>
          <p class="card-text">

          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col2" width="50" height="50">
      <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/horror.jfif" alt="Card image cap" width="100" height="200">
        <div class="card-body">
          <h5 class="card-title">Horror</h5>
          <p class="card-text">

          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col2" width="50" height="50">
      <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/science.jfif" alt="Card image cap" width="100" height="200">
        <div class="card-body">
          <h5 class="card-title">Science Fiction</h5>
          <p class="card-text">
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>

    <div class="col2" width="50" height="50">
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="img/mystery.jfif" alt="Card image cap" width="100" height="200">
          <div class="card-body">
            <h5 class="card-title">Pass Papers</h5>
            
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
          </div>
        </div>
      </div>

    <div class="col2" width="50" height="50">
      <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="img/pastpapers.jfif" alt="Card image cap" width="100" height="200">
        <div class="card-body">
          <h5 class="card-title">Mystery & Thriller</h5>
          <p class="card-text">
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    
    <div class="col2" width="50" height="50">
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="img/children.jfif" alt="Card image cap" width="100" height="200">
          <div class="card-body">
            <h5 class="card-title">Children's Book</h5>
            
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
          </div>
        </div>
      </div>

  </div>
 <br>
 </div>
 <?php

 
 
 ?>
 <?php 
include('footer.php');

?>
</body>
</html>