<?php 
include('header.php'); 
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="index.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Access</title>
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="access.css" />
  <link rel="stylesheet" href="footer.css" />
  <script src="https://kit.fontawesome.com/645e04b601.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- aos css -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
  <!--Header-->
  <!--<header class="header">
    <div class="logo">
      <img src="logo.jpg" alt="Library Logo" />
      <h1>Library Management System</h1>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Members</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </nav>
  </header>-->

  <!-- Slider 1 -->
  <div class="slider-container">
    <div class="slider">
      <div class="slide">

        <img src="carousel1.jpeg" alt="Image 1" />
        <div class="overlay">
          <input type="text" placeholder="Member" />
          <div class="button-container">
            <form action="access1.php">
              <button class="btn1">View</button>
            </form>
              <form action="login.php">
               <button>Login</button>
             </form>
          </div>
        </div>

      </div>
    </div>
    <!-- Slider 2 -->

    <div class="slider">
      <div class="slide">

        <img src="carousel2.jpeg" alt="Image 2" />
        <div class="overlay">
          <input type="text" placeholder="User" />
          <div class="button-container">
            <form action="access2.php">
            <button class="btn1">View</button>
            </form>
            <form action="memberform.php">
            <button> Register</button>
            </form>
          </div>
        </div>

      </div>
    </div>


    <!-- Slider 3 -->

    <div class="slider">
      <div class="slide">

        <img src="carousel3.jpeg" alt="Image 3" />
        <div class="overlay">
          <input type="text" placeholder="Visitor" />
          <div class="button-container">
            <form action="access3.php">
            <button class="btn1">View</button>
            </form>
            <form action="registration.php">
            <button>Register</button>
            </form>
          </div>
        </div>

      </div>
    </div>


    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>




  <!--Footer-->
  <footer>
    <div class="row footer-container">
      <div class="foot">
        <img src="logo.jpg" class="logo" />
        <p>...Welcome to UWU University Library...</p>
      </div>

      <div class="foot">
        <h3>
          Office
          <div class="underline"><span></span></div>
        </h3>
        <p>ITPL Road</p>
        <p>Whitefield, Sri Lanka</p>
        <p>Kamburupitya.Matara,Sri Lanka</p>
        <p class="email-id">ggheshanhimantha@gmail.com</p>
        <h4>+94 - 0713139439</h4>
      </div>

      <div class="foot">
        <h3>
          Links
          <div class="underline"><span></span></div>
        </h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Features</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>

      <div class="foot">
        <h3>
          Newsletter
          <div class="underline"><span></span></div>
        </h3>
        <form class="subscription-form">
          <i class="fa-thin fa-envelopes"></i>
          <input type="email" placeholder="Enter your email id" required />
          <button type="submit">
            <i class="fa-solid fa-circle-arrow-right"></i>
          </button>
        </form>
        <div class="icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
        </div>
      </div>
    </div>
    <hr />
    <p class="copyright">
      @Copyright 2023-UWU Digital Library.All right reserved.
    </p>
  </footer>
  <!-- aos -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="index.js"></script>
</body>

</html>