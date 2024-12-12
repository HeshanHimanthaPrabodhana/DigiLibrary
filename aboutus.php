<?php 
include('header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="about.css">
  <title>About Us - Online Library System</title>
</head>
<body>
  <!-- Navbar -->
  <!-- Add your navbar code here -->

  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>Welcome to the Online Library System! We are dedicated to providing a convenient and accessible platform for users to explore and engage with a vast collection of books, magazines, journals, and more.</p>
          <p>With our user-friendly interface, you can easily search for specific titles, authors, genres, or keywords to discover new literary treasures. Our advanced search functionality allows you to filter and refine your results, ensuring a seamless browsing experience.</p>
          <p>In addition to our extensive collection, we offer various features such as personalized user profiles, book recommendations, ratings, reviews, and the ability to create virtual bookshelves to organize your favorite reads. Our online library system is designed to enhance your reading experience and foster a vibrant community of book enthusiasts.</p>
          <p>Thank you for choosing the Online Library System as your go-to resource for all things literary. We hope you enjoy exploring our collection and find inspiration within our digital shelves.</p>
        </div>
        <div class="col-md-6">
          <img src="about.jpg" alt="About Us" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="mission-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Our Mission</h2>
          <p>Our mission is to promote a love for reading and lifelong learning by making a diverse range of resources readily available to individuals of all ages and backgrounds. Whether you are a student, a professional, or simply an avid reader, our platform offers an extensive catalog to cater to your interests and educational needs.</p>
        </div>
        <div class="col-md-6">
          <!-- Add relevant mission-related image here -->
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
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
  <!-- Add your footer code here -->
<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="index.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
