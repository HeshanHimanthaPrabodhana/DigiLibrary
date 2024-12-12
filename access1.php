<?php 
include('header.php'); 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Member</title>
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
 <!-- <header class="header">
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
  </header> -->
  <!--Body-->
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <br />
      <h1 class="animated-heading">Features of the Member</h1>
      <p class="emphasized">Explore the Functionality of the system</p>
    </header>
  </div>

  <div class="bg-image">
    <div class="text-block">
      <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
        <div class="row align-self-center gy-4 features">
          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Read Books</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Read Magazines</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Read Researches</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Read Magazines</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Check the book review</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
            <div class="feature-box d-flex align-items-center">
              <i class="fas fa-check icon"></i>
              <h3>Download all the resources</h3>
            </div>
          </div>

        </div>
      </div>
    </div>
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
</body>

</html>